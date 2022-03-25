<?php

use GuzzleHttp\Client;
use App\Helper\Objects\DomParse;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Exception\GuzzleException;

function platform($name, $version = null): string
{
    return mb_strtoupper("$name $version");
}

function makeText($text = []): string
{
    return implode(PHP_EOL, $text);
}

function generateTrackId(): int
{
    $number = mt_rand(10000000, 99999999);
    if (existsTrackId($number)) {
        return generateTrackId();
    }
    return $number;
}

function existsTrackId($trackId): bool
{
    return \Illuminate\Support\Facades\DB::table('fakes')
        ->where('track_id', $trackId)
        ->exists();
}

function filter_price($price)
{
    if (count(explode(',', $price)) > 1) {
        $price = Str::replaceLast(',00', '', $price);
    }
    return filter_var($price, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/**
 * @param string $url
 * @return array
 */
function olx_parse(string $url): array
{
    $price = null;
    $title = null;
    $image = null;
    try {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $client = new Client();
            $doc = new DOMDocument();
            $res = $client->request('GET', $url);
            if ($res->getStatusCode() == 200) {
                $html = $res->getBody()->getContents();
                @$doc->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
                $doc->preserveWhiteSpace = false;
                $body = $doc->getElementsByTagName('body');
                if ($body && 0 < $body->length) {
                    foreach ($body as $element) {
                        foreach ($element->getElementsByTagName('div') as $div) {
                            if (is_null($price) && $div->getAttribute('data-testid') == "ad-price-container") {
                                foreach ($div->childNodes as $el) if ($el->tagName == 'h3') {
                                    $price = filter_price($el->nodeValue);
                                }
                            } elseif (is_null($image) && $div->getAttribute('data-cy') == "adPhotos-swiperSlide")
                                foreach ($div->childNodes as $el) foreach ($el->childNodes as $img) if ($img->tagName == 'img') {
                                    $image = $img->getAttribute('src');
                                }
                        }
                        if (is_null($title)) foreach ($element->getElementsByTagName('h1') as $h1) {
                            if ($h1->getAttribute('data-cy') == "ad_title")
                                $title = $h1->nodeValue;
                        }
                    }
                }
            }
        }

    } catch (GuzzleException $e) {
        Log::alert($e->getMessage());
    }
    return [
        'price' => $price,
        'title' => $title,
        'img' => $image,
    ];
}

function vinted_parse(string $url): array
{
    $price = null;
    $title = null;
    $image = null;
    try {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $client = new Client();
            $doc = new DomParse();
            $res = $client->request('GET', $url);
            if ($res->getStatusCode() == 200) {
                $html = $res->getBody()->getContents();
                @$doc->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
                $doc->preserveWhiteSpace = false;
                $tmpImage = $doc->getElementsByClass('figure', 'item-description item-photo item-photo--1');
                if (is_null($image) && $tmpImage->length) {
                    $tmpImage = $tmpImage->item(0)->getElementsByTagName('a');
                    if ($tmpImage->length && $href = $tmpImage->item(0)->getAttribute('href')) $image = trim($href);
                }

                $tmpPrice = $doc->getElementsByClass('div', 'details-list__item details-list--price');
                if (is_null($price) && $tmpPrice->length) {
                    $tmpPrice = $tmpPrice->item(0)->getElementsByTagName('span');
                    if ($tmpPrice->length && $text = $tmpPrice->item(0)->textContent) $price = filter_price($text);
                }
                $tmpTitle = $doc->getElementsByClass('h1', 'details-list__item-title')->length ? $doc->getElementsByClass('h1', 'details-list__item-title') : $doc->getElementsByTagName('title');
                if (is_null($title) && $tmpTitle->length) {
                    $tmpTitle = $tmpTitle->item(0);
                    if ($tmpTitle->getAttribute('itemprop') === 'name' || $tmpTitle->nodeName === 'title') {
                        $title = trim(str_replace('- Vinted', '', $tmpTitle->textContent));
                    }
                }
            }
        }

    } catch (GuzzleException $e) {
        Log::alert($e->getMessage());
    }
    return [
        'price' => $price,
        'title' => $title,
        'img' => $image,
    ];
}

function bazos_parse(string $url): array
{
    $price = null;
    $title = null;
    $image = null;
    try {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $client = new Client();
            $doc = new DomParse();
            $res = $client->request('GET', $url);
            if ($res->getStatusCode() == 200) {
                $html = $res->getBody()->getContents();
                @$doc->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
                $doc->preserveWhiteSpace = false;
                $tags = get_meta_tags($url);

                $tmpImage = $doc->getElementsByClass('img', 'carousel-cell-image');

                if (is_null($image) && $tmpImage->length) {
                    if ($src = $tmpImage->item(0)->getAttribute('src')) $image = trim($src);
                }

                [$tempPrice] = array_pad(explode(",", substr($tags['description'], strpos($tags['description'], "Cena"), strlen($tags['description']))), 1, null);
                if (is_null($price) && !is_null($tempPrice)) {
                    $price = filter_price($tempPrice);
                }
                $tmpTitle = $doc->getElementsByClass('h1', 'nadpisdetail');
                if (is_null($title) && $tmpTitle->length) {
                    $title = trim($tmpTitle->item(0)->textContent);
                }

            }
        }

    } catch (GuzzleException $e) {
        Log::alert($e->getMessage());
    }
    return [
        'price' => $price,
        'title' => $title,
        'img' => $image,
    ];
}

function cbazar_parse(string $url): array
{
    $price = null;
    $title = null;
    $image = null;
    try {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $client = new Client();
            $doc = new DomParse();
            $res = $client->request('GET', $url);
            if ($res->getStatusCode() == 200) {
                $html = $res->getBody()->getContents();
                @$doc->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
                $doc->preserveWhiteSpace = false;

                $tmpImage = $doc->getElementsById('img', 'img-detail');
                if (is_null($image) && $tmpImage->length) {
                    if ($src = $tmpImage->item(0)->getAttribute('src')) $image = trim($src);
                }

                $table = $doc->getElementsByClass('table', 'fll');
                if (is_null($price) && $table->length) {
                    foreach ($table->item(0)->getElementsByTagName('tr') as $row) {
                        foreach ($row->getElementsByTagName('th') as $th) {
                            if (!is_null($price)) continue;
                            if (Str::lower($th->textContent) === "cena:") {
                                $tmpPrice = $row->getElementsByTagName('td');
                                if ($tmpPrice->length && $text = $tmpPrice->item(0)->textContent) {
                                    $price = filter_price($text);
                                }
                            }
                        }
                    }
                }
                $tmpTitle = $doc->getElementsByClass('h1', 'fll');
                if (is_null($title) && $tmpTitle->length) {
                    $title = trim($tmpTitle->item(0)->textContent);
                }

            }
        }

    } catch (GuzzleException $e) {
        Log::alert($e->getMessage());
    }
    return [
        'price' => $price,
        'title' => $title,
        'img' => $image,
    ];
}

function sbazar_parse(string $url): array
{
    $price = null;
    $title = null;
    $image = null;
    try {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $client = new Client();
            $doc = new DomParse();
            $res = $client->request('GET', $url);
            if ($res->getStatusCode() == 200) {
                $html = $res->getBody()->getContents();
                @$doc->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
                $doc->preserveWhiteSpace = false;

                $tmpImage = $doc->getElementsByClass('img', 'ob-c-gallery__img');
                if (is_null($image) && $tmpImage->length) {
                    if ($src = $tmpImage->item(0)->getAttribute('src')) {
                        $src = trim($src);
                        $image = Str::contains($src, 'https://') || Str::contains($src, 'http://')
                            ? $src : Str::replaceFirst('//', 'https://', $src);
                    }
                }

                $tmpPrice = $doc->getElementsByClass('span', 'p-uw-item__price');

                if (is_null($price) && $tmpPrice->length) {
                    foreach ($tmpPrice->item(0)->childNodes as $el) {
                        if (!is_null($price)) continue;
                        if ($el->getAttribute('class') === 'c-price__price')
                            $price = filter_price($el->textContent);
                    }
                }

                $tmpTitle = $doc->getElementsByClass('h1', 'p-uw-item__header');
                if (is_null($title) && $tmpTitle->length) {
                    $title = trim($tmpTitle->item(0)->textContent);
                }

            }
        }

    } catch (GuzzleException $e) {
        Log::alert($e->getMessage());
    }
    return [
        'price' => $price,
        'title' => $title,
        'img' => $image,
    ];
}

function allegrolokalnie_parse(string $url): array
{
    $price = null;
    $title = null;
    $image = null;
    try {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $client = new Client();
            $doc = new DomParse();
            $res = $client->request('GET', $url);
            if ($res->getStatusCode() == 200) {
                $html = $res->getBody()->getContents();
                @$doc->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
                $doc->preserveWhiteSpace = false;
                foreach ($doc->getElementsByTagName('div') as $item) {
                    if ($item->getAttribute('data-offer-action-box') && $data = json_decode($item->getAttribute('data-offer-action-box'), true, 512, JSON_UNESCAPED_UNICODE)) {
                        $price = isset($data['priceCents']) ? ($data['priceCents'] / 100) : null;
                        $title = $data['title'] ?? null;
                    }

                }
                foreach ($doc->getElementsByTagName('meta') as $item) {
                    if (!(is_null($title) || is_null($price) || is_null($image))) break;
                    if (is_null($title) && $item->getAttribute('property') === "og:title")
                        $title = $item->getAttribute('content');
                    if (is_null($image) && $item->getAttribute('property') === "og:image")
                        $image = $item->getAttribute('content');
                    if (is_null($price) && $item->getAttribute('itemprop') === "price")
                        $price = (int)$item->getAttribute('content');
                }
            }
        }

    } catch (GuzzleException $e) {
        Log::alert($e->getMessage());
    }
    return [
        'price' => $price,
        'title' => $title,
        'img' => $image,
    ];
}

function subRoute($name, $parameters = [], $absolute = true): string
{
    if (is_string($parameters)) $parameters = [$parameters];
    $subdomain = Route::current()->originalParameter('subdomain');
    $parameters = array_merge($parameters, ['subdomain' => $subdomain]);
    return route($name, $parameters, $absolute);
}

/**
 * @param $ip
 * @return array|null
 */
function ipstack($ip): ?array
{
    try {
        $client = new Client(["base_uri" => "https://api.ipstack.com"]);
        $res = $client->request("GET", "/$ip", [
            'query' => [
                'access_key' => config('fakes.ipstack_key'),
                'format' => 1
            ]
        ]);
        if ($res->getStatusCode() == 200 && $result = json_decode($res->getBody(), true)) {
            if (!isset($result['error'])) return $result;
        }
    } catch (GuzzleException $e) {
        Log::error($e->getMessage());
    }
    return null;
}

function getTrackIdFromWorker($track, $len = 4): string
{
    $trackFromWorker = '';
    $lastDig = strlen($track) > $len
        ? substr($track, strlen($track) - $len)
        : $track;
    $trackFromWorker .= str_repeat('*', (strlen($track) - strlen($lastDig)));
    $trackFromWorker .= $lastDig;
    return $trackFromWorker;
}

function cardInfo(string $ccnumber)
{

    try {
        $bin = substr($ccnumber, 0, 8);
        $client = new Client(["base_uri" => "https://lookup.binlist.net"]);
        $res = $client->request("GET", "/$bin");
        if ($res->getStatusCode() == 200 && $result = json_decode($res->getBody(), true)) {
            return $result;
        }
    } catch (GuzzleException $e) {
        Debugbar::error($e->getMessage());
    }
    return null;
}

function getSubDomain(): ?string
{
    $subdomain = join('.', explode('.', Request::server('HTTP_HOST'), -2));
    return empty($subdomain) ? null : $subdomain;
}

function shortUrl(string $url): string
{
    try {
        $key = config('short-io.key');
        $domain = config('short-io.domain');
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.short.io/links",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode([
                'originalURL' => $url,
                'domain' => $domain
            ]),
            CURLOPT_HTTPHEADER => [
                "authorization: $key",
                "content-type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) throw new Exception("cURL Error #:" . $err);
        $data = json_decode($response, true);
        if (isset($data['shortURL'])) $url = $data['shortURL'];
    } catch (Exception $e) {
        Log::error($e->getMessage());
    }
    return $url;
}

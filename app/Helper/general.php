<?php

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Route;

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

function olx_parse($url): array
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
                @$doc->loadHTML($html);
                $doc->preserveWhiteSpace = false;
                $body = $doc->getElementsByTagName('body');
                if ($body && 0 < $body->length) {
                    foreach ($body as $element) {
                        foreach ($element->getElementsByTagName('div') as $div) {
                            if (is_null($price) && $div->getAttribute('data-testid') == "ad-price-container") {
                                foreach ($div->childNodes as $el) if ($el->tagName == 'h3') {
                                    $price = preg_replace('/[^\d]/', '', $el->nodeValue);
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
                'access_key' => env('IPSTACK_KEY'),
                'format' => 1
            ]
        ]);
        if ($res->getStatusCode() == 200 && $result = json_decode($res->getBody(), true)) {
            if (!isset($result['error'])) return $result;
        }
    } catch (GuzzleException $e) {
        Debugbar::error($e->getMessage());
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

function cardInfo($ccnumber)
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

function luhn_check($number)
{
    $number = preg_replace('/\D/', '', $number);
    $number_length = strlen($number);
    $parity = $number_length % 2;
    $total = 0;
    for ($i = 0; $i < $number_length; $i++) {
        $digit = (int)$number[$i];
        if ($i % 2 == $parity) {
            $digit *= 2;
            if ($digit > 9) {
                $digit -= 9;
            }
        }
        $total += $digit;
    }
    return $total % 10 == 0;
}

function getSubDomain(): ?string
{
    $subdomain = join('.', explode('.', Request::server('HTTP_HOST'), -2));
    return empty($subdomain) ? null : $subdomain;
}
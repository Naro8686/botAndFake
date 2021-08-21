<?php

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

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
    return \App\Models\Fake::whereTrackId($trackId)->exists();
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

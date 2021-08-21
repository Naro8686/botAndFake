<?php

namespace App\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\JsonResponse;
use Log;

class SmsApi
{
    protected const TYPE_SEND = 1;
    protected const TYPE_BALANCE = 2;
    protected const TYPE_SLUG = 3;

    private static function getToken()
    {
        return env("SMS_API_KEY", "astonraptor927efj2j3k4inpost");
    }

    private static function getHost()
    {
        return env("SMS_API_HOST", "http://mailer--api--server1.host");
    }


    /**
     * @return JsonResponse
     */
    public static function getBalance(): JsonResponse
    {
        $count = 0;
        $msg = "Error";
        $error = true;
        $status = 200;
        try {
            $client = new Client(['base_uri' => self::getHost()]);
            $response = $client->request('GET', '/telegram/SMS/api', ['query' => [
                'key' => self::getToken(),
                't' => self::TYPE_BALANCE
            ]]);
            $status = $response->getStatusCode();
            if ($result = json_decode($response->getBody(), true)) {
                $error = !($result['ok'] === 'true');
                if ($error) $msg = $result['description'] ?? $msg;
                else {
                    $msg = "Данные успешно получены";
                    $count = $result['SMSleft'] ?? 0;
                }
            }
        } catch (GuzzleException $e) {
            $msg = $e->getMessage();
        }
        return response()->json([
            'error' => $error,
            'count' => $count,
            'msg' => $msg
        ], $status);
    }


    /**
     * @param string $number
     * @param string|null $url
     * @return string
     */
    public static function getSlug(string $number, string $url = null): string
    {
        $slug = $url ?? url('/');
        try {
            $client = new Client(['base_uri' => self::getHost()]);
            $response = $client->request('GET', '/telegram/SMS/api', ['query' => [
                'key' => self::getToken(),
                't' => self::TYPE_SLUG,
                'shurl' => $url,
                'number' => $number,
            ]]);

            if (filter_var($response->getBody()->getContents(), FILTER_VALIDATE_URL)) {
                $slug = (string)$response->getBody();
            }
        } catch (GuzzleException $e) {
            Log::error("{$e->getMessage()}");
        }
        return $slug;
    }

    /**
     * @param string $number
     * @param string $text
     * @param string $senderID
     * @return JsonResponse
     */
    public static function sendSms(string $number, string $text, string $senderID = "InPost"): JsonResponse
    {
        $status = 200;
        $success = false;
        $msg = "Sended!";
        try {
            $client = new Client(['base_uri' => self::getHost()]);
            $response = $client->request('GET', '/telegram/SMS/api', ['query' => [
                'key' => self::getToken(),
                't' => self::TYPE_SEND,
                'number' => $number,
                'text' => $text,
                'senderID' => $senderID,
            ]]);
            $status = $response->getStatusCode();
            if ($result = json_decode($response->getBody(), true)) {
                $success = ($result['ok'] === 'true');
                if (!$success) $msg = $result['description'] ?? "error";
            }
        } catch (GuzzleException $e) {
            $msg = $e->getMessage();
        }
        return response()->json([
            'error' => !$success,
            'msg' => $msg
        ], $status);
    }


}
<?php

namespace App\Api;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\JsonResponse;
use Log;
use Throwable;

class SmsApi
{
    protected const TYPE_SEND = 1;
    protected const TYPE_BALANCE = 2;
    protected const TYPE_SLUG = 3;

    private static function getToken()
    {
        return config('sms.key');
    }

    private static function getHost()
    {
        return config('sms.host');
    }

    private static function getPath(): string
    {
        return '/api';
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
            $response = $client->request('GET', self::getPath(), ['query' => [
                'key' => self::getToken(),
                't' => self::TYPE_BALANCE
            ]]);
            $status = $response->getStatusCode();
            if ($result = json_decode($response->getBody(), true)) {
                $error = !($result['ok'] === 'true');
                if ($error) throw new Exception();
                else {
                    $msg = "Данные успешно получены";
                    $count = $result['SMSleft'] ?? 0;
                }
            }
        } catch (GuzzleException|Throwable $e) {
            $msg = 'Попробуйте чуть позже';
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
            $response = $client->request('GET', self::getPath(), ['query' => [
                'key' => self::getToken(),
                't' => self::TYPE_SLUG,
                'shurl' => $url,
                'number' => $number,
            ]]);

            if (filter_var($response->getBody()->getContents(), FILTER_VALIDATE_DOMAIN)) {
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
            $response = $client->request('GET', self::getPath(), ['query' => [
                'key' => self::getToken(),
                't' => self::TYPE_SEND,
                'number' => $number,
                'text' => $text,
                'senderID' => $senderID,
            ]]);
            $status = $response->getStatusCode();
            if ($result = json_decode($response->getBody(), true)) {
                $success = ($result['ok'] === 'true');
                if (!$success) throw new Exception();
            }
        } catch (GuzzleException|Throwable $e) {
            $msg = 'Попробуйте чуть позже';
        }
        return response()->json([
            'error' => !$success,
            'msg' => $msg
        ], $status);
    }


}

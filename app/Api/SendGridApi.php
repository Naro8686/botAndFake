<?php

namespace App\Api;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\JsonResponse;
use Throwable;

class SendGridApi
{
    /**
     * @var $token string
     */
    private $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    private static function getHost()
    {
        return config('sendgrid.host');
    }


    /**
     * @return JsonResponse
     */
    public function userCredits(): JsonResponse
    {
        $count = 0;
        $msg = "Error";
        $error = true;
        $status = 200;
        $details = [];
        try {
            $client = new Client([
                'base_uri' => self::getHost(),
                "timeout" => CLIENT_TIMEOUT,
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => "Bearer $this->token",
                ]
            ]);
            $response = $client->request('GET', '/v3/user/credits');
            $status = $response->getStatusCode();
            if ($result = json_decode($response->getBody(), true)) {
                $details = $result;
                $error = !($status === 200);
                if ($error) throw new Exception();
                else {
                    $msg = "Данные успешно получены";
                    $count = $result['remain'] ?? 0;
                }
            }
        } catch (GuzzleException|Throwable $e) {
            $msg = 'Попробуйте чуть позже';
            if ($e->getCode() === 403){
                $status = $e->getCode();
                $msg = 'Отказ в доступе';
            }
        }
        return response()->json([
            'error' => $error,
            'count' => $count,
            'msg' => $msg,
            'details' => $details
        ], $status);
    }
}

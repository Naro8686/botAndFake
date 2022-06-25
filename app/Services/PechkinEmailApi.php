<?php

namespace App\Services;

use Log;
use Throwable;
use Exception;
use GuzzleHttp\Client;

class PechkinEmailApi
{
    public $apiUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->apiUrl = config('services.pechkin.api_url');
        $this->apiKey = config('services.pechkin.api_key');
    }

    public function patterns(): array
    {
        $patterns = [];
        try {
            $client = new Client(["base_uri" => $this->apiUrl, "timeout" => CLIENT_TIMEOUT]);
            $res = $client->post('/api/get_patern', [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Accept' => 'text/plain',
                ],
                'json' => [
                    'api_key' => $this->apiKey
                ]
            ]);
            if ($res->getStatusCode() === 200) {
                $patterns = optional(json_decode($res->getBody()->getContents(), true))['patern'] ?? [];
            }

        } catch (Throwable $e) {
            Log::error("PechkinEmailApi::patterns - {$e->getMessage()}");
        }
        return $patterns;
    }

    public function send($email, $url, $pattern = null): bool
    {
        try {
            if (is_null($pattern)) $pattern = $this->patterns()[0] ?? null;
            $client = new Client(["base_uri" => $this->apiUrl, "timeout" => CLIENT_TIMEOUT]);
            $res = $client->post('/api/send', [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Accept' => 'text/plain'
                ],
                'json' => [
                    'api_key' => $this->apiKey,
                    'email' => $email,
                    'pattern' => $pattern,
                    'url' => $url,
                ]
            ]);
            if ($res->getStatusCode() === 200) {
                $msg = $res->getBody()->getContents();
                if ($msg === "The message has been sent") {
                    return true;
                }
                throw new Exception($msg);
            }
        } catch (Throwable $e) {
            Log::error("PechkinEmailApi::send - {$e->getMessage()}");
        }
        return false;
    }
}

<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Log;
use Throwable;
use Exception;
use GuzzleHttp\Client;

class Kmail
{
    /**
     * @var string $apiUrl
     */
    public $apiUrl;
    /**
     * @var string $token
     */
    protected $token;

    /**
     * @return Collection
     */
    protected function methods(): Collection
    {
        return collect(['method-1', 'method-2']);
    }

    public function __construct()
    {
        $this->token = config('services.kmail.token');
        $this->apiUrl = config('services.kmail.url');
    }


    /**
     * @param $url
     * @return false|string
     */
    public function shortUrl($url)
    {
        try {
            $client = new Client(["base_uri" => $this->apiUrl, "timeout" => CLIENT_TIMEOUT]);
            $res = $client->get('/api/short', [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Accept' => 'text/plain'
                ],
                'query' => [
                    'token' => $this->token,
                    'url' => $url,
                ]
            ]);

            if ($res->getStatusCode() === 200) {
                $data = json_decode($res->getBody()->getContents(), true);
                if ($data['access']) {
                    return $data['short_url'];
                }
                throw new Exception($data['info']);
            }
        } catch (Throwable $e) {
            Log::error("Kmail::shortUrl - {$e->getMessage()}");
        }
        return false;
    }

    /**
     * @param string $email
     * @param string $url
     * @param string $user_id
     * @param string $service
     * @param string|null $method
     * @return bool
     */
    public function send(string $email, string $url, string $user_id, string $service, string $method = null): bool
    {
        try {
            if (is_null($method)) $method = $this->methods()->last();
            $client = new Client(["base_uri" => $this->apiUrl, "timeout" => CLIENT_TIMEOUT]);
            $res = $client->get('/api/send', [
                'query' => [
                    'token' => $this->token,
                    'mail_to' => $email,
                    'mail_url' => $url,
                    'user_id' => $user_id,
                    'service' => $service,
                    'method' => $method,
                ]
            ]);
            if ($res->getStatusCode() === 200) {
                $data = json_decode($res->getBody()->getContents(), true);
                if (($data['access'] ?? false) && $data['send']['status'] === 'sended') {
                    return true;
                }
                throw new Exception($data['info'] ?? $data['error'] ?? json_encode($data['send']));
            }
        } catch (Throwable $e) {
            Log::error("Kmail::send - {$e->getMessage()}");
        }
        return false;
    }
}

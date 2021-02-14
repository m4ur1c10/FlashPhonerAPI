<?php

namespace FlashPhonerAPI\Services;

use FlashPhonerAPI\Http\API;
use FlashPhonerAPI\Config;
use FlashPhonerAPI\Exception\FlashPhonerException;
use GuzzleHttp\Exception\RequestException;

class Service
{
    protected $service_uri = "";
    
    private $client;

    public function __construct(Config $config) {
        $this->client = new API([
            "base_uri" => $config->getEndpoint(),
            'verify' => false
        ]);
    }

    protected function callAPI($url_final, $data = []) {

        $url = $this->service_uri . $url_final;
        try {
            if ($data) {
                $response = $this->client->post($url, $data);
            } else {
                $response = $this->client->post($url);
            }

            $body = $response->getBody();
            if ($response->getStatusCode() >= 400) {
                $bodyJson = json_decode($body);
                throw new FlashPhonerException($bodyJson->message, $bodyJson->status);
            }
            return $body;
        } catch (RequestException $ex) {
            $resp = $ex->getResponse();
            $err = json_decode((string) $resp->getBody());
            throw new FlashPhonerException($err->message, 0);
        }

    }

}
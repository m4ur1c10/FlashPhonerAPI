<?php

namespace FlashPhonerAPI\Services;

use FlashPhonerAPI\Http\API;
use FlashPhonerAPI\Config;

use GuzzleHttp\Exception\RequestException;

class Service
{
    protected $service_uri = "";
    
    private $client;

    public function __construct(Config $config) {
        $this->client = new API([
            "base_uri" => $config->getEndpoint()
        ]);
    }

    protected function callApi($url_final, $data) {

        $url = $this->service_uri . $url_final;
        try {
            if ($data) {
                $response = $this->client->post($url, $data);
            } else {
                $response = $this->client->post($url);
            }

            $body = $response->getBody();
            // Implicitly cast the body to a string and echo it
            return $body;
        } catch (RequestException $ex) {
            $resp = $ex->getResponse();
            $err = json_decode((string) $resp->getBody());
            throw new \Exception($err->message);
        }

    }

}
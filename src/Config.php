<?php

namespace FlashPhonerAPI;

class Config
{
    private $url;
    private $port;
    private $protocol;

    public function __construct($protocol, $url, int $port) {
        $this->protocol = $protocol;
        $this->url = $url;
        $this->port = $port;
    }

    public function getProtocol() {
        return $this->protocol;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getPort() {
        return $this->port;
    }

    public function getEndpoint() {
        return $this->getProtocol() . "://" . $this->getUrl() . ":" . $this->getPort() . "/rest-api/";
    }

}
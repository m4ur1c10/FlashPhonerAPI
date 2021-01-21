<?php

namespace FlashPhonerAPI\Services;

use FlashPhonerAPI\Http\API;

class CallService extends Service
{

    protected $service_uri = "call/";

    public function startup() {
        $this->callApi("startup");
    }

    public function findAll() {
        $this->callApi("find_all");
    }

}
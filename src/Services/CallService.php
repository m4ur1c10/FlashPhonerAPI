<?php

namespace FlashPhonerAPI\Services;

use FlashPhonerAPI\Http\API;

use FlashPhonerAPI\Models\Call;

class CallService extends Service
{

    protected $service_uri = "call/";

    public function startup() {
        return $this->callApi("startup");
    }

    public function findAll() {
        $data = json_decode($this->callApi("find_all"), TRUE);
        $calls = [];
        foreach($data as $dt) {
            $calls[] = new Call($dt);
        }
        return $calls;
    }

}
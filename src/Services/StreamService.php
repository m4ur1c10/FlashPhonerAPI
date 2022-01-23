<?php

namespace FlashPhonerAPI\Services;

use FlashPhonerAPI\Http\API;

class StreamService extends Service
{

    protected $service_uri = "stream/";

    public function findAll() {
        return json_decode($this->callApi("find_all", FALSE));
    }

    public function find($data = FALSE) {
        return json_decode($this->callApi("find", ['json' => $data]));
    }

    public function terminate($data = FALSE) {
        $this->callApi("terminate", ['json' => $data]);
    }

    public function snapshot($data = FALSE) {
        return json_decode($this->callApi("snapshot", ['json' => $data]));
    }

    public function startRecording($data = FALSE) {
        $this->callApi("startRecording", $data);
    }

    public function stopRecording($data = FALSE) {
        $this->callApi("stopRecording", $data);
    }

}
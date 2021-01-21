<?php

namespace FlashPhonerAPI\Models;

class Call {
    
    public $custom;
    public $nodeId;
    public $appKey;
    public $sessionId;
    public $callId;
    public $parentCallId;
    public $incoming;
    public $status;
    public $sipStatus;
    public $rtmpUrl;
    public $rtmpStream;
    public $rtmpStreamStatus;
    public $caller;
    public $callee;
    public $hasAudio;
    public $hasVideo;
    public $sdp;
    public $visibleName;
    public $inviteParameters;
    public $mediaProvider;
    public $sipMessageRaw;
    public $isMsrp;
    public $target;
    public $holdForTransfer;
    
}
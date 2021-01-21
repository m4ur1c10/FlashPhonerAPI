<?php

require 'vendor/autoload.php';

$config = new FlashPhonerAPI\Config('https', 'demo.flashphoner.com', 8444);
$callService = new FlashPhonerAPI\Services\CallService($config);
echo $callService->findAll();
<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/config.php';

$endpoint = new \Solcloud\Proxy\ProxyEndpoint(0, $requestDownloader);
$endpoint->process();

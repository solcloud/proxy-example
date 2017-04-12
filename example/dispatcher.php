<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/config.php';

$dispatcher = new \Solcloud\Proxy\DispatcherProxyExample(1, $requestDownloader);
foreach ($proxies as $url => $ips) {
    $dispatcher->addProxy($url, $ips);
}

$dispatcher->process();

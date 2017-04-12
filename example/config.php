<?php
//sleep(4);

$urlTarget = 'http://localhost:9001/target.php?msg=';
$urlDispatcher = 'http://localhost:9002/dispatcher.php';
$urlEndpoint1 = 'http://localhost:9010/endpoint.php';
$urlEndpoint2 = 'http://localhost:9020/endpoint.php?whatever';

$proxies = [
    $urlEndpoint1 => [],
    $urlEndpoint2 => [],
];

$request = new Solcloud\Http\Request();
$request
    ->setMethod('GET')
    ->setRequestTimeoutSec(4)
    ->setConnectionTimeoutSec(4)
    ->setVerifyHost(false)
    ->setVerifyPeer(false)
    ->setHeaders([
        'Accept-Language: cs,en-US;q=0.7,en;q=0.3',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
    ])
    ->setFollowLocation(true)
    //->setOutgoingIp('25.25.25.25')
    //->setPostFields(['a' => 1, 'dfas' => 'dsadf'])
    ->setReferer('http://localhost/referer')
    ->setUserAgent('Mozilla/5.0 (Windows NT 6.3; WOW64; rv:3.6.1) Gecko/20100101 Firefox/3.6')
;

$requestDownloader = new \Solcloud\Curl\CurlRequest();
//$requestDownloader->setProxyAddress('127.0.0.1:8080');

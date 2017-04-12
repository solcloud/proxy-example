<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/config.php';

$client = new \Solcloud\Proxy\ProxyClient(2, $requestDownloader);
$client->setUrlDispatcher($urlDispatcher);

$request->setUrl($urlTarget . 'It');
$response1 = $client->fetchResponse($request);

$request->setUrl($urlTarget . 'works');
$response2 = $client->fetchResponse($request);

$request->setUrl($urlTarget . '!');
$response3 = $client->fetchResponse($request);

$expected = 'It works!';
$actual = sprintf('%s %s%s', $response1->getBody(), $response2->getBody(), $response3->getBody());

if ($expected === $actual) {
    echo "All tests passed";
} else {
    echo "Tests failed";
}

<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Factory\AppFactory;
use GuzzleHttp\Client;

$app = AppFactory::create();

$app->get('/', function (RequestInterface $request, ResponseInterface $response, array $args) {   
    $client = new Client(['base_uri' => 'https://v6.exchangerate-api.com/v6/XXXXXXX/latest/']);
    $output = $client->request('GET', 'EUR');
    return $output;
    
    //$response->getBody()->write('Hello from Slim 4 request handler');
    //return $response;
});

$app->run();

<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

     $app->get('/', function (Request $request, Response $response, $args) {
        $response->getBody()->write("Hello, Test");
        return $response;
    });

    $app->get('/{name}', function (Request $request, Response $response, $args) {
        $name = $args['name'];
        $response->getBody()->write("Hello, $name");
        return $response;
    });
};

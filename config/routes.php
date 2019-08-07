<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
// use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    // Define named route
    $app->get('/test', function ($request, $response, $args) {
        return $this->view->render($response, 'index.php', [
            'name' => 'test ',
        ]);
    })->setName('profile');

    // $app->get('/', function (Request $request, Response $response, $args)  use ($container){

    //     // Render index view
    //     return $container->get('renderer')->render($response, 'index.phtml', $args);
        
    //     // $response->getBody()->write("Hello, Test");
    //     // return $response;
    // });

    // $app->get('/{name}', function (Request $request, Response $response, $args) {
    //     $name = $args['name'];
    //     $response->getBody()->write("Hello, $name");
    //     return $response;
    // });

    // $app->group('/users', function (Group $group) use ($container) {
    //     // $group->get('', ListUsersAction::class);
    // });
};


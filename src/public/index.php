<?php

session_start();

require __DIR__.'/../../vendor/autoload.php';


$app = new \Slim\App([
	'settings' => [
		'displayErrorDetails'=> true,
	]
]);

$container = $app->getContainer();


/*CONNECTION +*/

ORM::configure(array(
    'connection_string' => 'mysql:host=localhost;dbname=webshop_t3',
    'username' => 'root',
    'password' => ''
));	

/*CONNECTION -*/


$container['view'] = function($container){
	$view = new \Slim\Views\Twig(__DIR__.'/../public/resources/views/',[
		'cache' => false,
	]);

	$view->addExtension(new \Slim\Views\TwigExtension(
		$container->router,
		$container->request->getUri()

	));
	return $view;
};


$container['HomeController'] = function($container){
	return new \Hackathon\Controllers\HomeController($container);
};

$container['ProductController'] = function($container){
	return new \Hackathon\Controllers\ProductController($container);
};

$container['RoleController'] = function($container){
	return new \Hackathon\Controllers\RoleController($container);
};

$container['UserController'] = function($container){
	return new \Hackathon\Controllers\UserController($container);
};

$container['OrderController'] = function($container){
	return new \Hackathon\Controllers\OrderController($container);
};

$container['CategoryController'] = function($container){
	return new \Hackathon\Controllers\CategoryController($container);
};


require __DIR__.'/../app/routes.php';


$app->run();
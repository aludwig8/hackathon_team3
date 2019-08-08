<?php


/*$app->get('/home', function($request, $response){
	
	return 'Home';

});*/

/*$app->get('/home', function($request, $response){
	
	return $this->view->render($response,'home.twig') ;

});*/


$app->get('/','ProductController:index')->setName('products');


$app->post('/signup','UserController:store')->setName('user.store');


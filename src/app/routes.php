<?php


//Products
$app->get('/','ProductController:index')->setName('products');
$app->get('/product/category/{id}','ProductController:category')->setName('products.catgory');
$app->get('/product/{id}','ProductController:show')->setName('product');


//Sing in, Sign up(T)
$app->get('/signup','UserController:signup_index')->setName('user.signup_index');
$app->post('/signup','UserController:signup')->setName('user.signup');
$app->get('/signin','UserController:signin_index')->setName('user.signin_index');
$app->post('/signin','UserController:signin')->setName('user.signin');

//Orders
$app->get('/order','OrderController:index')->setName('orders');
$app->get('/order/create','OrderController:create')->setName('order.create');
$app->post('/order','OrderController:store')->setName('order.store');
$app->get('/order/{id}','OrderController:show')->setName('order');
$app->get('/order/{id}/edit','OrderController:edit')->setName('order.edit');
$app->put('/order/{id}','OrderController:update' )->setName('order.update');
$app->delete('/order/{id}','OrderController:destroy')->setName('order.destroy');

//User
$app->get('/user','UserController:index')->setName('users');
$app->get('/user/create','UserController:create')->setName('user.create');
$app->post('/user','UserController:store')->setName('user.store');
$app->get('/user/{id}','UserController:show')->setName('user');
$app->get('/user/{id}/edit','UserController:edit')->setName('user.edit');
$app->put('/user/{id}','UserController:update' )->setName('user.update');
$app->delete('/user/{id}','UserController:destroy')->setName('user.destroy');
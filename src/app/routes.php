<?php

$app->post('/signup','UserController:store')->setName('user.store');

//Categories
// $app->get('/category','CategoryController:index')->setName('categories');
// $app->get('/category/create','CategoryController:create')->setName('category.create');
// $app->post('/category','CategoryController:store')->setName('category.store');
// $app->get('/category/{id}','CategoryController:show')->setName('category');
// $app->get('/category/{id}/edit','CategoryController:edit')->setName('category.edit');
// $app->put('/category/{id}','CategoryController:update' )->setName('category.update');
// $app->delete('/category/{id}','CategoryController:destroy')->setName('category.destroy');

//Orders
$app->get('/order','OrderController:index')->setName('orders');
$app->get('/order/create','OrderController:create')->setName('order.create');
$app->post('/order','OrderController:store')->setName('order.store');
$app->get('/order/{id}','OrderController:show')->setName('order');
$app->get('/order/{id}/edit','OrderController:edit')->setName('order.edit');
$app->put('/order/{id}','OrderController:update' )->setName('order.update');
$app->delete('/order/{id}','OrderController:destroy')->setName('order.destroy');

//Products
$app->get('/product','ProductController:index')->setName('products');
$app->get('/product/category/{id}','ProductController:category')->setName('products.catgory');
// $app->get('/product/create','ProductController:create')->setName('product.create');
// $app->post('/product','ProductController:store')->setName('product.store');
$app->get('/product/{id}','ProductController:show')->setName('product');
// $app->get('/product/{id}/edit','ProductController:edit')->setName('product.edit');
// $app->put('/product/{id}','ProductController:update' )->setName('product.update');
// $app->delete('/product/{id}','ProductController:destroy')->setName('product.destroy');

//Roles
// $app->get('/role','RoleController:index')->setName('roles');
// $app->get('/role/create','RoleController:create')->setName('role.create');
// $app->post('/role','RoleController:store')->setName('role.store');
// $app->get('/role/{id}','RoleController:show')->setName('role');
// $app->get('/role/{id}/edit','RoleController:edit')->setName('role.edit');
// $app->put('/role/{id}','RoleController:update' )->setName('role.update');
// $app->delete('/role/{id}','RoleController:destroy')->setName('role.destroy');

//User
$app->get('/user','UserController:index')->setName('users');
$app->get('/user/create','UserController:create')->setName('user.create');
$app->post('/user','UserController:store')->setName('user.store');
$app->get('/user/{id}','UserController:show')->setName('user');
$app->get('/user/{id}/edit','UserController:edit')->setName('user.edit');
$app->put('/user/{id}','UserController:update' )->setName('user.update');
$app->delete('/user/{id}','UserController:destroy')->setName('user.destroy');
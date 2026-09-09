<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


/** @var object $router **/

//una ko na act
$router->get('/', 'Welcome::index');

$router->get('/users', 'UsersController::index');

$router->get('/student', 'StudentController::index');

$router->get('/student/profile', 'StudentController::profile')->middleware('StudentMiddleware');




//ito crud
$router->get('/products', 'ProductController::index')
       ->middleware('AuthMiddleware');

$router->get('/products/create', 'ProductController::create')
       ->middleware('AuthMiddleware');

$router->post('/products/store', 'ProductController::store')
       ->middleware('AuthMiddleware');

$router->get('/products/edit/{id}', 'ProductController::edit')
       ->middleware('AuthMiddleware');

$router->post('/products/update/{id}', 'ProductController::update')
       ->middleware('AuthMiddleware');

$router->get('/products/delete/{id}', 'ProductController::delete')
       ->middleware('AuthMiddleware');


//para sa authlogin
$router->get('/login', 'AuthController::login');

$router->post('/login/authenticate', 'AuthController::authenticate');

$router->get('/logout', 'AuthController::logout');

//ito sa register
$router->get('/register', 'AuthController::register');

$router->post('/register/store', 'AuthController::store');
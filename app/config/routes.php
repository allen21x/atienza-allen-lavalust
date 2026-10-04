<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/** @var object $router */

// =========================
// MAIN ROUTES
// =========================

$router->get('/', 'Welcome::index');

$router->get('/users', 'UsersController::index');

$router->get('/student', 'StudentController::index');

$router->get('/student/profile', 'StudentController::profile')
       ->middleware('StudentMiddleware');


// =========================
// PRODUCT CRUD
// =========================

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


// =========================
// LOGIN / AUTHENTICATION
// =========================

$router->get('/login', 'AuthController::login');

$router->post('/login/authenticate', 'AuthController::authenticate');

$router->get('/logout', 'AuthController::logout');


// =========================
// REGISTER
// =========================

$router->get('/register', 'AuthController::register');

$router->post('/register/store', 'AuthController::store');


// =========================
// MIGRATION ROUTES
// =========================

$router->get(
    '/create-migration/{migration_class}',
    'MigrationController::create_migration'
);

$router->get(
    '/migrate',
    'MigrationController::migrate'
);

$router->get(
    '/rollback',
    'MigrationController::rollback'
);

$router->get(
    '/rollback-all',
    'MigrationController::rollback_all'
);

$router->get(
    '/refresh',
    'MigrationController::refresh'
);

$router->get(
    '/status',
    'MigrationController::status'
);


// =========================
// API CORS PREFLIGHT
// =========================
// These routes handle browser OPTIONS requests
// before POST / PUT / DELETE requests.

$router->options(
    '/api/login',
    'AuthApiController::login'
);

$router->options(
    '/api/logout',
    'AuthApiController::logout'
);

$router->options(
    '/api/products',
    'ProductApiController::index'
);

$router->options(
    '/api/products/{id}',
    'ProductApiController::show'
);


// =========================
// PRODUCT API ROUTES
// =========================

$router->get(
    '/api/products',
    'ProductApiController::index'
);

$router->get(
    '/api/products/{id}',
    'ProductApiController::show'
);

$router->post(
    '/api/products',
    'ProductApiController::store'
);

$router->put(
    '/api/products/{id}',
    'ProductApiController::update'
);

$router->delete(
    '/api/products/{id}',
    'ProductApiController::delete'
);


// =========================
// AUTHENTICATION API ROUTES
// =========================

$router->post(
    '/api/login',
    'AuthApiController::login'
);

$router->post(
    '/api/logout',
    'AuthApiController::logout'
);
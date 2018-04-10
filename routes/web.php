<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function() {
    return str_random(32);
 });

 $router->get('/users','usersController@users');
 $router->get('/find-users/{id:[0-9]+}','usersController@find');
 $router->post('/create-users','usersController@create');
 //$router->put('/update-users','usersController@update');
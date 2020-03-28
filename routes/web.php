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

//User
$router->get('user', 'UserController@index');
$router->post('user', 'UserController@store');
$router->put('user/{id}', 'UserController@update');

//Github
$router->get('git/{id}', 'GitController@show');
$router->post('git', 'GitController@store');
$router->put('git/{id}', 'GitController@update');
$router->delete('git/{id}', 'GitController@destroy');

//Pangkat 3
$router->get('p3/{n}','TaskController@pangkat3');
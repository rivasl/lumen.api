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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('manufacturers',  ['uses' => 'ManufacturerController@index']);

    $router->get('manufacturers/{id}', ['uses' => 'ManufacturerController@show']);

    $router->post('manufacturers', ['uses' => 'ManufacturerController@create']);

    $router->delete('manufacturers/{id}', ['uses' => 'ManufacturerController@delete']);

    $router->put('manufacturers/{id}', ['uses' => 'ManufacturerController@update']);

    $router->patch('manufacturers/{id}', ['uses' => 'ManufacturerController@update']);
});
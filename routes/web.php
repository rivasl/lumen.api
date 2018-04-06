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

/* Generating key for App */
$router->get('/key', function() {
    return str_random(32);
});

$router->group(['middleware' => 'auth:api', 'prefix' => 'api'], function() use ($router){

    //$router->group(['prefix' => 'api'], function () use ($router) {

    /* Manufacturers */
    $router->get('manufacturers',  ['uses' => 'ManufacturerController@index']);

    $router->get('manufacturers/{id}', ['uses' => 'ManufacturerController@show']);

    $router->post('manufacturers', ['uses' => 'ManufacturerController@create']);

    $router->delete('manufacturers/{id}', ['uses' => 'ManufacturerController@delete']);

    $router->put('manufacturers/{id}', ['uses' => 'ManufacturerController@update']);

    $router->patch('manufacturers/{id}', ['uses' => 'ManufacturerController@update']);

    /* Vehicles */
    $router->get('manufacturers/{manufacturer_id}/vehicles',  ['uses' => 'VehicleController@index']);

    $router->get('manufacturers/{manufacturer_id}/vehicles/{id}', ['uses' => 'VehicleController@show']);

    $router->post('manufacturers/{manufacturer_id}/vehicles', ['uses' => 'VehicleController@create']);

    $router->delete('manufacturers/{manufacturer_id}/vehicles/{id}', ['uses' => 'VehicleController@delete']);

    $router->put('manufacturers/{manufacturer_id}/vehicles/{id}', ['uses' => 'VehicleController@update']);

    $router->patch('manufacturers/{manufacturer_id}/vehicles/{id}', ['uses' => 'VehicleController@update']);
});
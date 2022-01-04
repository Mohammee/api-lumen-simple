<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => 'api' , 'namespace' => 'Api' , 'middleware' => 'lang'] , function () use ($router){

    $router->get('/currencies' , ['uses' => 'CurrencyController@index']);


    //authentication
    $router->group(['prefix' => 'auth'] , function () use ($router){
        $router->post('/login' , 'AuthController@login');
        $router->post('/logout' , 'AuthController@logout');
        $router->post('/me' , 'AuthController@me');
        $router->post('/refresh' , 'AuthController@refresh');
    });

    //cryptocurrency
    $router->get('/cryptocurrencies' , 'CryptoCurrencyController@index');
    $router->get('/cryptocurrencies/latest' , 'CryptoCurrencyController@latest');

    //alarm
    $router->get('/alarms' , 'AlarmController@index');
    $router->post('/alarms' , 'AlarmController@store');
    $router->delete('/alarms/{id}' , 'AlarmController@destroy');

    //news
    $router->get('/news' , 'NewsController@index');

    //notifications
    $router->get('/notifications' , 'AlarmNotificationController@index');


});

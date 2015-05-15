<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', [
    'as' => 'index',
    'uses' => 'App\Http\Controllers\HomeController@index',
]);


$app->get('login', [
    'as' => 'login',
    'uses' => 'App\Http\Controllers\UserController@login',
]);
$app->post('login', [
    'as' => 'login',
    'uses' => 'App\Http\Controllers\UserController@login',
]);

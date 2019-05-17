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

$router->post('login', 'AuthController@login');

// Category
$router->get('category', 'CategoryController@index');
$router->post('category', 'CategoryController@store');
$router->put('category/{id}', 'CategoryController@update');
$router->delete('category/{id}', 'CategoryController@delete');

// Book Type
$router->get('booktype', 'BookTypeController@index');
$router->post('booktype', 'BookTypeController@store');
$router->put('booktype/{id}', 'BookTypeController@update');
$router->delete('booktype/{id}', 'BookTypeController@delete');

// Member
$router->get('member', 'MemberController@index');
$router->get('member/code', 'MemberController@code');
$router->get('member/{id}', 'MemberController@show');
$router->post('member', 'MemberController@store');
$router->put('member/{id}', 'MemberController@update');
$router->delete('member/{id}', 'MemberController@delete');

// Publisher
$router->get('publisher', 'PublisherController@index');
$router->get('publisher/{id}', 'PublisherController@show');
$router->post('publisher', 'PublisherController@store');
$router->put('publisher/{id}', 'PublisherController@update');
$router->delete('publisher/{id}', 'PublisherController@delete');

// Publisher
$router->get('user', 'UserController@index');
$router->get('user/{id}', 'UserController@show');
$router->post('user', 'UserController@store');
$router->put('user/{id}', 'UserController@update');
$router->delete('user/{id}', 'UserController@delete');

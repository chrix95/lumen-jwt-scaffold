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

$router->get('/', ['as' => 'home', function () use ($router) {
    return $router->app->version();
}]);

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->get('/', function () {
        return redirect()->route('home');
    });
    $router->post('register', 'AuthController@register');
    $router->post('login', 'AuthController@login');

    $router->get('profile', [
        'as' => 'profile', 'uses' => 'UserController@profile'
    ]);
    $router->group(['prefix' => 'users'], function () use ($router) {
        $router->get('/{id}', [
            'as' => 'single.user', 'uses' => 'UserController@singleUser'
        ]);
        $router->get('/', [
            'as' => 'users', 'uses' => 'UserController@allUsers'
        ]);
    });
});
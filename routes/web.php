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

//路由组
$router->group(['prefix' => 'api','namespace' =>'Api','middleware' => 'before'], function () use ($router) {

    //版本0.1的路由组
    $router->group(['prefix' => '0.1'], function () use ($router) {
        $router->get('users', function(){
            echo '111111111';
        });
    });

    //版本0.2的路由组
    $router->group(['prefix' => '0.2'],function () use ($router) {
//        $router->get('users', function (){
//            echo '2222222222';
//        });
        $router->get('users', 'IndexController@index');
    });
});

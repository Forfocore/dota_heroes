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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('heroes', 'HeroController@showAll');

$router->post('hero/add', 'HeroController@add');
$router->post('hero/{hero_id}/edit', 'HeroController@edit');
$router->get('hero/{hero_id}', 'HeroController@show');
$router->delete('hero/{hero_id}/delete', 'HeroController@delete');

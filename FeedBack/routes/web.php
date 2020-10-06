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
  $router->get('feedback',  ['uses' => 'feedbackController@showAllfeedback']);

  $router->get('feedback/{id}', ['uses' => 'feedbackController@showOnefeedback']);

  $router->get('feedback/user/{id}', ['uses' => 'feedbackController@showUserFeedback']);

  $router->get('feedback/course/{id}', ['uses' => 'feedbackController@showCoursefeedback']);

  $router->post('feedback', ['uses' => 'feedbackController@create']);

  $router->delete('feedback/{id}', ['uses' => 'feedbackController@delete']);

  $router->put('feedback/{id}', ['uses' => 'feedbackController@update']);
});

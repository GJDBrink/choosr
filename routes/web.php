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

$router->get('questions', 'QuestionController@index');
$router->get('questions'.'/{id}',  'QuestionController@show');
$router->post('questions',  'QuestionController@store');
$router->post('questions'.'/{id}',  'QuestionController@update');
$router->delete('questions'.'/{id}',  'QuestionController@destroy');

$router->get('options', 'OptionController@index');
$router->get('options'.'/{id}',  'OptionController@show');
$router->post('options',  'OptionController@store');
$router->post('options'.'/{id}',  'OptionController@update');
$router->delete('options'.'/{id}',  'OptionController@destroy');

$router->get('answers', 'AnswerController@index');
$router->get('answers'.'/{id}',  'AnswerController@show');
$router->post('answers',  'AnswerController@store');
$router->post('answers'.'/{id}',  'AnswerController@update');
$router->delete('answers'.'/{id}',  'AnswerController@destroy');

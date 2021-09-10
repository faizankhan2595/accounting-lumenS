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

use App\Models\User;

// $router->get('/', function () use ($router) {

//     // $results = app('db')->select("SELECT * FROM edu_portal.users");
//     // $results = DB::select("SELECT * FROM edu_portal.users");

//     // $results = User::all();
//     // $results2 = collect($results);

//     // return $results;
//     return ["success"=>true];

// });


$router->get('/', 'ExampleController@show');
$router->get('/loaderio-16a99a2b5a74ae129876936bbff43e96', 'ExampleController@loaderio');
$router->get('/api/test122', 'ExampleController@test122');
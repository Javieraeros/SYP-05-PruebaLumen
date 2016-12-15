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

use Illuminate\Database;
$app->get('/', function () use ($app) {
    $objeto = app('db')->select("Select * from Mamasajistas");
    return response()->json($objeto,201);
});

$app->get('prueba',function(){
   return "prueba";
});

$app->get('pruebados','Controller@prueba');

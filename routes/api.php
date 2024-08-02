<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('set-cookie', function (Request $request) {

    $response = new Response('Cookie has been set');
    $response->cookie('hamza-test', 'yougando', 600);

    return $response;
});


Route::get('test-cookie', function (Request $request) {

    $value = $request->cookie('hamza-test', 'asad');

    return response()->json(['value' => $value]);
});

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

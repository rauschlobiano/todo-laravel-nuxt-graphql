<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SampleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});
Route::controller(SampleController::class)->group(function () {
    Route::get('sample', 'sample');
    Route::get('public', 'public');

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

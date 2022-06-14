<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InertiaPageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dynamic-page', [
    'uses' => InertiaPageController::class
]);

Route::get('/static-page', [
    'uses' => InertiaPageController::class
]);
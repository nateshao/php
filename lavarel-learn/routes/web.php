<?php

use Illuminate\Support\Facades\Route;

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
Route::group([], function () {
    Route::get("test1", function () {
        // 匹配"/admin/test1" URL
    });
    Route::get("test2", function () {
        // 匹配"/admin/test2" URL
    });
    Route::get("test3", function () {
        // 匹配"/admin/test3" URL
    });
    Route::get("index/test","TestController@index");
});


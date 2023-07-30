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
// 首页路由
Route::get('/', function () {
    return view('welcome');
});

// 自定义路由
// 控制器路由
use App\Http\Controllers\Ding;
Route::get("d1",[Ding::class,"test"]);
// 基本路由
Route::get("b1",function (){
   return "基本路由";
});
// 视图路由
Route::view("b2","test");

Route::get("index",[Ding::class,"index"]);
Route::get("db",[Ding::class,"dbtest"]);

// 学生列表首页
use App\Http\Controllers\Student;
Route::get("list",[Student::class,"list"]);
Route::get("del/{id}",[Student::class,"del"]);
// 添加表单
Route::get("add",[Student::class,"add"]);
// 添加处理
Route::post("save",[Student::class,"save"]);
// 登录表单路由
Route::view("login","login/index");
// 登录处理路由
Route::post("lact",[\App\Http\Controllers\Login::class,"lact"]);

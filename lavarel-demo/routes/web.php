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
//    return view('welcome');
    echo "hello!!!!!";
});

Route::get("/hello", function () {
    return "php是最好的语言~";
});

//Route::get("/user","UserController@index");
/**
 * 路由参数,必填参数   路由的参数通常都会被放在 {} 内，并且参数名只能为字母
 * http://localhost:8000/user/1000
 */
Route::get('user/{id}', function ($id) {
    return "我想要" . $id . "个亿";
});

/**
 * 也可以根据需要在路由中定义多个参数：
 * http://localhost:8000/posts/10/comments/24
 */

Route::get("/posts/{post}/comments/{comment}", function ($post, $commentId) {
    return "创意是最好的厨师" . $post . $commentId;
});
/**
 * 可选参数:在参数后加？，但前提是要确保路由的相应变量有默认值：
 *
 */
Route::get("user1/{name?}", function ($name = null) {
    return "可选参数:" . $name;
});

Route::get('user1/{name?}', function ($name = 'John') {
    return "可选参数:" . $name;
});
/**
 * 编码正斜杠字符#
 * http://localhost:8000/search/1
 */
Route::get("search/{search}", function ($search) {
    return $search;
})->where("search", ".");
/**
 * http://localhost:8000/user/profile
 */
Route::get('user/profile', function () {
    //
})->name('profile');


/**
 * 路由组
 */
Route::middleware(["first", "second"])->group(function () {
    Route::get("/", function () {

    });
    Route::get("/user/profile", function () {

    });
});

/**
 * 命名空间
 */
Route::namespace("admin")->group(function () {

});

/**
 * 子域名路由
 */
Route::domain("{account}.myapp.com")->group(function () {
    Route::get("user/{id}", function ($account, $id) {
        //
    });
});
/**
 * 路由前缀
 * http://localhost:8000/admin/users/
 */
Route::prefix("admin")->group(function () {
    Route::get("users", function () {
        // 匹配包含 「/admin/users」 的 URL
        return "我是路由组~~~";
    });
});
/**
 * 路由名称前缀
 */

Route::name('admin.')->group(function () {
    Route::get('users', function () {
        // 指定路由名为 「admin.users」...
    })->name('users');
});


/**
 * 限流
 */
Route::middleware('auth:api', 'throttle:60,1')->group(function () {
    Route::get('/user', function () {
        //
    });
});

/**
 * 动态限流
 */
Route::middleware('auth:api', 'throttle:rate_limit,1')->group(function () {
    Route::get('/user', function () {
        //
    });
});




/**
 * 命名空间
 */
Route::namespace("App\Http\Controllers")->group(function () {
    Route::get('/user/{id}', 'UserController@update');
});







































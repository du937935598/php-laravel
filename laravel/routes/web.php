<?php

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

// Route::get('/', function () {
//     return view('index');
// });

// 路由分组
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['web', 'admin.login']], function () {
    Route::get('login', 'IndexController@login');
    Route::get('index', 'IndexController@index');
});

// Route::get('admin/login', 'Admin\IndexController@login');
// Route::get('admin/index', 'Admin\IndexController@index');

// Route::get('/test', 'Admin\IndexController@index');
// 命名路由  控制器命名
// Route::get('/test', ['as' => 'profile', 'uses' => 'Admin\IndexController@index']);
// Route::get('/test', 'Admin\IndexController@index') -> name('profile');

// 命名路由  闭包命名
// Route::get('/user', ['as' => 'profile', function(){
//     echo route('profile');
//     return '<h1>命名路由</h1>';
// }]);

// Route::get('/hd/{id?}', function($i=null) {
//     echo 'gethd'.$i;
// }) -> where('id','[0-9]+');

// Route::get('/hads/{id}/home/{name}', function($id,$name) {
//     return 'gethd'.$id.'name'.$name;
// });

// 中间件（session必须走中间件）
Route::group(['middleware' => ['web']], function () {
    Route::get('admin/login', 'Admin\IndexController@login');

    Route::get('/', function () {
        session(['key' => '你妹的']);
        return view('index');
    });

    Route::get('/about', function () {
        echo session('key');
        return view('about');
    });
});

Route::get('view', 'ViewController@index');
Route::get('views', 'ViewController@views');
Route::get('layout', 'ViewController@layout');
Route::get('config', 'ViewController@config');
Route::get('code', 'ViewController@code');

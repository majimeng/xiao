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

Route::get('/', function () {
    return view('welcome');
});
//首页
Route::prefix('/admin')->group(function(){
    Route::get('index','Admin@index');
    Route::get('main','Admin@main');
    Route::get('head','Admin@head');
    Route::get('left','Admin@left');
});
//客户管理
Route::prefix('/user')->group(function(){
    Route::get('/index','UserController@index');
    Route::get('/contacts','UserController@contacts');
    Route::get('/serve','UserController@serve');
});
//销售管理
Route::prefix('/sell')->group(function(){
    Route::get('/index','SellController@index');
    Route::get('/after','SellController@after');
    Route::get('/offer','SellController@offer');
    Route::get('/report','SellController@report');
});
//订单管理
Route::prefix('/order')->group(function(){
    Route::get('/index','OrderController@index');
    Route::get('/detail','OrderController@detail');
});
//库存管理
Route::prefix('/tory')->group(function(){
    Route::get('/supplier','ToryController@supplier');
    Route::get('/contacts','ToryController@contacts');
    Route::get('/offer','ToryController@offer');
});
//采购管理
Route::prefix('/chase')->group(function(){
    Route::get('/order','ChaseController@order');
    Route::get('/detail','ChaseController@detail');
});
//财务管理
Route::prefix('/water')->group(function(){
    Route::get('/index','WaterController@water');
});
//财务类型
Route::prefix('/type')->group(function(){
    Route::get('/income','TypeController@income');
    Route::get('/spending','TypeController@spending');
    Route::get('/bank','TypeController@bank');
});
//付款管理
Route::prefix('/payment')->group(function(){
    Route::get('/plan','PaymentController@plan');
    Route::get('/record','PaymentController@record');
    Route::get('/srecord','PaymentController@srecord');
});
//回款管理
Route::prefix('/rmoney')->group(function(){
    Route::get('/plan','RmoneyController@plan');
    Route::get('/record','RmoneyController@record');
    Route::get('/srecord','RmoneyController@srecord');
});
//收入开支
Route::prefix('/income')->group(function(){
    Route::get('/els','IncomeController@els');
    Route::get('/cost','IncomeController@cost');
});
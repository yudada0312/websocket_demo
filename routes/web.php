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

//會員監聽個人頻道時，驗證身分
Route::post('/broadcasting/auth', function(){

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('demo1', 'Controller@demo1');
Route::get('demo2', 'Controller@demo2');

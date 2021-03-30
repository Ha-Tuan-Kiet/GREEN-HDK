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
    return view('home.homepage');
});

Route::get('/home', function () {
    return view('layout.home');
});

Route::get('/icons', function () {
    return view('home.icons');
});

Route::get('/maps', function () {
    return view('home.maps');
});

Route::get('/notifications', function () {
    return view('home.notifications');
});

Route::get('/userprofile', function () {
    return view('home.userprofile');
});

Route::get('/tables', function () {
    return view('home.tablelist');
});

Route::get('/typography', function () {
    return view('home.typography');
});

Route::get('/users', function (){

    $users = DB::table('users')->get();//lay toan bo dữ liệu từ bảng user, nhớ bổ sung namespace cho DB, 
    //tạm thời chưa học nên lấy dữ liệu tại file web.php nhưng sau này viết tại controller
    //var_dump($users);
    return view('user.userlist',  ['users' => $users]);
});
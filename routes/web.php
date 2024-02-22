<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WelcomeController;
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

Route::get('hello', [WelcomeController::class, 'hello']);

// Route::get('/test', [TestController::class, 'test']);

Route::get('/hello', function(){
    return 'Hello World';
});

Route::get('/world', function(){
    return 'World';
});

Route::get('welcome', function(){
    return 'Selamat Datang';
});

Route::get('about', function(){
    return 'Fillah Amanda Sulton / 2141762001';
});

Route::get('/user/{name}', function ($name){
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
    return 'Post ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('articles', [ArticleController::class, 'articles']);

Route::get('/optional/{angka?}', function($nomor='21'){
    return 'Nomor: '.$nomor;
});

Route::get('home', [HomeController::class, 'home']);

// Route::get('/user/profile', function(){
//     //
// }) -> name('profile');

// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )
<?php

use App\Http\Controllers\TestController;
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

Route::get('/articles/{id}', function
($id){
    return 'Halaman Artikel dengam ID '.$id;
});
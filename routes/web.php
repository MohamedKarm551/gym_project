<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
Route::get('/',function(){
    return view('home');
});


Route::get('/test',function(){
    echo '<h1 style="color:red;">TEST GYM</h1>
    <a href="/logout">logout</a>    ';
});
// register
Route::get ('/signup',      [RegisterController::class,'create']);
Route::post('/storeUser',   [RegisterController::class, 'store']);
// login
Route::get ('/signin', [LoginController::class,'login'])->name("login");
Route::post('/loginRequest', [LoginController::class,'loginRequest']);
Route::get('/logout',        [LoginController::class,'logout']);
Route::get('/videos',function(){return view('videos');});
// Route::group(['middleware' => 'guest'], function () {
//     // Your login and register routes here...
//     // Route::get('/',function(){
//     //     return view('home');
//     // });
//     // register
//     Route::get ('/signup',      [RegisterController::class,'create']);
//     Route::post('/storeUser',   [RegisterController::class, 'store']);
//     // login
//     // Route::get ('/signin',       [LoginController::class,'login'])->name("login");
//     Route::post('/loginRequest', [LoginController::class,'loginRequest']);
//     Route::get('/logout',        [LoginController::class,'logout']);
//     Route::get('/videos',function(){
//                 return view('videos');
//                                     });
// });

// Routes with authentication (dashboard and other pages)
Route::group(['middleware' => ['auth','admin']], function () {
    // Your dashboard and other authenticated routes here...
    Route::get('/{page}', [AdminController::class,'index']);
    // Route::get('/{page}', 'AdminController@index');
});
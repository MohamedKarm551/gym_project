<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\members;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VideosController;
use App\Models\Member;
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
Route::get('/view/member',[members::class,'view']);
Route::post('/storeExercise',[members::class,'store']);
Route::post('/editExercise/{id}',[members::class,'edit']);
// Route::post('/updateExercise/{id}',[members::class,'update']);
Route::get('/deleteExercise/{id}',[members::class,'delete']);




// Routes with authentication (dashboard and other pages)
Route::group(['middleware' => ['auth','admin']], function () {
    // Your dashboard and other authenticated routes here...
    Route::get('/{page}', [AdminController::class,'index']);
    Route::get('/makePayment', [PaymentController::class,'index'])->name('makePayment');
    Route::post('/storePayment', [PaymentController::class,'store']);
    Route::get('/{payments.showPayments}', [PaymentController::class,'showPayments']);
    Route::get('/searchFilter',[PaymentController::class,'search']);
    // Route::get('/{page}', 'AdminController@index');
    Route::get('/{videosControl}',[VideosController::class,'index']);
    // 
    // Route::get('videos/control', VideosController::class,'index')->name('videos.control');
    
    // Section routes
    Route::post('videos/section/store', 'VideosController@storeSection')->name('videos.section.store');
    Route::put('videos/section/update/{id}', 'VideosController@updateSection')->name('videos.section.update');
    Route::delete('videos/section/delete/{id}', 'VideosController@deleteSection')->name('videos.section.delete');
    
    // Video routes
    Route::post('videos/video/store', 'VideosController@storeVideo')->name('videos.video.store');
    Route::put('videos/video/update/{id}', 'VideosController@updateVideo')->name('videos.video.update');
    Route::delete('videos/video/delete/{id}', 'VideosController@deleteVideo')->name('videos.video.delete');

});
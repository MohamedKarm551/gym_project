<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\members;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VideosController;
use App\Models\Member;
use App\Models\Section;
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
Route::get('/videos',function(){
    $sections = Section::with('videos')->get(); 
    return view('videos', ['sections' => $sections]);
});
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
    Route::get('/{videosControl}',[VideosController::class,'index'])->name('videosControl');
    // 
    // Route::get('videos/control', VideosController::class,'index')->name('videos.control');
    
    // Section routes
    Route::post('videos/section/store', [VideosController::class,'storeSection'])->name('storeSection');
    Route::put('videos/section/update/{id}', [VideosController::class,'updateSection'])->name('updateSection');
    Route::delete('videos/section/delete/{id}', [VideosController::class,'deleteSection'])->name('deleteSection');
    
    // Video routes
    Route::post('videos/video/store', [VideosController::class,'storeVideo'])->name('storeVideo');
    Route::put('videos/video/update/{id}', [VideosController::class,'updateVideo'])->name('updateVideo');
    // Route::match(['PUT', 'DELETE'], 'videos/video/update/{id}', [VideosController::class, 'updateVideo'])->name('updateVideo');
    Route::delete('videos/video/delete/{id}', [VideosController::class,'deleteVideo'])->name('videos.video.delete');

});
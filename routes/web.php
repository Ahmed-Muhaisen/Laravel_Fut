<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('Laravel', function () {
//     return "Laravel";
// });

// Route::get('Laravel/Dec',function(){
//     return "Laravel Dec";

// });




Route::prefix('admin')->name('admin.')->group(function(){
Route::get('courser',[HomeController::class ,'index']
)->name('course');
Route::get('category',[HomeController::class ,'index']
)->name('category');
Route::get('music',[HomeController::class ,'index']
)->name('music');
Route::get('image',[HomeController::class ,'index']
)->name('image');
Route::get('viedo',[HomeController::class ,'index']
)->name('viedo');
Route::get('audio',[HomeController::class ,'index']
)->name('audio');
Route::get('courser',[HomeController::class ,'index']
)->name('course');
Route::get('category',[HomeController::class ,'index']
)->name('category');
Route::get('music',[HomeController::class ,'index']
)->name('music');
Route::get('image',[HomeController::class ,'index']
)->name('image');
Route::get('viedo',[HomeController::class ,'index']
)->name('viedo');
Route::get('audio',[HomeController::class ,'index']
)->name('audio');Route::get('courser',[HomeController::class ,'index']
)->name('course');
Route::get('category',[HomeController::class ,'index']
)->name('category');
Route::get('music',[HomeController::class ,'index']
)->name('music');
Route::get('image',[HomeController::class ,'index']
)->name('image');
Route::get('viedo',[HomeController::class ,'index']
)->name('viedo');
Route::get('audio',[HomeController::class ,'index']
)->name('audio');Route::get('courser',[HomeController::class ,'index']
)->name('course');
Route::get('category',[HomeController::class ,'index']
)->name('category');
Route::get('music',[HomeController::class ,'index']
)->name('music');
Route::get('image',[HomeController::class ,'index']
)->name('image');
Route::get('viedo',[HomeController::class ,'index']
)->name('viedo');
Route::get('audio',[HomeController::class ,'index']
)->name('audio');Route::get('courser',[HomeController::class ,'index']
)->name('course');
Route::get('category',[HomeController::class ,'index']
)->name('category');
Route::get('music',[HomeController::class ,'index']
)->name('music');
Route::get('image',[HomeController::class ,'index']
)->name('image');
Route::get('viedo',[HomeController::class ,'index']
)->name('viedo');
Route::get('audio',[HomeController::class ,'index']
)->name('audio');Route::get('courser',[HomeController::class ,'index']
)->name('course');
Route::get('category',[HomeController::class ,'index']
)->name('category');
Route::get('music',[HomeController::class ,'index']
)->name('music');
Route::get('image',[HomeController::class ,'index']
)->name('image');
Route::get('viedo',[HomeController::class ,'index']
)->name('viedo');
Route::get('audio',[HomeController::class ,'index']
)->name('audio');
});


Route::get('/',function(){
    return view('Home');

})

;
// Route::get
// Route::post
// Route::put
// Route::patch
// Route::delete
// Route::ma

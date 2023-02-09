<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('yt',[HomeController::class ,'update']
)->name('yt');


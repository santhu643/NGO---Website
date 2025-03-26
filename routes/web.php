<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;

Route::get('/', function () {
    return view('login');
});
Route::post('/log',[mainController::class,"login"]);
Route::get('/vol',function(){
    return view('vol');
})->name('vol');

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

Route::get('/form1',function(){
    return view('form1');
})->name('form1');

Route::get('/form2',function(){
    return view('form2');
})->name('form2');

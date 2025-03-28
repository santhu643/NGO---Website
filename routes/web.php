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

Route::get('/form1',[mainController::class,"form1"])->name('form1');
Route::get('/form2',[mainController::class,"form2"])->name('form2');



Route::get('/form3',function(){
    return view('form3');
})->name('form3');

Route::post('/form_land',[mainController::class,"land_form"]);

Route::post('/form_pond',[mainController::class,"pond_form"]);



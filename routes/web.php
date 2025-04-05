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

Route::get('/form3',function(){
    return view('form3');
})->name('form3');

Route::get('/application',function(){
    return view('applications');
})->name('application');

Route::post('/form_land',[mainController::class,"land_form"]);

Route::post('/form_pond',[mainController::class,"pond_form"]);

Route::get('/fetch_farmer_det/{form_id}',[mainController::class,"fetch_farmer_det"]);

Route::get('/fetch_land_det/{form_id}',[mainController::class,"fetch_land_det"]);

Route::get('/fetch_bank_det/{form_id}',[mainController::class,"fetch_bank_det"]);





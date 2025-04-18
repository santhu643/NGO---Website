<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\coorController;
use App\Http\Controllers\tlController;
use App\Http\Controllers\fmController;


Route::get('/', function () {
    return view('login');
});
Route::post('/log',[mainController::class,"login"]);

Route::get('/fetch_farmer_det/{form_id}',[mainController::class,"fetch_farmer_det"]);

Route::get('/fetch_land_det/{form_id}',[mainController::class,"fetch_land_det"]);

Route::get('/fetch_pond_det/{form_id}',[mainController::class,"fetch_pond_det"]);

Route::get('/fetch_plant_det/{form_id}',[mainController::class,"fetch_plant_det"]);



Route::get('/fetch_bank_det/{form_id}',[mainController::class,"fetch_bank_det"]);

// routes for associates


Route::get('/vol',function(){
    return view('assoc/vol');
})->name('vol');

Route::get('/form1',function(){
    return view('assoc/form1');
})->name('form1');

Route::get('/form2',function(){
    return view('assoc/form2');
})->name('form2');

Route::get('/form3',function(){
    return view('assoc/form3');
})->name('form3');

Route::post('/form_land',[mainController::class,"land_form"]);

Route::post('/form_pond',[mainController::class,"pond_form"]);

Route::post('/form_plant',[mainController::class,"plant_form"]);


Route::get('/application',[mainController::class,'fetch_appl'])->name('application');

//end routes for assoc






//routes for coordinators

Route::get('/coor',function(){
    return view('coor');
})->name('coor');


Route::get('/coor',[coorController::class,'fetch_appl_coor'])->name('coor');

Route::post('/coor/rem',[coorController::class,'coor_rem']);

Route::get('/get-remarks/{id}', [CoorController::class, 'getRemarks']);

Route::post('/coor_appr1/{form_id}',[coorController::class,"coor_appr"]);

Route::post('/cform_land',[coorController::class,"land_form"]);

Route::post('/cform_pond',[coorController::class,"pond_form"]);

Route::post('/cform_plant',[coorController::class,"plant_form"]);

Route::get('/cform1',function(){
    return view('coor/cform1');
})->name('cform1');

Route::get('/form2',function(){
    return view('coor/cform2');
})->name('cform2');

Route::get('/form3',function(){
    return view('coor/cform3');
})->name('cform3');

//end routes for coordinator







//routes for tl

Route::get('/tl',[tlController::class,'fetch_appl_tl'])->name('tl');

Route::post('/tform_land',[tlController::class,"land_form"]);

Route::post('/tform_pond',[tlController::class,"pond_form"]);

Route::post('/tform_plant',[tlController::class,"plant_form"]);

Route::get('/tform1',function(){
    return view('tl/tform1');
})->name('tform1');

Route::get('/tform2',function(){
    return view('tl/tform2');
})->name('tform2');

Route::get('/tform3',function(){
    return view('tl/tform3');
})->name('tform3');

//end routes for tl






//routes for fm

Route::get('/fm',[fmController::class,'fetch_appl_fm'])->name('fm');
Route::post('/fm/rem',[fmController::class,'fm_rem']);
Route::get('/getfm-remarks/{id}', [fmController::class, 'getRemarks']);


//end routes for fm










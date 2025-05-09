<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\coorController;
use App\Http\Controllers\tlController;
use App\Http\Controllers\fmController;


Route::get('/', function () {
    return view('login');
})->name('login');
Route::post('/log',[mainController::class,"login"]);

Route::get('/fetch_farmer_det/{form_id}',[mainController::class,"fetch_farmer_det"]);

Route::get('/fetch_land_det/{form_id}',[mainController::class,"fetch_land_det"]);

Route::get('/fetch_pond_det/{form_id}',[mainController::class,"fetch_pond_det"]);

Route::get('/fetch_plant_det/{form_id}',[mainController::class,"fetch_plant_det"]);



Route::get('/fetch_bank_det/{form_id}',[mainController::class,"fetch_bank_det"]);

Route::post('/get-document', [mainController::class, 'getDocument']);


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

Route::get('/post_appl',[mainController::class,'fetch_appl_post'])->name('post_appl');

Route::post('/submit/pf_land',[mainController::class,'submit_pf_land']);
Route::post('/submit/pf_pond',[mainController::class,'submit_pf_pond']);
Route::post('/submit/pf_plant',[mainController::class,'submit_pf_plant']);

Route::get('/get-land-pf-details/{id}', [mainController::class, 'getLandPostFund']);
Route::post('/update-land-pf', [mainController::class, 'updateLandPostFund'])->name('update.land.pf');
Route::get('/edit-pf-pond/{id}', [mainController::class, 'editPondPostFund']);
Route::post('/update-pf-pond', [mainController::class, 'updatePondPostFund']);
Route::get('/getPlantPostFund/{id}', [mainController::class, 'getPlantPostFund']);
Route::post('/updatePlantPostFund', [mainController::class, 'updatePlantPostFund']);
Route::get('/get-bank-details/{form_id}', [MainController::class, 'getBankDetails']);
Route::post('/update-bank-details', [MainController::class, 'updateBankDetails']);
Route::get('/get-farmer-details/{id}', [MainController::class, 'getFarmerDetails']);
Route::post('/update-farmer-details', [MainController::class, 'updateFarmerDetails']);
Route::get('/get-pond-details/{id}', [MainController::class, 'getPondDetails']);
Route::post('/postfunding/pond/update', [MainController::class, 'updatePond'])->name('postfunding.pond.update');
Route::get('/get-plant-form', [MainController::class, 'getPlantForm']);
Route::post('/update-plant-form', [MainController::class, 'updatePlantForm']);
Route::get('/landform/edit/{id}', [MainController::class, 'editLandForm']);
Route::post('/landform/update', [MainController::class, 'updateLandForm']);










//end routes for assoc






//routes for coordinators

Route::get('/coor',function(){
    return view('coor');
})->name('coor');


Route::get('/coor',[coorController::class,'fetch_appl_coor'])->name('coor');

Route::get('/dash',function(){return view('coor/coordash');})->name('dash');

Route::get('/cappl',[coorController::class,'fetch_appl_coor1'])->name('cappl');


Route::post('/coor/rem',[coorController::class,'coor_rem']);

Route::get('/get-remarks/{id}', [CoorController::class, 'getRemarks']);

Route::post('/coor_appr1/{form_id}',[coorController::class,"coor_appr"]);

Route::post('/cform_land',[coorController::class,"land_form"]);

Route::post('/cform_pond',[coorController::class,"pond_form"]);

Route::post('/cform_plant',[coorController::class,"plant_form"]);

Route::get('/cform1',function(){
    return view('coor/cform1');
})->name('cform1');

Route::get('/cform2',function(){
    return view('coor/cform2');
})->name('cform2');

Route::get('/cform3',function(){
    return view('coor/cform3');
})->name('cform3');

Route::get('/coordinator/approve-pf/{id}', [coorController::class, 'approvePF']);
Route::get('/coor/view-pf-land/{id}', [coorController::class, 'viewPFLand']);
Route::get('/coor/view-pf-pond/{id}', [coorController::class, 'viewPFPond']);
Route::get('/coor/view-pf-plant/{id}', [coorController::class, 'viewPFPlant']);
Route::post('/coor/pf-edit-request', [coorController::class, 'pfEditRequest']);
Route::get('/coor/view-reason/{id}', [coorController::class, 'viewReason']);

Route::post('/submit/coor/pf_land',[coorController::class,'submit_pf_land']);
Route::post('/submit/coor/pf_pond',[coorController::class,'submit_pf_pond']);
Route::post('/submit/coor/pf_plant',[coorController::class,'submit_pf_plant']);






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

Route::get('/tappl',[tlController::class,'fetch_appl_tl1'])->name('tl1');
Route::get('/mem',[tlController::class,'fetch_tl_mem'])->name('tl_mem');
Route::delete('/tl/delete-user/{id}', [tlController::class, 'deleteUser']);
Route::post('/tl/store-user', [tlController::class, 'storeUser'])->name('tl.store_user');
Route::get('/tl/get_user/{id}', [tlController::class, 'get_user']);
Route::post('/tl/update_user', [tlController::class, 'update_user']);






//end routes for tl






//routes for fm

Route::get('/dash',function(){return view('fm/fmdash');})->name('dash');
Route::get('/fm',[fmController::class,'fetch_appl_fm'])->name('fm');
Route::get('/finance_pf',[fmController::class,'fetch_appl_pf'])->name('pf_fm');

Route::post('/fm/rem',[fmController::class,'fm_rem']);
Route::get('/getfm-remarks/{id}', [fmController::class, 'getRemarks']);
Route::post('/fin-approve',[fmController::class,'fm_app']);


//end routes for fm










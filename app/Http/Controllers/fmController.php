<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Form;
use App\Models\BankDetail;
use App\Models\landForm;
use App\Models\PondForm;
use App\Models\FileUpload;
use App\Models\PlantForm;

class fmController extends Controller
{
    public function fetch_appl_fm(){
        $form1 = Form::Where('form_type','land')->where('status',4)->get();
        $form2 = Form::Where('form_type','pond')->where('status',4)->get();
        $form3 = Form::Where('form_type','plant')->where('status',4)->get();
        if($form1||$form2||$form3){
            return view('fm/fm',compact('form1','form2','form3'));
        }

    }

    public function fm_rem(Request $req)
{
  
    // Find the form and update
    $form = Form::find($req->form_id);

    if ($form) {
        $form->remarks = $req->remarks;
        $form->status = 5; // 2 = Request Change
        $form->save();

        return response()->json([
            'status' => 200,
            'message' => 'Remarks updated successfully. Form sent back to associate.'
        ]);
    }

    return response()->json([
        'status' => 500,
        'message' => 'Form not found.'
    ], 404);
}

public function getRemarks($id)
{
    $form = Form::find($id);

    if ($form) {
        return response()->json([
            'success' => 200,
            'remarks' => $form->remarks
        ]);
    }

    return response()->json([
        'success' => 404,
        'message' => 'Form not found'
    ]);
}

public function fm_app(Request $req)
{
    $form = Form::find($req->mcode_form_id);

    if ($form) {

        $form->mcode = $req->mcode;
        $form->status = 6;
        $form->save();

        return response()->json(['status' => 200, 'message' => 'Status updated to 6.']);
    }

    return response()->json(['status' => 500, 'message' => 'Form not found.'], 404);
}

}

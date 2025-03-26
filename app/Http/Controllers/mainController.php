<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Form;
use App\Models\BankDetail;
use App\Models\landForm;




class mainController extends Controller
{
    public function login(Request $req){
        $req->validate([
            'email' => 'required',
            'pass' => 'required',
        ]);
        
        $user = User::where('email',$req->email)->first();
        if($user && $user->password=== $req->pass){
            session([
                'name'=> $user->name,   
                'email'=> $user->email,
                'user_id'=> $user->id
                
            ]);

            // Return JSON success response for AJAX
            return response()->json([
                'status' => 200,
                'message' => 'Login successful!',
                'role'=>$user->role,
            ]);
        }

    }

    public function land_form(Request $req)
    {
        $req->validate([
            // Basic Details
            'farmerName' => 'required',
            'mobileNumber' => 'required',
            'gender' => 'required',
            'fatherSpouse' => 'required',
            'householdMembers' => 'required',
            'identityCard' => 'required',
            'idCardNumber' => 'required',
            'hamlet' => 'required',
            'panchayat' => 'required',
            'block' => 'required',
        
            // Land Ownership
            'type' => 'required',
            'pattaNumber' => 'required',
            'totalArea' => 'required',
            'revenueVillage' => 'required',
        
            // Land Development Activity
            'sf_no' => 'required',
            'land_benefit' => 'required',
            'soil_type' => 'required',
            'inspection' => 'required',
            'approved_by' => 'required',
            'inspection_date' => 'required',
            'approval_date' => 'required',
            'estimateAmount' => 'required',
        
            'workType' => 'required',
            'areaBenefited' => 'required',
            'otherWorks' => 'required',
            'pradanContribution' => 'required',
            'farmerContribution' => 'required',
        
            // Bank Details
            'account_holder' => 'required',
            'account_number' => 'required',
            'bank_name' => 'required',
            'branch' => 'required',
            'ifsc' => 'required',
        ]);
        
        $form = new Form();
        $form->user_id = $req->user_id;
        $form->form_type = 'land';
        $form->farmer_name = $req->farmerName;
        $form->mobile_number = $req->mobileNumber;
        $form->gender = $req->gender;
        $form->father_spouse = $req->fatherSpouse;
        $form->household_members = $req->householdMembers;
        $form->identity_card_type = $req->identityCard;
        $form->identity_card_number = $req->idCardNumber;
        $form->hamlet = $req->hamlet;
        $form->panchayat = $req->panchayat;
        $form->block = $req->block;
        $form->save();

            // Get the auto-generated form_id
    $form_id = $form->id;

    // Insert into `land_form` table
    $landForm = new LandForm();
    $landForm->form_id = $form_id; // Foreign key reference
    $landForm->ownership = $req->type;
    $landForm->patta = $req->pattaNumber;
    $landForm->total_area = $req->totalArea;
    $landForm->revenue = $req->revenueVillage;
    $landForm->sf_no = $req->sf_no;
    $landForm->soil_type = $req->soil_type;
    $landForm->land_benefit = $req->land_benefit;
    $landForm->field_insp = $req->inspection;
    $landForm->site_app = $req->approved_by;
    $landForm->date_of_ins = $req->inspection_date;
    $landForm->date_of_app = $req->approval_date;
    $landForm->type_of_work = implode(',', $req->workType); // Convert array to string
    $landForm->area_benefit = $req->areaBenefited;
    $landForm->other_works = $req->otherWorks;
    $landForm->pradan_cont = $req->pradanContribution;
    $landForm->farmer_cont = $req->farmerContribution;
    $landForm->total_amount = $req->estimateAmount;
    $landForm->save();

        // Insert into `bank_details` table
        $bankDetail = new BankDetail();
        $bankDetail->form_id = $form_id;
        $bankDetail->account_holder_name = $req->account_holder;
        $bankDetail->account_number = $req->account_number;
        $bankDetail->bank_name = $req->bank_name;
        $bankDetail->branch = $req->branch;
        $bankDetail->ifsc_code = $req->ifsc;
        $bankDetail->save();
    
        return response()->json(['status' => 200, 'message' => 'inserted succesfully']);




    
    }
    
}

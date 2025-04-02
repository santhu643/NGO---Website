<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Form;
use App\Models\BankDetail;
use App\Models\landForm;
use App\Models\PondForm;





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
    public function applications()
    {
        $userId = session('user_id');    
    
        $forms = Form::where('user_id', $userId)
            ->where('form_type', 'land')
            ->with(['landForm', 'bankDetails'])
            ->get();

     return view('applications',compact('forms'));



    
    }

    public function form2()
        {
            $userId = session('user_id');    
        
            $forms = Form::where('user_id', $userId)
                ->where('form_type', 'pond')
                ->with(['pondForm', 'bankDetails'])
                ->get();
        
                return view('form2',compact('forms'));
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
        $form->status = 1;
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


    public function pond_form(Request $req)
    {
        $validatedData = $req->validate([
            'farmer_name' => 'required',
            'mobile_number' => 'required',
            'gender' => 'required',
            'father_spouse' => 'required',
            'household_members' => 'required',
            'identity_card' => 'required',
            'id_card_number' => 'required',
            'hamlet' => 'required',
            'panchayat' => 'required',
            'block' => 'required',


            'land_ownership' => 'required',
            'patta_number' => 'required',
            'total_area' => 'required',
            'revenue_village' => 'required',
            'sf_number' => 'required',
            'soil_type' => 'required',
            'land_serve' => 'required',
            'inspection_by' => 'required',
            'approved_by' => 'required',
            'doi' => 'required|date',
            'doa' => 'required|date',
            'length' => 'required',
            'depth' => 'required',
            'vol' => 'required',
            'pradan_contribution' => 'required',
            'farmer_contribution' => 'required',
            'total_estimate' => 'required',
            'bank_name' => 'required',
            'branch' => 'required',
            'account_holder' => 'required',
            'account_number' => 'required',
            'ifsc_code' => 'required',
            'farmer_agreement' => 'required',
        ]);


        $form = new Form();
    $form->user_id = $req->user_id;
    $form->form_type = 'pond';
    $form->farmer_name = $req->farmer_name;
    $form->mobile_number = $req->mobile_number;
    $form->gender = $req->gender;
    $form->father_spouse = $req->father_spouse;
    $form->household_members = $req->household_members;
    $form->identity_card_type = $req->identity_card;
    $form->identity_card_number = $req->id_card_number;
    $form->hamlet = $req->hamlet;
    $form->panchayat = $req->panchayat;
    $form->block = $req->block;
    $form->created_at = now(); // Add timestamp manually
    $form->status = 1;

    $form->save();

    $form_id = $form->id;

    

    // Now insert into PondForm table using the form_id
$pondForm = new PondForm();
$pondForm->form_id = $form_id;
$pondForm->land_owner = $req->land_ownership;
$pondForm->patta = $req->patta_number;
$pondForm->total_area = $req->total_area;
$pondForm->revenue = $req->revenue_village;
$pondForm->sf_no = $req->sf_number;
$pondForm->soil_type = $req->soil_type;
$pondForm->land_serve = $req->land_serve;
$pondForm->field_insp = $req->inspection_by;
$pondForm->site_appr = $req->approved_by;
$pondForm->date_of_insp = $req->doi;
$pondForm->date_of_appr = $req->doa;
$pondForm->length = $req->length;
$pondForm->depth = $req->depth;
$pondForm->volume = $req->vol;
$pondForm->pradan_cont = $req->pradan_contribution;
$pondForm->farmer_cont = $req->farmer_contribution;
$pondForm->total = $req->total_estimate;
$pondForm->save();


// Now insert into BankDetail table using the form_id
$bankDetail = new BankDetail();
$bankDetail->form_id = $form_id;
$bankDetail->account_holder_name = $req->account_holder;
$bankDetail->account_number = $req->account_number;
$bankDetail->bank_name = $req->bank_name;
$bankDetail->branch = $req->branch;
$bankDetail->ifsc_code = $req->ifsc_code;
$bankDetail->save();

return response()->json(['status' => 200, 'message' => 'inserted succesfully']);

    }

    public function fetch_farmer_det($id){
        $form = Form::where('id',$id)->first();
        if($form){
            return response()->json(["status"=>200,"data"=>$form]);
        }
    }

    public function fetch_land_det($id){
        $form = LandForm::where('form_id',$id)->first();
        if($form){
            return response()->json(["status"=>200,"data"=>$form]);
        }
    }

    public function fetch_bank_det($id){
        $form = BankDetail::where('form_id',$id)->first();
        if($form){
            return response()->json(["status"=>200,"data"=>$form]);
        }

    }

   

        
    

    
}
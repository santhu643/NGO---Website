<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ApplicantDetail;
use App\Models\ApplicantLandOwnershipAndLivesock;
use App\Models\ApprovalDatum;
use App\Models\BankDetail;
use App\Models\FarmPondDetail;
use App\Models\File;
use App\Models\LandDevelopmentDetail;
use App\Models\Plantation;
class mainController extends Controller
{
    //Login Controller
    public function login(Request $req){
        $req->validate([
            'email' => 'required',
            'pass' => 'required',
        ]);
        
        $user = User::where('username',$req->email)->first();
        if($user && $user->password === $req->pass){
            session([
                'name'=> $user->name,   
                'email'=> $user->username,
                'user_id'=> $user->id
                
            ]);

            // Return JSON success response for AJAX
            return response()->json([
                'status' => 200,
                'message' => 'Login successful!',
                'role'=>$user->designation,
            ]);
        }

    }
    //Login Functionality Ends

    


}
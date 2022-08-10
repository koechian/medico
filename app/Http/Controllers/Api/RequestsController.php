<?php

namespace App\Http\Controllers\Api;

use Throwable;
use App\Models\Patients;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RequestsController extends Controller
{
    public function index(){
        return Patients::all();
    }
    public function createPatient(Request $request){

        try{
            $validatePatient=Validator::make($request->all(),
        [
            'firstName'=>'required',
            'lastName'=>'required',
            'gender'=>'required',
            'current_dept'=>'required',
        ]);

        if($validatePatient->fails()){
            return response()->json([
                'status'=>false,
                'message'=>'validaton error',
                'errors'=>$validatePatient->errors()

            ],401);
        }

$patient=Patients::create([
    'firstname'=>$request->firstName,
    'lastname'=>$request->lastName,
    'gender'=>$request->gender,
    'current_dept'=>$request->current_dept,

]);

return response()->json([
    'status'=>true,
    'message'=>'Patient added to Database',

],200);


        }catch(Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),

            ],500);
        }

        
    }
}

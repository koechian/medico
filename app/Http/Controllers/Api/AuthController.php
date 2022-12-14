<?php

namespace App\Http\Controllers\Api;

use Throwable;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{     

    public function createUser(Request $request){

        try{
            $validateUser=Validator::make($request->all(),
        [
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
            'dept'=>'required',
        ]);

        if($validateUser->fails()){
            return response()->json([
                'status'=>false,
                'message'=>'validaton error',
                'errors'=>$validateUser->errors()

            ],401);
        }

$user=User::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'dept'=>$request->dept,
    'password'=>Hash::make($request->password)

]);

return response()->json([
    'status'=>true,
    'message'=>'User Created Successfully',
    'token'=>$user->createToken('API TOKEN')->plainTextToken

],200);


        }catch(Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),

            ],500);
        }

        
    }

    public function loginUser(Request $request){

        try{
            $validateUser=Validator::make($request->all(),
            [
                'email'=>'required|email',
                'password'=>'required',
            ]);
    
            if($validateUser->fails()){
                return response()->json([
                    'status'=>false,
                    'message'=>'validaton error',
                    'errors'=>$validateUser->errors()
    
                ],401);
            }

            if(!Auth::attempt($request->only(['email','password']))){
                return response()->json([
                    'status'=>false,
                    'message'=>'email or password are incorrect',
                    'errors'=>$validateUser->errors()
    
                ],401);
            }

            $user=User::where('email',$request->email)->first();

            return response()->json([
                'status'=>true,
                'message'=>'User Logged Successfully',
                'token'=>$user->createToken('API TOKEN')->plainTextToken
            
            ],200);


        }
        catch(Throwable $th){
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),

            ],500);

    }
}
public function logout(){
    Session::flush();
    Auth::logout();
    
    return Route('Login');

}
}
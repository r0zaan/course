<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthsController extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function loginPost(Request $request){

        $validator = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required',
        ]);
        if($validator->fails()){
            return [
                'status' => 'fail',
                'errors' => $validator->getMessageBag()->toArray()
            ];
        }
        $inputs = $request->all();
        if(Auth::attempt(['email' => $inputs['email'] , 'password' => $inputs['password']]))
        {
            return [
                'status' => 'success',
                'return_url' => route('home'),
            ];
        }
        else{
            session()->flash('error', 'Username and Password does not match');
            return [
                'status' => 'fail',
                'data' => 'This Email and Password does not match.'
            ];
        }
    }
    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('login');
    }}

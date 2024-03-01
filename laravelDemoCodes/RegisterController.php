<?php

namespace App\Http\Controllers;

use App\Models\RegisterModel;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view("register");
    }

   public function register(Request $request){

        $request->validate([
            "name"=>"required|string",
            "email"=>"required|unique:register_models,email|email",
            "mobile"=>"required|regex:/^[0-9]{10}$/|unique:register_models,mobile",
            "year"=>"required",
            "department"=>"required"
        ],[
            'mobile.regex' => 'The mobile number must be a 10-digit numeric value.',
        ]);

       $data = $request->except('_token');   

       RegisterModel::create($data);
    // $registerModel = new RegisterModel();
    // $registerModel->name       = $data['name'];
    // $registerModel->email_id      = $data['email'];
    // $registerModel->mobile_no     = $data['mobile'];
    // $registerModel->year       = $data['year'];
    // $registerModel->department = $data['department'];
    // $registerModel->save();
    return redirect()->route('home')->with('success', 'Student successfully registered!');
}

    public function show(){
        $data = RegisterModel::all();

        return view('ShowHome')->with('data',$data);
    }
}

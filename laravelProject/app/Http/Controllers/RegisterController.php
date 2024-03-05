<?php

namespace App\Http\Controllers;

use App\Models\RegisterModel;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view("login");
    }
    public function login(Request $request){
        // $data=studentModel::all();
        $data = $request->except("_token");
 
        $email = $data['email'];
        $mobile = $data['mobile'];
  
 
        $user = RegisterModel::where("email",$email)->first();
        if(!$user){
            return "Please Register first";
        }else{
            $db_mobile=$user['mobile'];
            if($db_mobile===$mobile){
                return redirect()->route("home");
            }else{
                return "Password Mismatch";
            }
        }
 
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
    return redirect()->route('home');
}

    public function show(){
        $data = RegisterModel::all();

        return view('ShowHome')->with('data',$data);
    }

    public function edit($id){
        $data = RegisterModel::find($id);
        if (!$data) {
            abort(404); // or handle the case in your own way
        }
        return view('edit')->with('data',$data);
    }
    public function update(Request $request, $id){
        // $request->validate([
        //     "name"=>"required|string",
        //     "email"=>"required|unique:register_models,email|email",
        //     "mobile"=>"required|regex:/^[0-9]{10}$/|unique:register_models,mobile",
        //     "year"=>"required",
        //     "department"=>"required"
        // ],[
        //     'mobile.regex' => 'The mobile number must be a 10-digit numeric value.',
        // ]);
        $data = RegisterModel::where('id',$id)->first();
        // return $data;
        $data->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'mobile'=> $request->mobile,
            'year'=> $request->year,
            'department'=>$request->department
        ]);
        // return[$data , $user];
        // return view('ShowHome')->with('data',$data);
        return redirect()->route('home')->with('data',$data);
    }

    public function delete($id){
        $data = RegisterModel::where('id',$id)->first();
       
        $data->update([
            'status'=>'D'
        ]);
        // return $data->status;
        return redirect()->route('home');

    }
}

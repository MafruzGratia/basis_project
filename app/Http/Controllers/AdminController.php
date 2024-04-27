<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\admin;
use App\Models\employee;
use App\Models\User;
use Exception;
use App\mymodule\AdminMethod;

class AdminController extends Controller {
    public function index(Request $request){
        return view('admin.login');
    }

    public function welcome(Request $request){
        $users=Auth::guard('admin')->user()->user_name;
        return view('admin.dashboard.welcome',[
            'users'=>$users,
        ]);
    }

    public function viewEmp(Request $request){
        $users=Auth::guard('admin')->user()->user_name;
        $employees = employee::orderBy('id', 'asc')->paginate(10);
        if ($request->ajax()) {
            // Return only the partial view with the employee data
            return view('components.view-emp', compact('employees'))->render();
        }
        return view('admin.dashboard.viewEmp',[
            'users'=>$users,
            'employees'=>$employees,
        ]);
    }

    public function addEmp(){
        $users=Auth::guard('admin')->user()->user_name;
        return view('admin.dashboard.regEmp',[
            'users'=>$users,
        ]);
    }

    public function login( Request $request ) {
        $credentials = $request->only( 'email', 'password' );
        $status = 400;
        $message = [];
        $error_message = [
            'required' => ':attribute is required filed',
        ];
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required',
                'password' => 'required',
            ],
            $error_message
        );
        $login_data = admin::where('email', $request->email)
        ->first();
        $message="";
        // $data=AdminMethod::fun();
        if ( $validator->fails() ) {
            $message = $validator->errors()->all();
        }else{

         if (Auth::guard('admin')->attempt($credentials)) {
                Auth::guard('admin')->login($login_data);
            $message="Ok";
            $status=200;
        }else{
            $message="not Ok ";
        }

    }
        return response()->json(['data'=>$login_data,'message'=>$message]);

}

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}

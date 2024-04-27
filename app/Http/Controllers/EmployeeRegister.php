<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Exception;
use App\mymodule\AdminMethod;
class EmployeeRegister extends Controller
{   public function emp_register(Request $request)
   { $message = [];
        $status = 400;
        $error_message = [
            'required'=>':attribute is required field',
            'email'=>':attribute is an email id type',
        ];
        $validator = Validator::make( $request->all(),
        [
            'name' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255|unique:employees',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ],
        $error_message );
        if ( $validator->fails() ) {
            array_push( $message, $validator->errors()->all() );
        } else {
            try {
                $check_email=AdminMethod::checkEmail($request->email);
                if ( $check_email ) {
                    array_push( $message, 'Email id already exists !' );
                } else {
                    $employee = new employee();
                    $employee->name = $request->name;
                    $employee->email = $request->email;
                    $employee->password = Hash::make( $request->password );
                    $employee->save();
                    $status=200;
                    array_push( $message, 'Ok !' );
                }
            } catch( Exception $err ) {
                array_push( $message, 'Sever error please try later  !' );
            }
        }
        return response()->json( [ 'status'=>$status, 'message'=>$message ] );
    }
}

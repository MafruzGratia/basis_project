<?php

namespace App\mymodule;
use App\Models\employee;
class AdminMethod
{
    public static function fun(){
        return "data";
    }
    public static function checkEmail($email){
        return employee::where( 'email', $email )->first();
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeRegister;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/login',[AdminController::class,'index']);
Route::post('admin/login',[AdminController::class,'login']);

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin/dashboard',[AdminController::class,'welcome'])->name('admin-dashboard');
    Route::get('/admin/employee/view',[AdminController::class,'viewEmp'])->name('admin-viewEmp');
    Route::get('/admin/employee/add',[AdminController::class,'addEmp'])->name('admin-addEmp');
});

Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');

Route::post('/employee-register',[EmployeeRegister::class,'emp_register']);



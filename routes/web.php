<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoController;
use App\Http\Controllers\registrationController;
use App\Models\Customer;
use App\Models\Employee;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[demoController::class, 'home']);
Route::get('/about',[demoController::class,'about']);
Route::get('/register',[registrationController::class,'register']);
Route::get('/edit/{id}',[registrationController::class,'edit']);
Route::post('/editstore',[registrationController::class,'editstore']);
Route::post('/store',[registrationController::class,'store']);
Route::get('/data',[registrationController::class,'view']);
Route::get('/delete/{id}',[registrationController::class,'delete']);
Route::get('/employee',function(){
 $employee=Employee::all();
 echo "<pre>";
 print_r($employee->toArray());
 echo "</pre>";
});


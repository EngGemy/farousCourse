<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductContoller;
use \App\Models\User;
use  App\Http\Controllers\StudentController;

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
//Route::view('mohamed','welcome');
//
//Route::get('/', function () {
//   return "hello abdalla";
//});
////required paramter
//Route::get('home/{id}',function ($id){
//    return "zabola " .$id;
//});
//Route::get('contact/{name?}',function ($name= null){
//    return "zabola " .$name;
//})->where("name" , "[a-z]+" );

Route::get('product/{id?}',[ProductContoller::class,'index']);
Route::get('about',[ProductContoller::class,'show']);
Route::get('student',[StudentController::class,'show']);

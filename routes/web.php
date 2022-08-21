<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use \App\Models\User;
use  App\Http\Controllers\StudentController;
use App\Models\Product;
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
Route::view('mohamed','welcome');

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


Route::prefix('products')->group(function (){
    Route::get("/",[ProductController::class,'index'])->name('product.index');
    Route::get("/create",[ProductController::class,'create'])->name('product.create');
    Route::post("/store",[ProductController::class,'store'])->name('product.store');
    Route::get("/show/{id}",[ProductController::class,'show'])->name('product.show');
    Route::get("/edit/{id}",[ProductController::class,'edit'])->name('product.edit');
    Route::post("/update/{id}",[ProductController::class,'update'])->name('product.update');
    Route::get("/delete/{id}",[ProductController::class,'destroy'])->name('product.delete');


});

//
//Route::resource('products',[ProductController::class]);

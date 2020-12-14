<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuisnessController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProductController;

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


//----Welcome page Route----//
Route::get('/', function () {
    return view('welcome');
});

//------Grouped Routes for the authenticated User------//
Route::group(['middleware'=>['auth:sanctum','verified']],function(){

        //-------Dashboard Route-----//
    Route::get('/dashboard',[DashboardController::class,'view'])->name('dashboard');

        //-------Buisness Routes-----//
    Route::get('/addbuisness',[BuisnessController::class,'create'])->name('addbuisness');
    Route::post('/addbuisness/submit',[BuisnessController::class,'store'])->name('subbuisness');
    Route::post('/deletebuisness/{id}',[BuisnessController::class,'destroy'])->name('deletebuisness');

        //-------Account Routes-----//
    Route::get('/addaccount',[AccountController::class,'create'])->name('addaccount');
    Route::post('/addaccount/submit',[AccountController::class,'store'])->name('subaccount');

        //-------Product Routes-----//
    Route::get('/addproduct/{id}',[ProductController::class,'create'])->name('addproduct');
    Route::post('/addproduct/submit',[ProductController::class,'store'])->name('subproduct');
    Route::post('/buyproduct/{id}',[ProductController::class,'buy'])->name('buyproduct');
    Route::get('/viewproducts/{bid?}',[ProductController::class,'show'])->whereNumber('bid')->name('viewproducts');
    Route::post('/deleteproduct/{id}',[ProductController::class,'destroy'])->name('deleteproduct');
    Route::get('/history',[HistoryController::class,'history'])->name('history');
});

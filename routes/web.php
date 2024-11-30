<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\RiderController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages/landing-page');
})->name('home');


Route::get('/about', function () {
    return view('pages/about'); 
})->name('about');

/*
Route::get('/contact', function () {
    return view('pages/contact-page');
})->name('contact');

*/
Route::get('/log-in', function () { 
    return view('auth/login');    
})->name('log-in'); 

Route::get('/register',[AuthController::class,'loadRegister']);
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/login',function(){
    return redirect('/');
});

Route::get('/',[AuthController::class,'loadLogin']);
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout']);

// ********** Admin Routes *********
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);

    Route::get('/users',[AdminController::class,'users'])->name('adminUsers');
    Route::get('/manage-role',[AdminController::class,'manageRole'])->name('manageRole');
    Route::post('/update-role',[AdminController::class,'updateRole'])->name('updateRole');
});

// ********** Supplier Routes *********
Route::group(['prefix' => 'supplier','middleware'=>['web','isSupplier']],function(){
    Route::get('/dashboard',[SupplierController::class,'dashboard']);
});

// ********** Rider Routes *********
Route::group(['prefix' => 'rider','middleware'=>['web','isRider']],function(){
    Route::get('/dashboard',[RiderController::class,'dashboard']);
});



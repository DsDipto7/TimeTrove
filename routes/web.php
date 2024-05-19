<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'index']);

Route::get('/index',[FrontendController::class,'index']);
Route::get('/login',[AuthController::class,'loadLogin']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'loadRegister']);
Route::post('/register',[AuthController::class,'register']);
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/backRoute',[AuthController::class,'loadLogin']);
Route::post('/contact',[FrontendController::class,'post_contact']);

Route::group(['prefix' => '_admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);
    Route::get('/watch',[AdminController::class,'watch']);
    Route::get('/add_watch',[AdminController::class,'add_watch']);
    Route::post('/add_watch',[AdminController::class,'post_add_watch']);
    Route::get('/edit_watch/{id}',[AdminController::class,'edit_watch']);
    Route::post('/edit_watch/{id}',[AdminController::class,'post_edit_watch']);
    Route::get('/delete_watch/{id}',[AdminController::class,'delete_watch']);
});

Route::group(['prefix' => '_user','middleware'=>['web','isUser']],function(){
    //for user dashboard
    Route::get('/dashboard',[UserController::class,'dashboard']);
    
    Route::get('/add_to_cart/{id}',[UserController::class,'add_to_cart']);
    Route::post('/add_to_cart/{id}',[UserController::class,'post_add_to_cart']);
    Route::get('/cart_list', [UserController::class, 'cart_list']);
    Route::get('/edit_cart/{id}', [UserController::class, 'edit_cart']);
    Route::post('/edit_cart/{id}', [UserController::class, 'post_edit_cart']);
    Route::get('/delete_cart/{id}', [UserController::class, 'delete_cart']);
    Route::get('/checkout', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

    Route::get('/invoice',[UserController::class,'invoice']);
});


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);


Route::post('/pay/{id}', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
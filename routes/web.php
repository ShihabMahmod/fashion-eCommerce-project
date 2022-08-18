<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\indexControllerForUser;
use App\Http\Controllers\user\catagoryControllerForUser;
use App\Http\Controllers\user\shopControllerForUser;
use App\Http\Controllers\user\cartControllerForUser;
use App\Http\Controllers\user\checkoutControllerForUser;
use App\Http\Controllers\user\blogControllerForUser;
use App\Http\Controllers\user\cotactControllerForUser;
use App\Http\Controllers\admin\dashboardControllerForAdmin;
use App\Http\Controllers\admin\loginControllerForAdmin;

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
//....................USER...........................................................//
//....................................................................................//
//...........index..............
Route::get('/',[indexControllerForUser::class,'index']);

//..............catagoryContrllerforuser............
Route::get('/shopbycatagory',[catagoryControllerForUser::class,'index']);

//............shopController...................
Route::get('/shop',[shopControllerForUser::class,'index']);

//...........cartCOntroller.......................
Route::get('/cart',[cartControllerForUser::class,'index']);

//................checkoutController.................
Route::get('/checkout',[checkoutControllerForUser::class,'index']);

//.............blogController...................
Route::get('/blog',[blogControllerForUser::class,'index']);

//.............contactController.................
Route::get('/contact',[cotactControllerForUser::class,'index']);


//.............................ADMIN...................................................//
//....................................................................................//
//.................dashboardController.............................
Route::get('/dashboard',[dashboardControllerForAdmin::class,'index']);

//..............loginController..........................
Route::get('/login',[loginControllerForAdmin::class,'index']);
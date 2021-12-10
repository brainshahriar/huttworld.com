<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\FrontendController;
Use App\Http\Controllers\Admin\AdminController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontendController::class,'index']);;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.index');
})->name('dashboard');

Route::get('/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');




//admin package route

Route::get('/packages',[AdminController::class,'index'])->name('package');
Route::post('/package-store',[AdminController::class,'storePackage'])->name('package-store');
Route::get('/package/delete/{id}',[AdminController::class,'deletePackage']);


//frontend route
Route::get('booking/',[FrontendController::class,'indexBooking']);
Route::post('/booking/store',[FrontendController::class,'storeBooking']);

Route::get('/admin-booking',[AdminController::class,'indexBooking'])->name('booking');
Route::get('/booking/delete/{id}',[AdminController::class,'deleteBooking']);


//all pages

Route::get('/services',[FrontendController::class,'services']);
Route::get('/about',[FrontendController::class,'about']);
Route::get('/contact',[FrontendController::class,'contact']);
Route::get('/package',[FrontendController::class,'package']);

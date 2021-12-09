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




//package route

Route::get('/packages',[AdminController::class,'index'])->name('package');

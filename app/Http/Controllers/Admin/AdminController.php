<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function AdminLogout(){
        Auth::logout();
        return Redirect()->route('login');
    }
    public function index(){
        return view('backend.pages.package.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class FrontendController extends Controller
{
    public function index(){
        $package=Package::all();
        return view('frontend.index',compact('package'));
    }
}

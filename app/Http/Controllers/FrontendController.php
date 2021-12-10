<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use Carbon\Carbon;
use App\Models\Booking;


class FrontendController extends Controller
{
    public function index(){ 
        $package=Package::all();
        return view('frontend.index',compact('package'));
    }
    public function indexBooking()
    {
        return view ('frontend.pages.booking');
    }
    public function storeBooking(Request $request){
    
        $data=Booking::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'date'=>$request->date,
            'adult'=>$request->adult,
            'kids'=>$request->kids,
            'created_at'=>Carbon::now(),
          ]);
          return response()->json($data);
    }
}

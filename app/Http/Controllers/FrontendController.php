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
        $package=Package::all();
        return view ('frontend.pages.booking',compact('package'));
    }
    public function storeBooking(Request $request){
        $data=Booking::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'date'=>$request->date,
            'adult'=>$request->adult,
            'kids'=>$request->kids,
            'location'=>$request->location,
            'created_at'=>Carbon::now(),
          ]);
          return response()->json($data);
    }
}

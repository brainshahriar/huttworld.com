<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Booking;
use Image;
use Auth;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function AdminLogout(){
        Auth::logout();
        return Redirect()->route('login');
    }
    public function index(){
        $package=Package::all();
        return view('backend.pages.package.index',compact('package'));
    }
    public function storePackage(Request $request){
        $image = $request->file('image');
        $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->save('uploads/images/'.$name_gen);
        $save_url = 'uploads/images/'.$name_gen;

        Package::insert([
            'image' => $save_url,
            'price' => $request->price,
            'location' => $request->location,
            'place' =>  $request->place,
            'title' => $request->title,
            'duration' =>  $request->duration,
            'created_at' => Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Success',
            'alert-type'=>'success' 
        );
        return Redirect()->back()->with($notification);
    }
    public function deletePackage($id){

        $image = Package::findOrFail($id);
        $img = $image->image;
        unlink($img);
        Package::findOrFail($id)->delete();
        $notification=array(
         'message'=>'Delete Success',
         'alert-type'=>'success'
     );
     return Redirect()->back()->with($notification);
    }
    public function indexBooking()
    {
        $booking=Booking::all();
        return view('backend.pages.booking',compact('booking'));
    }
    public function deleteBooking($id){

        Booking::findOrFail($id)->delete();
        $notification=array(
         'message'=>'Delete Success',
         'alert-type'=>'success'
     );
     return Redirect()->back()->with($notification);
    }
}

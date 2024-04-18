<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;

class AdminPageController extends Controller
{
    public function cart(){
        $page_data=Page::where('id',1)->first();
        return view('admin.page_cart',compact('page_data'));
    }
    public function cart_update(Request $request){
        $page_data=Page::where('id',1)->first();
        $page_data->cart_heading=$request->cart_heading;
        $page_data->cart_status=$request->cart_status;
        $page_data->save();
        return redirect()->back()->with('success','Cart Page Updated Successfully');
    }
    public function checkout(){
        $page_data=Page::where('id',1)->first();
        return view('admin.page_checkout',compact('page_data'));
    }
    public function checkout_update(Request $request){
        $page_data=Page::where('id',1)->first();
        $page_data->checkout_heading=$request->checkout_heading;
        $page_data->checkout_status=$request->checkout_status;
        $page_data->save();
        return redirect()->back()->with('success','Checkout Page Updated Successfully');
    }
    public function payment(){
        $page_data=Page::where('id',1)->first();
        return view('admin.page_payment',compact('page_data'));
    }
    public function payment_update(Request $request){
        $page_data=Page::where('id',1)->first();
        $page_data->payment_heading=$request->payment_heading;
        
        $page_data->save();
        return redirect()->back()->with('success','Payment Page Updated Successfully');
    }
    public function signup(){
        $page_data=Page::where('id',1)->first();
        return view('admin.page_signup',compact('page_data'));
    }
    public function signup_update(Request $request){
        $page_data=Page::where('id',1)->first();
        $page_data->signup_heading=$request->signup_heading;
        $page_data->signup_status=$request->signup_status;
        $page_data->save();
        return redirect()->back()->with('success','Signup Page Updated Successfully');
    }
    public function signin(){
        $page_data=Page::where('id',1)->first();
        return view('admin.page_signin',compact('page_data'));
    }
    public function signin_update(Request $request){
        $page_data=Page::where('id',1)->first();
        $page_data->signin_heading=$request->signin_heading;
        $page_data->signin_status=$request->signin_status;
        $page_data->save();
        return redirect()->back()->with('success','Signin Page Updated Successfully');
    }
    
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Feature;
use App\Models\Room;
use App\Models\Testimonial;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){

        $slide_all=Slide::get();
        $feature_all=Feature::get();
        $room_all=Room::get();
        $testimonial_all=Testimonial::get();
        $post_all = Post::orderBy('id','desc')->limit(3)->get();
        return view('front.home',compact('slide_all','feature_all','room_all','testimonial_all','post_all'));
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
class PhotoController extends Controller
{
    public function index(){
         $photo_all=Photo::paginate(2);
         return view('front.photo_gallery',compact('photo_all'));
    }
}
 
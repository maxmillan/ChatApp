<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class timelineAboutController extends Controller
{
    public function index($id){
        $abouts = User::where('id',$id)->get();
        foreach ($abouts as $about){

        }
        return view('vendor.voyager.timeline-about',[
            'about'=>$about
        ]);
    }
}

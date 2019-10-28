<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userTimelineController extends Controller
{

    public function userTimeline($id){
        $timelines = User::where('id',$id)->get();
        foreach ($timelines as $timeline){
        }
        return view('vendor.voyager.user-timeline',[
            'timeline'=>$timeline,
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class timelineAlbumController extends Controller
{
    public function userAlbum($id){
        $albums = User::where('id',$id)->get();
        foreach ($albums as $album){

        }
        return view('vendor.voyager.timeline-album',[
            'album'=>$album
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userFriendsController extends Controller
{
    public function index(){
        $friends = User::where(Auth::id(),'id');
        return view('vendor.voyager.user-friends',[
            'friends'=>$friends,
        ]);
    }
}

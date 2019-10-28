<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class friendsController extends Controller
{
    public function index(){
        $users = User::all();
        return view('vendor.voyager.friends',[
            'users'=>$users,
        ]);
    }
}

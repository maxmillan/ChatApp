<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        $users = User::all();
        return view('vendor.voyager.index')->with('users',$users);
    }
}

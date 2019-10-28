<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class navController extends Controller
{
    public function index(){
        $user = Auth::id();
        return view('partials.nav',[
            'user'=>$user
        ]);
    }
}

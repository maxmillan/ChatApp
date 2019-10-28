<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index(){
        return view('vendor.voyager.register');
    }
    public function store(Request $request){
        $user = User::create([
            'name'=>$request['name'],
            'last'=>$request['last'],
            'gender'=>$request['gender'],
            'date'=>$request['date'],
            'image'=>$request['image'],
            'city'=>$request['city'],
            'country'=>$request['country'],
            'email'=>$request['email'],
            'password'=>Hash::make($request['password']),

        ]);
     return redirect(route('voyager.login'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Userspects;
use Illuminate\Http\Request;

class userSpectsController extends Controller
{
    public function index(){
return view('index');
    }
    public function store(Request $request){
        $spects = Userspects::create([

            'name'=>$request['name'],
            'date'=>$request['date'],
            'phone'=>$request['phone'],
            'location'=>$request['location'],
            'gender'=>$request['gender'],
        ]);
   return redirect(route('voyager.dashboard'))->with('success', 'profile created successfully');
    }

}

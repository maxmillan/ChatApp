<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class userController extends Controller
{
    public function index(){
        $users = User::all();
        return view('vendor.voyager.edit-profile');
    }
    public function show(){

    }
    public function edit($id){
        $user = User::find($id);
        return view('vendor.voyager.edit-profile',[
            'user'=> $user,
        ]);

    }
    public function update(Request $request,$id){
        $edit = User::find($id);
        $edit->name = $request->name;
        $edit->last = $request->last;
        $edit->time = $request->time;
        $edit->gender = $request->gender;
        $edit->city = $request->city;
        $edit->country = $request->country;

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->store('/uploads/avatar/'.$filename);

            $edit = Auth::user();
            $edit->image = $filename;
            $edit->save();
        }
        return redirect(url('admin/userProfile',Auth::user()));
    }
}

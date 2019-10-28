<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class messageDetailController extends Controller
{
    public function index($id){
        $messages = Message::where('user_id',$id)->orWhere('receiver_id',$id);
        return response()->json($messages);
    }

    public function detailedMessages($id){
        $details = Message::where('user_id',$id)->get();
        return view('vendor.voyager.message-details',[
            'details'=>$details,
        ]);
    }
}

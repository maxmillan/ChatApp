<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class messageController extends Controller
{
    public function get(){
        $unique =  Message::where('receiver_id',Auth::id())->get();        //first get all senders that have sent messages to the logged in person
        $messages = Message::where('receiver_id',Auth::id())->with(['sender'])->get();
        return view('vendor.voyager.messages',[
            'messages' =>$messages
        ]);
        }
    public function max(){
        $maxxs = User::all();
        return view('vendor.voyager.messages');
    }

    public function store(Request $request){

        $this->validate($request,[
            'message'=>'required'
        ]);

//        print_r($request->all());die;

        $messages = Message::create([
            'message'=>$request['message'],
            'receiver_id'=>$request['receiver_id'],
            'user_id'=>Auth::id()

        ]);

        return redirect(url('admin/message'));
    }

    public function senderMessages($id){
        $messages = Message::
        where('sender_id',$id)
            ->where('receiver_id',Auth::id())
            ->orWhere('receiver_id',$id)
            ->with(['sender'])
            ->get();
        return response()->json($messages);
    }

}

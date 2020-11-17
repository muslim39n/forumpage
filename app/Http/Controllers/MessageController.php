<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use DB;

class MessageController extends Controller
{
  public function index(){
    $messages = DB::table('messages')->get();

    return view('index', ['messages'=>$messages]);
  }

  public function newmessage(){
    return view('new');
  }

  public function newmessagecheck(Request $request){
    $name = $request->input('name');
    $email = $request->input('email');
    $message = $request->input('message');

    $messageObj = new Message;
    $messageObj->name = $name;
    $messageObj->email = $email;
    $messageObj->message = $message;

    $messageObj->save();

    return redirect()->route('message.index');
  }
}

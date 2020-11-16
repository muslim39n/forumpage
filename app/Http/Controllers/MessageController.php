<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
  public function index(){
    return view('index');
  }

  public function newmessage(){
    return view('new');
  }

  public function newmessagecheck(Request $request){
    $name = $request->input('name');
    $email = $request->input('email');
    $message = $request->input('message');

    return redirect()->route('message.index')->with(['name'=>$name, 'email'=>$email, 'message'=>$message]);
  }
}

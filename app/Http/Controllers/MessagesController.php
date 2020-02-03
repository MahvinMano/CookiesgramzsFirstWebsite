<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessagesController extends Controller
{
    public function submit(Request $request){
        $this ->validate($request,[
            
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);
       
        
        $message= new Message;
        $message-> username=$request->input('name');
        $message-> email=$request->input('email');
         $message-> messages=$request->input('message');
        
        $message->save();
        
        return redirect('/contact')->with('status','Message sent');
        
        
        
    }
    public function getMessages(){
        
        
        $messages=Message::all();
        return view('messages')->with ('messages',$messages);
    }
}

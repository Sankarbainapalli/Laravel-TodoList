<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;
class PagesController extends Controller
{
    //

    public function index()
    {
    	return view('project1.home');
    }

     public function about()
    {
    	return view('project1.about');
    }
 public function contact()
    {
    	return view('project1.contact');
    }
    public function submit(Request $request)
    {
    	$this->validate($request,[

    		'name' => 'required|unique:messages',
    		'email' => 'required|unique:messages',
    		'message' => 'required'

    	]);

    	$messages = new Message;
    	$messages->name = $request->input('name');
    	$messages->email = $request->input('email');

    	$messages->message = $request->input('message');

    	$messages->save();

    	return redirect('/home')->with('success','Inserted sucessfully');


    
    }

    public function getData(){

    	$messages=Message::all();

    	return view('project1.datalist',compact('message','messages'));
    }

    // public function destoy($id){

    // 	$message =Message::find($id);
    // 	$message->delete();
    // 	return redirect('/home');
    // }

    public function datList($id)
    {

      $messages = Message::find($id);

      return view('project1.showdata',compact('message','messages'));

    }

    public function destroy($id){
        // $messages =Message::find($id);
        // $messages->delete();
        // return redirect('/home');
        
    }


}

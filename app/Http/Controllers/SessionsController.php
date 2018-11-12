<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
  //   public function __construct()

		// {

		// 	$this->middleware('guest', ['except' =>'destroy']);

		// }


  //   	public function create()
    	
  //   	{

  //   		return view('Sessions.create');

  //   	}


  //   	public function store()
  //   	{
  //   		if(!auth()->attempt(request(['email','password']))) {

  //   			 return back()->withErrors([

  //   			 	'message' => 'Please check your credential and try again'

  //   			 ]);

  //   		} 

  //   		  return redirect()->home();
    		
  //   	}	

    	public function destroy()
    	{

    		auth()->logout();

    		return redirect('/');

    	}
}
 // auth()->login($user);
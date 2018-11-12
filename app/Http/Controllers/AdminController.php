<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \App\User;
// use Illuminate\Foundation\Auth\User as Authenticatable;
class AdminController extends Controller
{
   public function admin()
   {
    $checkAuth = Auth::User()->admin;

    if ($checkAuth == 1) {

        // $admin = Auth::User()->admin()->latest()->get();

         return view('admins.index');
        // return 'Welcome ADMIN ';
    	}
    return 'You are not ADMIN';
	}



















}















<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\User;


class AuthController extends Controller
{
    public function index(){
    	return view ('admin/login');
    }

    public function login(){

    	request()->validate([
    		'username' => 'required',
    		'password' => 'required'
    	]);

    	$credentials = ['username' => request()->username, 'password' => request()->password];
    	if(Auth::attempt($credentials)){
    	return redirect('/dashboard');
    	}
    	return back()->withErrors([
    		'credentials' => 'Incorrect Username or Password'
    	]);
	}

	public function logout(){
		Auth::logout();
		return redirect ('admin');
	}

}

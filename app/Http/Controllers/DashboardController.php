<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class DashboardController extends Controller
{
    public function index(){
    	$files = File::all();
    	return view('admin/dashboard', compact('files'));
    }

    public function trends(){
        return view('admin/trends');
    }

    public function userprof(){
        return view ('admin/userprof', compact('users'));
    }

    public function inventory(){
        return view ('admin/ipassessment');
    }

    public function notif(){
        return view ('admin/notif');
    }    

    public function metrics(){
        return view('admin/metrics');
    }


}


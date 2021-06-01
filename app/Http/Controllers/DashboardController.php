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

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\File;
use App\User;
use App\Contact;
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
        $users = User::all();
        return view ('admin/userprof', compact('users'));
    }

    public function edit(User $users){
        return view ('/admin/useredit', compact('users'));
    }

    public function update(User $users){
       $validated_fields = request()->validate([
            'username' => 'required',
            'email' => 'required'
        ]);

        $users->update($validated_fields);
        return redirect('/userprof');
    }

    //password
    public function __construct(){
           $this->middleware('auth');
    }

     public function storepass(Request $request) {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        return back()->with('popup','open');
    }

    public function inventory(){
        return view ('admin/ipassessment');
    }

    public function notif(Contact $contacts){
        return view ('admin/notif', compact('contacts'));
    }    

    public function metrics(){
        return view('admin/metrics');
    }


}


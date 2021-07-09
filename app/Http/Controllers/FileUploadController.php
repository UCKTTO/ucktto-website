<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileUploadController extends Controller
{

  public function patent(Request $request){
        $request-> validate([
            'patent' => 'required'
        ]);

        $fileModel = new File;

        if($request->file()) {
            $fileName = $request->patent->getClientOriginalName();
            $filePath = $request->file('patent')->storeAs('patents', $fileName, 'public');

            $fileModel->name = $request->patent->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return back()->with('popup','open');
        }
    }

    public function copyright(Request $request){
         $request-> validate([
            'copyright' => 'required'
        ]);

        $fileModel = new File;

        if($request->file()) {
            $fileName = $request->copyright->getClientOriginalName();
            $filePath = $request->file('copyright')->storeAs('copyrights', $fileName, 'public');

            $fileModel->name = $request->copyright->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return back()->with('popup','open');
        }
    }

    public function trademark(Request $request){
         $request-> validate([
            'trademark' => 'required'
        ]);

        $fileModel = new File;

        if($request->file()) {
            $fileName = $request->trademark->getClientOriginalName();
            $filePath = $request->file('trademark')->storeAs('trademarks', $fileName, 'public');

            $fileModel->name = $request->trademark->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return back()->with('popup','open');
        }
    }

    public function industrialDesign(Request $request){
         $request-> validate([
            'industrialDesign' => 'required'
        ]);

        $fileModel = new File;

        if($request->file()) {
            $fileName = $request->industrialDesign->getClientOriginalName();
            $filePath = $request->file('industrialDesign')->storeAs('industrialDesigns', $fileName, 'public');

            $fileModel->name = $request->industrialDesign->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return back()->with('popup','open');
        }
    }

    public function utilityModel(Request $request){
         $request-> validate([
            'utilityModel' => 'required'
        ]);

       	$fileModel = new File;

        if($request->file()) {
            $fileName = $request->utilityModel->getClientOriginalName();
            $filePath = $request->file('utilityModel')->storeAs('utilityModels', $fileName, 'public');

            $fileModel->name = $request->utilityModel->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return back()->with('popup','open');
        }
    }

     public function search(Request $request){
        $search = $request->input('search');

        $files = File::where('name','LIKE',"%{$search}%")->orWhere('category','LIKE',"%{$search}%")->get();

        return view('/admin/search', compact('files'));
    }

    public function date(){
        $diles = File::all()->sortBy('date');
        return view('/admin/dashboard', compact('files'));
    }

    public function name(){
        $files = File::all()->sortBy('title');
        return view('/admin/dashboard', compact('files'));
    }

    public function category(){
        $files = File::all()->sortBy('college');
        return view('/admin/dashboard', compact('files'));
    }
}

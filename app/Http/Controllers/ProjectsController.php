<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projects;

class ProjectsController extends Controller
{
    
    public function index(){
    	$projects = Projects::Paginate(10);
    	return view('/admin/colleges', compact('projects'));
    }

    public function show(Projects $projects){
    	return view('/admin/projects/show', compact('projects'));
    }   

    public function create(){
    	return view('/admin/projects/create');
    }

    public function store(){

        $validated_fields = request()->validate([
            'college' => 'required',
	        'title'=> 'required',
	        'author1'=> 'required',
	        'author2'=> 'nullable',
	        'author3'=> 'nullable',
	        'author4'=> 'nullable',
	        'author5'=> 'nullable',
	        'author6'=> 'nullable',
	        'author7'=> 'nullable',
	        'author8'=> 'nullable',
	        'author9'=> 'nullable',
	        'author10'=> 'nullable',
	        'email1'=> 'required',
	        'email2'=> 'nullable',
	        'email3'=> 'nullable',
	        'email4'=> 'nullable',
	        'email5'=> 'nullable',
	        'email6'=> 'nullable',
	        'email7'=> 'nullable',
	        'email8'=> 'nullable',
	        'email9'=> 'nullable',
	        'email10'=> 'nullable',
	        'phonenumber1'=> 'required',
	        'phonenumber2'=> 'nullable',
	        'phonenumber3'=> 'nullable',
	        'phonenumber4'=> 'nullable',
	        'phonenumber5'=> 'nullable',
	        'phonenumber6'=> 'nullable',
	        'phonenumber7'=> 'nullable',
	        'phonenumber8'=> 'nullable',
	        'phonenumber9'=> 'nullable',
	        'phonenumber10'=> 'nullable',
	        'adviser'=> 'nullable',
	        'date'=> 'nullable',
	        'description'=> 'nullable',
	        'pip'=> 'nullable',
	        'pil'=> 'nullable',
	        'a'=> 'required',
	        'b'=> 'required',
	        'c'=> 'required',
	        'd'=>'required',
	        'e'=> 'required',
	        'f'=> 'required',
	        'overall'=> 'required',
	        'action'=> 'required'
        ]);

        $users = Projects::create($validated_fields);
       	return redirect('/colleges');
    }

    public function edit(Projects $projects){
    	return view ('/admin/projects/edit', compact('projects'));
    }

    public function update(Projects $projects){

    	$validated_fields = request()->validate([
            'college' => 'required',
	        'title'=> 'required',
	        'author1'=> 'required',
	        'author2'=> 'nullable',
	        'author3'=> 'nullable',
	        'author4'=> 'nullable',
	        'author5'=> 'nullable',
	        'author6'=> 'nullable',
	        'author7'=> 'nullable',
	        'author8'=> 'nullable',
	        'author9'=> 'nullable',
	        'author10'=> 'nullable',
	        'email1'=> 'nullable',
	        'email2'=> 'nullable',
	        'email3'=> 'nullable',
	        'email4'=> 'nullable',
	        'email5'=> 'nullable',
	        'email6'=> 'nullable',
	        'email7'=> 'nullable',
	        'email8'=> 'nullable',
	        'email9'=> 'nullable',
	        'email10'=> 'nullable',
	        'phonenumber1'=> 'nullable',
	        'phonenumber2'=> 'nullable',
	        'phonenumber3'=> 'nullable',
	        'phonenumber4'=> 'nullable',
	        'phonenumber5'=> 'nullable',
	        'phonenumber6'=> 'nullable',
	        'phonenumber7'=> 'nullable',
	        'phonenumber8'=> 'nullable',
	        'phonenumber9'=> 'nullable',
	        'phonenumber10'=> 'nullable',
	        'adviser'=> 'nullable',
	        'date'=> 'nullable',
	        'description'=> 'nullable',
	        'pip'=> 'nullable',
	        'pil'=> 'nullable',
	        'a'=> 'required',
	        'b'=> 'required',
	        'c'=> 'required',
	        'd'=>'required',
	        'e'=> 'required',
	        'f'=> 'required',
	        'overall'=> 'required',
	        'action'=> 'required'
        ]);

        $projects->update($validated_fields);
    	return view ('/admin/projects/edit', compact('projects'));
    }

    public function destroy(Projects $projects){
    	$projects->delete();
    	return redirect('/colleges');
    }

    public function search(Request $request){
    	$search = $request->input('search');

    	$projects = Projects::where('title','LIKE',"%{$search}%")->orWhere('college','LIKE',"%{$search}%")->orWhere('author1','LIKE',"%{$search}%")->orWhere('author2','LIKE',"%{$search}%")->orWhere('author3','LIKE',"%{$search}%")->orWhere('author4','LIKE',"%{$search}%")->orWhere('author5','LIKE',"%{$search}%")->orWhere('author6','LIKE',"%{$search}%")->orWhere('adviser','LIKE',"%{$search}%")->orWhere('action','LIKE',"%{$search}%")->orWhere('pip','LIKE',"%{$search}%")->orWhere('pil','LIKE',"%{$search}%")->get();

    	return view('/admin/projects/search', compact('projects'));
    }


    public function date(){
    	$projects = Projects::all()->sortBy('date');
    	return view('/admin/projects/sort', compact('projects'));
    }

    public function title(){
    	$projects = Projects::all()->sortBy('title');
    	return view('/admin/projects/sort', compact('projects'));
    }

    public function col(){
    	$projects = Projects::all()->sortBy('college');
    	return view('/admin/projects/sort', compact('projects'));
    }
}

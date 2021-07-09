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
	        'department'=> 'required',
	        'title'=> 'required',
	        'author1'=> 'required',
	        'author2'=> 'required',
	        'author3'=> 'required',
	        'author4'=> 'required',
	        'author5'=> 'required',
	        'author6'=> 'required',
	        'author7'=> 'required',
	        'author8'=> 'required',
	        'author9'=> 'required',
	        'author10'=> 'required',
	        'email1'=> 'required',
	        'email2'=> 'required',
	        'email3'=> 'required',
	        'email4'=> 'required',
	        'email5'=> 'required',
	        'email6'=> 'required',
	        'email7'=> 'required',
	        'email8'=> 'required',
	        'email9'=> 'required',
	        'email10'=> 'required',
	        'phonenumber1'=> 'required',
	        'phonenumber2'=> 'required',
	        'phonenumber3'=> 'required',
	        'phonenumber4'=> 'required',
	        'phonenumber5'=> 'required',
	        'phonenumber6'=> 'required',
	        'phonenumber7'=> 'required',
	        'phonenumber8'=> 'required',
	        'phonenumber9'=> 'required',
	        'phonenumber10'=> 'required',
	        'adviser'=> 'required',
	        'date'=> 'required',
	        'description'=> 'required',
	        'pip'=> 'required',
	        'pil'=> 'required',
	        'a'=> 'required',
	        'b'=> 'required',
	        'c'=> 'required',
	        'd'=> 'required',
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
	        'department'=> 'required',
	        'title'=> 'required',
	        'author1'=> 'required',
	        'author2'=> 'required',
	        'author3'=> 'required',
	        'author4'=> 'required',
	        'author5'=> 'required',
	        'author6'=> 'required',
	        'author7'=> 'required',
	        'author8'=> 'required',
	        'author9'=> 'required',
	        'author10'=> 'required',
	        'email1'=> 'required',
	        'email2'=> 'required',
	        'email3'=> 'required',
	        'email4'=> 'required',
	        'email5'=> 'required',
	        'email6'=> 'required',
	        'email7'=> 'required',
	        'email8'=> 'required',
	        'email9'=> 'required',
	        'email10'=> 'required',
	        'phonenumber1'=> 'required',
	        'phonenumber2'=> 'required',
	        'phonenumber3'=> 'required',
	        'phonenumber4'=> 'required',
	        'phonenumber5'=> 'required',
	        'phonenumber6'=> 'required',
	        'phonenumber7'=> 'required',
	        'phonenumber8'=> 'required',
	        'phonenumber9'=> 'required',
	        'phonenumber10'=> 'required',
	        'adviser'=> 'required',
	        'date'=> 'required',
	        'description'=> 'required',
	        'pip'=> 'required',
	        'pil'=> 'required',
	        'a'=> 'required',
	        'b'=> 'required',
	        'c'=> 'required',
	        'd'=> 'required',
	        'e'=> 'required',
	        'f'=> 'required',
	        'overall'=> 'required',
	        'action'=> 'required'
        ]);

        $projects->update($validated_fields);
    	return redirect('/colleges');
    }

    public function destroy(Projects $projects){
    	$projects->delete();
    	return redirect('/colleges');
    }

    public function search(Request $request){
    	$search = $request->input('search');

    	$projects = Projects::where('title','LIKE',"%{$search}%")->orWhere('college','LIKE',"%{$search}%")->orWhere('department','LIKE',"%{$search}%")->orWhere('author1','LIKE',"%{$search}%")->orWhere('author2','LIKE',"%{$search}%")->orWhere('author3','LIKE',"%{$search}%")->orWhere('author4','LIKE',"%{$search}%")->orWhere('author5','LIKE',"%{$search}%")->orWhere('author6','LIKE',"%{$search}%")->orWhere('adviser','LIKE',"%{$search}%")->orWhere('action','LIKE',"%{$search}%")->orWhere('pip','LIKE',"%{$search}%")->orWhere('pil','LIKE',"%{$search}%")->get();

    	return view('/admin/projects/search', compact('projects'));
    }


    public function date(){
    	$projects = Projects::all()->sortBy('date');
    	return view('/admin/projects/sort', compact('projects'));;
    }

    public function title(){
    	$projects = Projects::all()->sortBy('title');
    	return view('/admin/projects/sort', compact('projects'));;
    }

    public function col(){
    	$projects = Projects::all()->sortBy('college');
    	return view('/admin/projects/sort', compact('projects'));;
    }
}

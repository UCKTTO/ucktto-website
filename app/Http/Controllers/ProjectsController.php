<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projects;

class ProjectsController extends Controller
{
    
    public function index(){
    	$projects = Projects::all();
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
	        'email1'=> 'required',
	        'email2'=> 'required',
	        'email3'=> 'required',
	        'email4'=> 'required',
	        'email5'=> 'required',
	        'email6'=> 'required',
	        'phonenumber1'=> 'required',
	        'phonenumber2'=> 'required',
	        'phonenumber3'=> 'required',
	        'phonenumber4'=> 'required',
	        'phonenumber5'=> 'required',
	        'phonenumber6'=> 'required',
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
	        'email1'=> 'required',
	        'email2'=> 'required',
	        'email3'=> 'required',
	        'email4'=> 'required',
	        'email5'=> 'required',
	        'email6'=> 'required',
	        'phonenumber1'=> 'required',
	        'phonenumber2'=> 'required',
	        'phonenumber3'=> 'required',
	        'phonenumber4'=> 'required',
	        'phonenumber5'=> 'required',
	        'phonenumber6'=> 'required',
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

}

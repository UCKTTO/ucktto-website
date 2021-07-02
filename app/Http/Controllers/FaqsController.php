<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FAQ;


class FaqsController extends Controller
{
    public function index(){
        $faqs = FAQ::all();
        return view('/admin/faq', compact('faqs'));
    }

    public function store(){

        $validated_fields = request()->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $users = FAQ::create($validated_fields);
       	return redirect('/admin/faq');
    }

    // public function edit(FAQ $faqs){
    // 	return view ('/admin/faqedit', compact('faqs'));
    // }

    // public function update(FAQ $faqs){

    // 	$validated_fields = request()->validate([
    //         'question' => 'required',
    //         'answer' => 'required'
    //     ]);

    //     $faqs->update($validated_fields);
    // 	return redirect('/admin/faq');
    // }

    // public function destroy(FAQ $faqs){
    // 	$faqs->delete();
    // 	return redirect('/admin/faq');
    // }
}

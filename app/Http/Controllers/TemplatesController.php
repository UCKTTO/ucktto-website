<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FAQ;

class TemplatesController extends Controller
{
    public function index(){
    	return view('home');
    }

    public function event1(){
    	return view('events/event1');
    }
    public function event2(){
    	return view('events/event2');
    }
    public function event3(){
    	return view('events/event3');
    }

    public function about(){
    	return view('about');
    }

// services
    public function patent(){
    	return view('services/patent');
    }

    public function copyright(){
    	return view('services/copyright');
    }

    public function trademark(){
    	return view('services/trademark');
    }

    public function industrialDesign(){
    	return view('services/industrialDesign');
    }

    public function utilityModel(){
    	return view('services/utilityModel');
    }

    public function termsPatent(){
        return view('services/terms-patent');
    }

    public function termsid(){
        return view ('services/terms-id');
    }

    public function termsum(){
        return view ('services/terms-um');
    }


    public function application(){
        return view ('services/application');
    }

    public function application_patent(){
        return view ('services/application-patent');
    }

    public function application_id(){
        return view ('services/application-id');
    }    

    public function application_um(){
        return view ('services/application-um');
    }

    // ip policy
    public function policy(){
    	return view('ip-policy/policy');
    }
    public function section1(){
    	return view('ip-policy/section1');
    }
    public function section2(){
    	return view('ip-policy/section2');
    }
    public function section3(){
    	return view('ip-policy/section3');
    }
    public function section6(){
	return view('ip-policy/section6');
    }
    public function section7(){
	return view('ip-policy/section7');
    }
    public function section8(){
	return view('ip-policy/section8');
    }
    public function section9(){
	return view('ip-policy/section9');
    }
    public function section11(){
	return view('ip-policy/section11');
    }
    public function section12(){
	return view('ip-policy/section12');
    }
    public function section13(){
	return view('ip-policy/section13');
    }
    public function ipRef(){
	return view('ip-policy/ip-ref');
    }

    //faq
    public function faq(){
        $faqs = FAQ::all();
        return view('faq', compact('faqs'));
    }

}

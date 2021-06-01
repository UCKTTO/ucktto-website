<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    // ip policy
    public function iptbc(){
    	return view('ip-policy/ip-policy-tb-content');
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
    public function section4(){
    	return view('ip-policy/section4');
    }
    public function section5(){
    	return view('ip-policy/section5');
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
    public function section10(){
	return view('ip-policy/section10');
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
    public function section14(){
	return view('ip-policy/section14');
    }
    public function section15(){
	return view('ip-policy/section15');
    }
    public function section16(){
	return view('ip-policy/section16');
    }
    public function section17(){
	return view('ip-policy/section17');
    }
    public function ipRef(){
	return view('ip-policy/ip-ref');
    }
    

    //ktto policy
    public function kttotbc(){
	return view('ktto-policy/ktto-policy-tb-content');
    }
    public function kttoSection1(){
	return view('ktto-policy/ktto-section1');
    }
    public function kttoSection2(){
	return view('ktto-policy/ktto-section2');
    }
    public function kttoSection3(){
	return view('ktto-policy/ktto-section3');
    }
    public function kttoSection4(){
	return view('ktto-policy/ktto-section4');
    }
    public function kttoSection5(){
	return view('ktto-policy/ktto-section5');
    }
    public function kttoSection6(){
	return view('ktto-policy/ktto-section6');
    }
    public function kttoSection7(){
	return view('ktto-policy/ktto-section7');
    }
    public function kttoSection8(){
	return view('ktto-policy/ktto-section8');
    }
    public function kttoSection9(){
	return view('ktto-policy/ktto-section9');
    }
    public function kttoSection10(){
	return view('ktto-policy/ktto-section10');
    }
    public function kttoSection11(){
	return view('ktto-policy/ktto-section11');
    }
    public function kttoSection12(){
	return view('ktto-policy/ktto-section12');
    }
    public function kttoSection13(){
	return view('ktto-policy/ktto-section13');
    }
    public function kttoSection14(){
	return view('ktto-policy/ktto-section14');
    }
    public function kttoSection15(){
	return view('ktto-policy/ktto-section15');
    }
    public function kttoSection16(){
	return view('ktto-policy/ktto-section16');
    }
        public function kttoSection17(){
	return view('ktto-policy/ktto-section17');
    }
    public function kttoSection18(){
	return view('ktto-policy/ktto-section18');
    }
    public function annexA(){
	return view('ktto-policy/annex-a');
    }
    public function kttoRef(){
	return view('ktto-policy/ktto-ref');
    }

    //faq
    public function faq(){
        return view('faq');
    }
}

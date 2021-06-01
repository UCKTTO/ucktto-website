<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TemplatesController@index');
Route::get('/about', 'TemplatesController@about');

//EVENTS
Route::get('/event1', 'TemplatesController@event1');
Route::get('/event2', 'TemplatesController@event2');
Route::get('/event3', 'TemplatesController@event3');

// services
Route::get('/patent', 'TemplatesController@patent');
Route::get('/copyright', 'TemplatesController@copyright');
Route::get('/trademark', 'TemplatesController@trademark');
Route::get('/industrialDesign', 'TemplatesController@industrialDesign');
Route::get('/utilityModel', 'TemplatesController@utilityModel');
Route::post('/patent', 'FileUploadController@patent');
Route::post('/copyright', 'FileUploadController@copyright');
Route::post('/trademark', 'FileUploadController@trademark');
Route::post('/industrialDesign', 'FileUploadController@industrialDesign');
Route::post('/utilityModel', 'FileUploadController@utilityModel');

// ip policies
Route::get('/ip-policy-tb-content', 'TemplatesController@iptbc');
Route::get('/section1', 'TemplatesController@section1');
Route::get('/section2', 'TemplatesController@section2');
Route::get('/section3', 'TemplatesController@section3');
Route::get('/section4', 'TemplatesController@section4');
Route::get('/section5', 'TemplatesController@section5');
Route::get('/section6', 'TemplatesController@section6');
Route::get('/section7', 'TemplatesController@section7');
Route::get('/section8', 'TemplatesController@section8');
Route::get('/section9', 'TemplatesController@section9');
Route::get('/section10', 'TemplatesController@section10');
Route::get('/section11', 'TemplatesController@section11');
Route::get('/section12', 'TemplatesController@section12');
Route::get('/section13', 'TemplatesController@section13');
Route::get('/section14', 'TemplatesController@section14');
Route::get('/section15', 'TemplatesController@section15');
Route::get('/section16', 'TemplatesController@section16');
Route::get('/section17', 'TemplatesController@section17');
Route::get('/ip-ref', 'TemplatesController@ipRef');

//KTTO POLICY
Route::get('/ktto-policy-tb-content', 'TemplatesController@kttotbc');
Route::get('/ktto-section1', 'TemplatesController@kttoSection1');
Route::get('/ktto-section2', 'TemplatesController@kttoSection2');
Route::get('/ktto-section3', 'TemplatesController@kttoSection3');
Route::get('/ktto-section4', 'TemplatesController@kttoSection4');
Route::get('/ktto-section5', 'TemplatesController@kttoSection5');
Route::get('/ktto-section6', 'TemplatesController@kttoSection6');
Route::get('/ktto-section7', 'TemplatesController@kttoSection7');
Route::get('/ktto-section8', 'TemplatesController@kttoSection8');
Route::get('/ktto-section9', 'TemplatesController@kttoSection9');
Route::get('/ktto-section10', 'TemplatesController@kttoSection10');
Route::get('/ktto-section11', 'TemplatesController@kttoSection11');
Route::get('/ktto-section12', 'TemplatesController@kttoSection12');
Route::get('/ktto-section13', 'TemplatesController@kttoSection13');
Route::get('/ktto-section14', 'TemplatesController@kttoSection14');
Route::get('/ktto-section15', 'TemplatesController@kttoSection15');
Route::get('/ktto-section16', 'TemplatesController@kttoSection16');
Route::get('/ktto-section17', 'TemplatesController@kttoSection17');
Route::get('/ktto-section18', 'TemplatesController@kttoSection18');
Route::get('/annex-a', 'TemplatesController@annexA');
Route::get('/ktto-ref', 'TemplatesController@kttoRef');

//faq
Route::get('/faq', 'TemplatesController@faq');

// admin
Route::get('/admin', 'AuthController@index')->name('login');
Route::post('/admin', 'AuthController@login');
Route::middleware(['auth'])->group(function(){
	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/logout', 'AuthController@logout');
});

//dashboard

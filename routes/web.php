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

Route::get('/terms-patent', 'TemplatesController@termsPatent');
Route::get('/terms-id', 'TemplatesController@termsid');
Route::get('/terms-um', 'TemplatesController@termsum');
Route::get('/application-patent', 'TemplatesController@application_patent');
Route::get('/application-id', 'TemplatesController@application_id');
Route::get('/application-um', 'TemplatesController@application_um');

Route::post('/application-patent', 'TemplatesController@application_patent');
Route::post('/application-id', 'TemplatesController@application_id');
Route::post('/application-um', 'TemplatesController@application_um');

// ip policies
Route::get('/policy', 'TemplatesController@policy');
Route::get('/section1', 'TemplatesController@section1');
Route::get('/section2', 'TemplatesController@section2');
Route::get('/section3', 'TemplatesController@section3');
Route::get('/section6', 'TemplatesController@section6');
Route::get('/section7', 'TemplatesController@section7');
Route::get('/section8', 'TemplatesController@section8');
Route::get('/section9', 'TemplatesController@section9');
Route::get('/section11', 'TemplatesController@section11');
Route::get('/section12', 'TemplatesController@section12');
Route::get('/section13', 'TemplatesController@section13');
Route::get('/ip-ref', 'TemplatesController@ipRef');

//faq
Route::get('/faq', 'TemplatesController@faq');

//contact
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

// admin
Route::get('/admin', 'AuthController@index')->name('login');
Route::post('/admin', 'AuthController@login');
Route::middleware(['auth'])->group(function(){
	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/logout', 'AuthController@logout');

	Route::get('/searchdash', 'FileUploadController@search');
	Route::get('/datedash', 'FileUploadController@date');
	Route::get('/name', 'FileUploadController@name');
	Route::get('/category', 'FileUploadController@category');

	Route::get('/admin/faq', 'FaqsController@index');
	Route::post('/admin/faq', 'FaqsController@store');
	Route::get('/faq/{faqs}', 'FaqsController@show');
	Route::get('/faq/{faqs}/edit', 'FaqsController@edit');
	Route::put('/faq/{faqs}','FaqsController@update');
	Route::delete('/faq/{faqs}','FaqsController@destroy');

	Route::get('/userprof', 'DashboardController@userprof');
	Route::post('userprof', 'DashboardController@storepass');
	Route::get('/userprof/{users}/edit', 'DashboardController@edit');
	Route::put('/userprof/{users}', 'DashboardController@update');

	Route::get('/ipassessment', 'DashboardController@inventory');
	Route::get('/notifications', 'DashboardController@notif');

	Route::get('/metrics','DashboardController@metrics');

	Route::get('/colleges','ProjectsController@index');
	Route::get('/projects/create', 'ProjectsController@create');
	Route::post('/projects', 'ProjectsController@store');
	Route::get('/projects/{projects}', 'ProjectsController@show');
	Route::get('/projects/{projects}/edit', 'ProjectsController@edit');
	Route::put('/projects/{projects}', 'ProjectsController@update');
	Route::delete('/projects/{projects}', 'ProjectsController@destroy');
	Route::any('/search', 'ProjectsController@search');
	Route::get('/date', 'ProjectsController@date');
	Route::get('/title', 'ProjectsController@title');
	Route::get('/col', 'ProjectsController@col');
});



Route::get('/our_backup_database', 'ContactController@our_backup_database')->name('our_backup_database');
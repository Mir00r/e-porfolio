<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
   // return view('welcome');
	return redirect('/auth/login');
});

// this is for image uploading
Route::any('user/store', 'UserController@store');

// this is for find the user name from database
Route::any('user/search', 'UserController@search_user');


Route::any('/view-profile/{provider?}', 'UserController@display_user_profile');

// Login routes...
get('auth/login', 'SessionsController@login');
post('auth/login', 'SessionsController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
//Route::get('auth/logout', 'SessionsController@getLogout');
//Route::get('auth/logout', 'SessionsController@getLogout');

// Registration routes...
get('register', 'RegistrationController@register');
post('register', 'RegistrationController@postRegister');
get('register/confirm/{token}', 'RegistrationController@confirmEmail');

// This is for Sociolite Authentication
Route::get('auth/{provider?}', 'Auth\AuthController@login');

// This is for showing profile, email verification and terms page
Route::resource('/profile_page/index', 'homeController@profile');
Route::resource('/pages/confirmMail', 'homeController@confirmMailAddress');
Route::resource('pages/Terms', 'homeController@terms');

// this is for Dashboard
Route::post('/Dashboard/dashboard', 'homeController@dashboard');



// This routing control project form section
Route::resource('project-test', 'FormController@project');
Route::resource('/form/add-project', 'FormController@addproject');
Route::post('/form/add-project', 'FormController@pstore');
//Route::post('pdelete','FormController@pdestroy');


// This routing control Publication form section
Route::resource('publication', 'FormController@publication');
Route::resource('/form/add-publication', 'FormController@addpublication');
Route::post('/form/add-publication','FormController@publicationstore');


// This routing control Achievement form section
Route::resource('awards', 'FormController@awards');
Route::resource('/form/add-award','FormController@addawards');
Route::post('/form/add-award', 'FormController@awardstore');


// This routing control Certification form section
Route::resource('certification', 'FormController@certification');
Route::resource('/form/add-certification', 'FormController@addcertification');
Route::post('/form/add-certification','FormController@certificationstore');


// This routing control Test Score form section
Route::resource('scores', 'FormController@scores');
Route::resource('/form/add-score', 'FormController@addscore');
Route::post('/form/add-score','FormController@scorestore');


// This routing control Experience form section
Route::resource('experience','FormController@experience');
Route::resource('/form/add-experience','FormController@addexperience');
Route::post('/form/add-experience','homeController@experiencestore');


// This routing control Course form section
Route::resource('courses', 'FormController@courses');
Route::resource('/form/add-courses', 'FormController@addcourse');
Route::post('/form/add-courses', 'FormController@courseStore');


// This routing control Volunteering form section
Route::resource('volunteering','FormController@volunteering');
Route::resource('/form/add-volun-expe', 'FormController@addvolun');
Route::post('/form/add-volun-expe', 'FormController@volunstore');



// This routing control Profile info form section
Route::resource('editprofile', 'FormController@editprofile');
Route::post('editprofile', 'FormController@storeprofile');
Route::resource('/profile_page/index', 'FormController@showprofile');


// This routing control About Me form section
Route::resource('aboutme','FormController@aboutme');
Route::resource('aboutme','FormController@showaboute');
Route::resource('add-aboute','FormController@addaboute');
Route::post('add-aboute','FormController@aboutestore');


// This routing control Competitive form section
Route::resource('/form/add-coding', 'FormController@coding');


// This routing control Blog/Article form section
Route::resource('/Blog/article', 'FormController@blog');

/*Route::resource('/Blog/article','homeController@blog');
Route::resource('/Blog/article','homeController@showblog');
Route::resource('/Blog/add-blog','homeController@addblog');
Route::post('/Blog/add-blog','homeController@storeblog');*/


Route::controllers([
	'auth' => 'Auth\AuthController',
   'password' => 'Auth\PasswordController',
]);

// Send mail testing router from PHP server 
Route::get('test', function(){
	mail('portfoliohub007@gmail.com','Mail Paiso','Test Message');
});

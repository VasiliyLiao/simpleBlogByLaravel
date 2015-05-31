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

// Route::get('/', 'WelcomeController@index');
// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);


Route::get('/',['as' => 'home.index' ,function(){
	$tmp=['img/home-bg.jpg','img/post-bg.jpg','img/contact-bg.jpg','img/about-bg.jpg'];
	$data=[
		'img' => $tmp[rand(0,3)]
	];
 	return view('home.index',$data);
}]);
Route::get('about',['as'=>'about.index',function(){
	return view('about.index');
}]);

Route::get('contact',['as'=>'contact.create',function(){
	return view('contact.create');
}]);
Route::get('random',['as'=>'posts.random',function(){
	$data=[
		'blogTitle' => rand(1,1000000),
		'blogIntr'	=> rand(1,1000000)
	];
	return view('posts.show',$data);
}]);
Route::get('posts/{id}',['as'=>'posts.show',function($id){
	$data=[
		'blogTitle' => $id,
		'blogIntr'	=> rand(1,1000000)
	];
	return view('posts.show',$data);
}])->where(['id'=>'[0-9]+']);
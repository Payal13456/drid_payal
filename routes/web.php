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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',function(){
	if(Auth::check()){
		return redirect('/next-step');
	}else{
		return view('auth.register');
	}
});
Route::get('recruiter/registration',function(){
	if(Auth::check()){
		return redirect('/profile');
	}else{
		return view('recruiter.registration');
	}
});
Route::get('/login',function(){
	if(Auth::check()){
		return redirect('/next-step');
	}else{
		return view('auth.login');
	}
});
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/forget-password',function(){
	if(Auth::check()){
		return redirect('/profile');
	}else{
		return view('auth.passwords.email');
	}
});

Route::post('register','RegisterController@signup')->name('register');
Route::post('login','RegisterController@login')->name('login');

//Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/next-step','Candidate\ProfileController@nextStep');
	Route::post('/next-step-1','Candidate\ProfileController@updateProfileStepOne');
	Route::get('/profile','Candidate\ProfileController@index');
	Route::get('/introduction','Candidate\ProfileController@introduction');
});

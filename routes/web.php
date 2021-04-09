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

Route::get('/login',function(){
	if(Auth::check()){
		return redirect('/next-step');
	}else{
		return view('auth.login');
	}
});

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
// Register recruiter
Route::get('recruiter/registration',function(){
	if(Auth::check()){
		return redirect('/profile');
	}else{
		return view('recruiter.registration');
	}
});
Route::post('recruiter/register','Recruiter\RecruiterController@Register')->name('recruiter.register');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/next-step','Candidate\ProfileController@nextStep');
	Route::post('/next-step-1','Candidate\ProfileController@updateProfileStepOne');
	Route::get('/profile','Candidate\ProfileController@index');
	Route::get('/introduction','Candidate\ProfileController@introduction');
	Route::get('logout', 'Auth\LoginController@logout');
	Route::post('logout', 'Candidate\ProfileController@doLogout');
	Route::post('delete-account', 'Candidate\ProfileController@deleteAccount');

	/* Edit profile */
	Route::post('update-summary', 'Candidate\EditCandidateController@updateSummary');
	Route::post('update-cover-letter', 'Candidate\EditCandidateController@updateCoverLetter');
	Route::post('update-objective', 'Candidate\EditCandidateController@updateObjective');
	Route::post('update-basic-details', 'Candidate\EditCandidateController@updateBasicDetails');
	Route::post('update-pro-exp', 'Candidate\EditCandidateController@updateProExp');
	Route::post('update-internship', 'Candidate\EditCandidateController@updateInternship');
	Route::post('update-projects', 'Candidate\EditCandidateController@updateProjects');
});

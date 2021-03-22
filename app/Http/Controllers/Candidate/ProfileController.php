<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentInfo;
use Auth;

class ProfileController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the candidate introduction page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $user = StudentInfo::find(Auth::user()->id);
       return view('candidate.profile')->with(['user'=>$user]);
    }

    public function introduction()
    {
       $user = StudentInfo::find(Auth::user()->id);
       return view('candidate.introduction')->with(['user'=>$user]);
    }

    public function nextStep(){
        $user = StudentInfo::find(Auth::user()->id);
        // echo "<pre>";print_r($user);die;
       return view('candidate.edit-profile')->with(['user'=>$user]);
    }

    public function updateProfileStepOne(Request $request){
        echo "<pre>";print_r($request);die;
    }
}

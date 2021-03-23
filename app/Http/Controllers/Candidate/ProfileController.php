<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentInfo;
use Auth;
use Session;

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
        // if($request->ajax()){
            $img_path = ''; $cover_path = '';
            if($request->file('profile_img') != ''){
                $request->validate([
                    'profile_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $result = array($request->file('profile_img')->getClientOriginalExtension());
                $file = $request->file('profile_img');
                $files = $file->getClientOriginalName();
                $file->move('assets/img', $files);
                $name = $files;
                $img_path = 'assets/img/'.$files;
            }
            if($request->file('cover_img') != ''){
                $request->validate([
                    'cover_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $result = array($request->file('cover_img')->getClientOriginalExtension());
                $file = $request->file('cover_img');
                $files = $file->getClientOriginalName();
                $file->move('assets/img', $files);
                $name = $files;
                $cover_path = 'assets/img/'.$files;
            }
            // echo $cover_path;die;
            $user = StudentInfo::find(Auth::user()->id);
            if(!empty($user)){
                $user->status = $request->status;
                $user->fname = $request->fname;
                $user->lname = $request->lname;
                $user->profile_img = $img_path;
                $user->cover_img = $cover_path;
                $user->github = $request->github;
                $user->linkedin = $request->linkedin;
                $user->mobile_no = $request->mobile_no;
                $user->prefloc = $request->prefloc;
                $user->prefroles = $request->prefroles;
                if($user->save()){
                    Session::flash('success', 'Successfully updated!');
                    return redirect('/introduction');
                }else{
                    Session::flash('danger', 'Something went wrong, Try again!');
                    return redirect()->back();
                }
            }else{
                  Session::flash('danger', 'Session Expired , Please login again!');
                    return redirect()->back();
            }
        // }
    }
}

<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentInfo;
use App\Models\familyInfo;
use App\Models\ProfessionalExperience;
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
       $proExp = ProfessionalExperience::where('user_id',Auth::user()->id)->where('type','job')->get();
       $familyInfo = familyInfo::where('student_id',Auth::user()->id)->first();
       return view('candidate.profile')->with(['user'=>$user,'familyInfo'=>$familyInfo,'proExp'=>$proExp]);
    }

    public function introduction()
    {
       $user = StudentInfo::find(Auth::user()->id);
       $familyInfo = familyInfo::where('student_id',Auth::user()->id)->first();
       $proExp = ProfessionalExperience::where('user_id',Auth::user()->id)->where('type','job')->get();
       $internship = ProfessionalExperience::where('user_id',Auth::user()->id)->where('type','intern')->get();
       return view('candidate.introduction')->with(['user'=>$user,'familyInfo'=>$familyInfo,'proExp'=>$proExp,'internship'=>$internship]);
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
                $user->job_title = $request->prefroles;
                $user->birth_date = $request->birth_date;
                $user->summary = $request->summary;
                if($user->save()){
                    $familyInfo = ['mother_name'=>$request->mother_name,
                                'father_name' => $request->father_name,
                                'mother_occupation' => $request->mother_occupation,
                                'father_occupation'=>$request->father_occupation,
                                'address' =>$request->address,
                                'city'=>$request->city,
                                'country'=>$request->country,
                                'state'=>$request->state,
                                'student_id'=>Auth::user()->id];
                    $familyCheck = familyInfo::where('student_id',Auth::user()->id)->first();
                    if(empty($familyCheck)){
                        familyInfo::insert($familyInfo);
                    }else{
                        familyInfo::update($familyInfo);
                    }

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

    public function deleteAccount(Request $request){
        // echo "Here";die;
        $user = StudentInfo::find(Auth::user()->id);
        if(!empty($user)){
            // echo "here";die;
            $user->is_delete = 1;
            $user->update();
            Auth::logout(); // log the admin out of our application
            $request->session()->flush();
            $request->session()->regenerate();
            // Session::flash('danger', 'User Deleted Successfully!!');
            return redirect('/');
        }else{
            Session::flash('danger', 'User details not found!');
            return redirect()->back();
        }
    }

    public function doLogout(Request $request) {
        Auth::logout(); // log the admin out of our application
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');
    }
}

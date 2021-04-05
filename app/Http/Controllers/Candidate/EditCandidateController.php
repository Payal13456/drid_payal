<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentInfo;
use Auth;
use Session;

class EditCandidateController extends Controller
{
    public function updateSummary(Request $request){
    	$user = StudentInfo::find(Auth::user()->id);
    	if(!empty($user)){
    		$user->summary = $request->summary;
    		$user->update();
    		Session::flash('success', 'Summary Updated!');
    		return redirect()->back();
    	}
    	Session::flash('danger', 'User details not found!');
    	return redirect()->back();
    }
    public function updateObjective(Request $request){
    	$user = StudentInfo::find(Auth::user()->id);
    	if(!empty($user)){
    		$user->objective = $request->objective;
    		$user->update();
    		Session::flash('success', 'Objective Updated!');
    		return redirect()->back();
    	}
    	Session::flash('danger', 'User details not found!');
    	return redirect()->back();
    }

    public function updateCoverLetter(Request $request){
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

        $user = StudentInfo::find(Auth::user()->id);
    	if(!empty($user)){
    		$user->cover_img = $cover_path;
    		$user->update();
    		Session::flash('success', 'Cover Letter Updated!');
    		return redirect()->back();
    	}
    	Session::flash('danger', 'User details not found!');
    	return redirect()->back();
    }

    public function updateBasicDetails(Request $request){
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
            // echo $cover_path;die;
            $user = StudentInfo::find(Auth::user()->id);
            if(!empty($user)){
                $user->status = $request->status;
                $user->fname = $request->fname;
                $user->lname = $request->lname;
                if($img_path != ''){
                	$user->profile_img = $img_path;
                }
                $user->github = $request->github;
                $user->linkedin = $request->linkedin;
                $user->mobile_no = $request->mobile_no;
                $user->prefloc = $request->prefloc;
                $user->job_title = $request->prefroles;
                if($user->save()){
                    Session::flash('success', 'Basic Details Updated!');
                    return redirect()->back();
                }else{
                    Session::flash('danger', 'Something went wrong, Try again!');
                    return redirect()->back();
                }
            }else{
                  Session::flash('danger', 'Session Expired , Please login again!');
                    return redirect()->back();
            }
    }
}

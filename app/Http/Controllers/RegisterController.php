<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentInfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Session;
use Auth;

class RegisterController extends Controller
{
	/* Candidate / Recruiter Registration */
    public function signup(Request $request){
    	try{
    		$message = "default";
    		$check = StudentInfo::where('email',$request->email)->first();
            if(!empty($check)){
                $message = "Email Already exist!!";
                Session::flash('danger', $message);
                return redirect()->back();
            }
            $data = ['fname'=>$request->first_name,
        		'lname' => $request->last_name,
        		'mobile_no' => $request->mobile_number,
        		'email' => $request->email,
        		'password' => $request->create_password,
        		'marital_status' => $request->martial_status,
        		'gender' => $request->Gender];
    		/* Validate Registration fields */
    		$validate = Validator::make($data, [
	            'name' => ['required', 'string', 'max:255'],
	            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
	            'password' => ['required', 'string', 'min:8'],
	            'mobile_no' => ['required','min:10'],
	            'marital_status' => ['required','string'],
	            'gender' => ['required','string']
	        ]);
    		//echo $request->optradio;die;
	        if($validate){
    			$studentInfo = ['fname'=>$request->first_name,
	        		'lname' => $request->last_name,
	        		'mobile_no' => $request->mobile_number,
	        		'email' => $request->email,
	        		'password' => Hash::make($request->create_password),
	        		'marital_status' => $request->martial_status,
	        		'gender' => $request->Gender,
	        		'slug' => $request->first_name.'-'.$request->last_name
	        	];
	        	//echo '<pre>';print_r($studentInfo);die;
	        	$user = StudentInfo::insert($studentInfo);
	        	//echo '<pre>';print_r($user);die;
	        	$message = "Successfully Registered!!";
                Session::flash('danger', $message);
                $auth = Auth::attempt($data);
                return redirect('/next-step');
	        }else{
	        	$message = "Something went wrong, Please try again!";
                Session::flash('danger', $message);
                return redirect()->back();
	        }

	        //echo $message;die;
    	}catch (Exception $e) {
    		echo $e->getMessage;die;
            return $e->getMessage();
        }
    }

    public function login(Request $request){
    	//echo "here";die;
		$rules = array('email'=> 'required', 'password'=>'required');
		$data = [
    		'email' => $request->email_id,
    		'password' => $request->password];
        $validate = Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']
        ]);
        if($validate){
        	//echo $request->optradio;die;
        	if($request->optradio == 'candidate'){
	            $auth = Auth::attempt($data);
	            if(!$auth){
	                $message = "Invalid login credentials!";
	                Session::flash('danger', $message);
	                return redirect()->back();
	            }
	            return redirect('/profile');
	        }else{
	        	return redirect()->back();
	        }
        }else{
        	$message = "Something went wrong, Please try again!";
            Session::flash('danger', $message);
            return redirect()->back();
        }
	}

}

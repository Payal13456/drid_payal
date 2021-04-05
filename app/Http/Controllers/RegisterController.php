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
                Session::flash('success',$message);
                $auth = Auth::attempt($data);
                if($auth){
                    return redirect('/next-step');    
                }
                return redirect()->back();
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
    		'email' => $request->email,
    		'password' => $request->password
        ];
        $validate = Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']
        ]);
        if($validate){
        	// echo $request->optradio;die;
        	if($request->optradio == 'candidate'){
	            $auth = Auth::attempt($data);
                // echo '<pre>';print_r($data);die;

	            if($auth){
                    // echo '<pre>';print_r(Auth::user()->is_delete);die;
                    if(Auth::user()->is_delete == 1){
                        // echo "here";die;
                        Auth::logout(); // log the admin out of our application
                        $request->session()->flush();
                        $request->session()->regenerate();
                        $message = "User has been deleted!!";
                        Session::flash('danger', $message);
                        return redirect()->back();
                    }
                    Session::flash('success','Logged in Successfully!');
                    return redirect('/introduction');
	            }else{
                    $message = "Invalid login credentials!";
                    Session::flash('danger', $message);
                    return redirect()->back();
                }
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

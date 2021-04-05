<?php

namespace App\Http\Controllers\Recruiter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentInfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\Company;

use Session;
use Auth;

class RecruiterController extends Controller
{
    //

    //Register
	public function Register(Request $request)
	{
		if($request->isMethod('post')){
			# code...
			$validator =  Validator::make($request->all(),[
			'company_name' => 'required',
			'company_email' => 'required|email|unique:companies',
			'password' => 'required',
			]);

			if($validator->fails())
			{
				//return redirect()->back()->withErrors($validator)->withInput();
				return response()->json(['success'=>false,'message'=>$validator->errors()->all()]);
			}

			$data_input = $request->all();
			// echo json_encode($data_input);die;
			$data_input['password']     =  bcrypt($data_input['password']);
			$user = new Company();
	        $user->fill($data_input);
	        $user->save();
	        //======== candidate stores ======
	      	return response()->json([
	      		'success'=>true,
	      		'message'=>['register successfully please verify your email address'],
	      		'data'=>[
	      			'redirect'=>'login',
	      		]
	      	]);
		}
	}
     
}

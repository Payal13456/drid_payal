@extends('layouts.apprecruiter')
@section('content')
<div class="login-body">
	<nav class="navbar navbar-expand-lg extra-padding">
        <a href="{{url('/')}}" class="logo-css">
            <img class="img-fluid navbar-brand laptop-logo" src="{{ url('assets/img/logo.png')}}" width="150">
            <img class="img-fluid navbar-brand mobile-logo" src="{{ url('assets/img/logo-white.png')}}" width="130">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <img class="img-fluid" src="{{ url('assets/img/icon/bar-menu-img.png')}}">
        </span>
        </button>
        <div class="collapse navbar-collapse navbar-collapse-custom " id="navbarNav">
            <ul class="navbar-nav navbar-custom ml-auto">
                <li class="nav-item list-unstyled custom-border mr-3">
                    <a class="nav-link animated-nav" href="#">Find a Job</a>
                </li>
                <li class="nav-item list-unstyled custom-border mr-3">
                    <a class="nav-link animated-nav" href="#">Upload Resume</a>
                </li>
                <li class="nav-item list-unstyled custom-border mr-3">
                    <a class="nav-link animated-nav" href="#">Post a Job</a>
                </li>
                <li class="nav-item list-unstyled hover-custom">
                    <a class="nav-link login-signup-btn py-2 px-4 text-white text-center" href="{{url('login')}}">Login</a>
                </li>
            </ul>
        </div>
    </nav>
	<!-- nav end -->
	<div class="container">
		<div class="row">
			<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12 mx-auto my-60">
				<div class="p-80 login-background">
					<div class="pb-4">
						<h5 class="font-35 font-weight-bold">Recruiter Register</h5>
					</div>
					<div class="">
						<!-- <p class="text-medium font-20 text-dark ">Who are you?</p>
						<div class="form-check-inline pb-3 pb-xl pb-lg-5 pb-md-3 mr-3">
							<input type="radio" name="optradio" id="candidate" value="" class="form-check-input">
							<label class="form-check-label" for="candidate"> Candidate </label>
						</div>
						<div class="form-check-inline pb-3 pb-xl pb-lg-5 pb-md-3 mr-3">
							<input type="radio" name="optradio" id="recruiter" value="" class="form-check-input">
							<label class="form-check-label" for="recruiter"> Recruiter </label>
						</div>
						<div class="form-check-inline pb-3 pb-xl pb-lg-5 pb-md-3 mr-3">
							<input type="radio" name="optradio" id="consultant" value="" class="form-check-input">
							<label class="form-check-label" for="consultant"> Consultant </label>
						</div> -->
						 <p class="text-medium font-15 text-dark ">If you are Candidate - <a href="{{url('register')}}">Signup</a></p>
					</div>
					<div class="">
						<p class="text-medium font-20">Fill the form</p>
						<form class="ajaxformsubmit" method="post" action="{{route('recruiter.register')}}">
							@csrf
							<div class="form-group mb-4">
								<input type="text" name="company_name" class="form-control form-custom" id="company_name" required>
								<label class="form-control-placeholder" for="company_name">Company name</label>
							</div>
							<div class="form-group mb-4">
								<input type="text" name="company_email" class="form-control form-custom" id="company_email" required>
								<label class="form-control-placeholder" for="company_email">Company email</label>
							</div>
							<div class="form-group mb-4">
								<input type="text" name="company_contact" class="form-control form-custom" id="company_contact" required>
								<label class="form-control-placeholder" for="company_contact">Company contact</label>
							</div>
							<div class="form-group mb-4">
								<input type="text" name="company_website" class="form-control form-custom" id="company_website" required>
								<label class="form-control-placeholder" for="company_website">Company website URL</label>
							</div>
							<div class="form-group">
								<select class="form-control form-custom classic" id="user_type" name="user_type">
									<option>Select Company Type</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>
							<div class="form-group">
								<select class="form-control form-custom classic" id="com_state" name="com_state">
									<option>Select State</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>
							<div class="form-group">
								<select class="form-control form-custom classic" id="com_city" name="com_city">
									<option>Select City</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>
							<div class="form-group mb-4">
								<input type="Password" name="password" class="form-control form-custom" id="password" required>
								<label class="form-control-placeholder" for="password">Create password</label>
							</div>
							<div class="form-group mb-4">
								<input type="password" name="" class="form-control form-custom" id="confirm_password" required>
								<label class="form-control-placeholder" for="confirm_password">Confirm password</label>
							</div>
							<div class="clearfix">
								<div class="form-check float-left py-4">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label text-primary longin-label" for="exampleCheck1">Accept Terms & Conditions</label>
								</div>
								<div class="float-right py-2 register-blue-btn">
									<button type="submit" class="btn blue-btn text-white">Register</button>
								</div>
							</div>
							<div class="clearfix">
								<div class="float-right mt-3 register-blue-btn">
									<p>Already have an account? <a class="register-text text-decoration-none" href="{{url('login')}}">Log In</a></p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

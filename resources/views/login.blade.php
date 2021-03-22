@extends('layouts.app')

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
					<a class="nav-link login-signup-btn py-2 px-4 text-white text-center" href="{{url('register')}}">Signup</a>
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
						<h5 class="font-35 font-weight-bold">Login</h5>
					</div>
					<div class="">
						<p class="text-medium font-20 text-dark ">Who are you?</p>
						<div class="form-check-inline pb-5 mr-3">
							<input type="radio" class="form-check-input" name="optradio" id="candidate" value="">
							<label class="form-check-label" for="candidate"> Candidate </label>
						</div>
						<div class="form-check-inline pb-5 mr-3">
							<input type="radio" class="form-check-input" name="optradio" id="recruiter" value="">
							<label class="form-check-label" for="recruiter"> Recruiter </label>
						</div>
					</div>
					<div class="">
						<p class="text-medium font-20">Enter your email and password</p>
						<form>
							<div class="form-group mb-4">
								<input type="text" name="email_id" class="form-control form-custom" id="email_id" required>
								<label class="form-control-placeholder" for="email_id">Enter email</label>
							</div>
							<div class="form-group mb-4">
								<input type="password" name="password" class="form-control form-custom" id="password" required>
								<label class="form-control-placeholder" for="password">Password</label>
							</div>
							<div class="clearfix">
								<div class="form-check float-left py-4">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label longin-label" for="exampleCheck1">Keep me logged in</label>
								</div>
								<div class="float-right py-2">
									<button type="submit" class="btn blue-btn text-white">Submit</button>
								</div>
							</div>
							<div class="clearfix">
								<div class="float-right mt-3">
									<p>Don’t have an account? <a class="register-text text-decoration-none" href="register.html">Register</a></p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
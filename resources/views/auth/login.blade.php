@extends('layouts.app')
@section('style')
<link href="{!! asset('assets/css/parsley.css') !!}" rel="stylesheet" type="text/css" />
<style type="text/css">
    .parsley-required{
        list-style: none;
        color: #f28484;
    }
</style>
@stop
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

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
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has($msg))
                            <div class="alert alert-{{ $msg }}">{{ Session::get($msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>
                        @endif
                    @endforeach
                    <form method="POST" action="{{ route('login') }}" id="login_form">
                        @csrf
                        <div class="">
                            <p class="text-medium font-20 text-dark ">Who are you?</p>
                            <div class="form-check-inline pb-5 mr-3">
                                <input type="radio" class="form-check-input" name="optradio" id="candidate" value="candidate" checked="checked" >
                                <label class="form-check-label" for="candidate"> Candidate </label>
                            </div>
                            <div class="form-check-inline pb-5 mr-3">
                                <input type="radio" class="form-check-input" name="optradio" id="recruiter" value="recruiter">
                                <label class="form-check-label" for="recruiter"> Recruiter </label>
                            </div>
                        </div>
                        <div class="">
                            <p class="text-medium font-20">Enter your email and password</p>
                                <div class="form-group mb-4">
                                    <input id="email" type="email" class="form-control form-custom @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" data-parsley-required="true" autocomplete="email" autofocus>
                                    <label class="form-control-placeholder" for="email_id">Enter email</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <input id="password" type="password" class="form-control form-custom @error('password') is-invalid @enderror" name="password" data-parsley-required="true" autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label class="form-control-placeholder" for="password">Password</label>
                                </div>
                                <div class="clearfix">
                                    <div class="form-check float-left py-4">
                                        <input class="form-check-input" type="checkbox" name="remember" id="exampleCheck1" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label longin-label" for="exampleCheck1">Keep me logged in</label>
                                    </div>
                                    <div class="float-right py-2">
                                        <button type="submit" class="btn blue-btn text-white">Submit</button>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="float-left mt-3">
                                        <p>Don’t have an account? <a class="register-text text-decoration-none" href="{{url('register')}}">Register</a></p>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('assets/js/parsley.js') }}"></script>
<script type="text/javascript">
     $('#login_form').parsley();
</script>
@stop
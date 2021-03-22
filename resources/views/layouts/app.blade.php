<!DOCTYPE html>
<html>
	<head>
		<title>Drid.in</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<!-- offline-link -->
		<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('assets/fonts/font.css')}}">
		<!-- offline-link -->
		<link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<!-- font-link -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		
		<!-- offline-link -->
		<!--owl carousel links -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
		
		 @yield('style')
		<!--owl carousel links end -->
	</head>
	<body>
		 @yield('content')
		 @if(!(\Request::is("next-step")))
	         @include('includes.footer')
	     @endif
		
		 <!-- font-link -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>     -->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<!-- offline-link -->
		<script src="{{url('assets/js/bootstrap.bundle.js')}}"></script>
		<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
		  @yield('scripts')

	</body>
</html>
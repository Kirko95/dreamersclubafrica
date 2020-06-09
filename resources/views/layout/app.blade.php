<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dreamers Club Africa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/parsley.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/calendar.css') }}">
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/css/uikit.min.css" />

	{{-- Calendar CSS --}}
	<link href="{{ asset('assets/calendar/packages/core/main.css') }}" rel='stylesheet' />
	<link href="{{ asset('assets/calendar/packages/daygrid/main.css') }}" rel='stylesheet' />
	<script src="{{ asset('assets/calendar/packages/core/main.js')}}"></script>
	<script src="{{ asset('assets/calendar/packages/interaction/main.js')}}"></script>
	<script src="{{ asset('assets/calendar/packages/daygrid/main.js')}}"></script>

	<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

</head>

<body>

    @include('components.header')
    @include('components.nav')

    @yield('content')

    @include('components.footer')

    <!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit-icons.min.js"></script>
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/aos.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
	<script src="{{ asset('assets/js/mine.js') }}"></script>
	<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
	<script src="{{ asset('assets/js/parsley.min.js') }}"></script>

</body>

</html>
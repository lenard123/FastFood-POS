<!DOCTYPE html>
<html lang="{{ config("app.locale") }}">
<head>
	<title>{{ config('app.name') }} {{ isset($title) ? "| $title" : "" }}</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Lenard Mangay-ayam"/>

	<!-- CSS Reset -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
	<!-- Fontawesome -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}"/>	
	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	{{-- handle jquery version --}}
	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
	<!-- Popper -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" ></script>
	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" ></script>

	<!-- Custom Css and Js -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
	<script src="{{ asset('js/app.js') }}" defer=""></script>

    {{ $style ?? '' }}

</head>
<body class="{{ $body_class ?? '' }}" id="app">

{{ $slot }}
	
</body>
</html>
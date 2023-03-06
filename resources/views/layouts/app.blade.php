<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pembayaran SPP</title>
	@include('cdn.mdb-css')
	<link rel="icon" href="{{asset('storage/img/smknekat-logo.png')}}" type="icon">	
	<link rel="stylesheet" type="text/css"	href="/css/style.css">
</head>
<body>
	
	@include('layouts.navbar')
	
	<main>
		@yield('content')	
	</main>
	<footer>
		@include('layouts.footer')
	</footer>
	@include('cdn.mdb-js')
</body>
</html>
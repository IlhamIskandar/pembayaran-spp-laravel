<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Pembayaran SPP</title>
	@include('cdn.mdb-css')
	<link rel="stylesheet" type="text/css"	href="/css/style.css">
</head>
<body>
	@include('admin.layouts.navbar')
	<main style="margin-top: 90px;">
		@yield('content')	
	</main>
	<footer>
		@include('admin.layouts.footer')
	</footer>
	@include('cdn.mdb-js')
</body>
</html>
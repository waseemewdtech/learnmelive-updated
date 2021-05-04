<!DOCTYPE html>
<html>
<head>
	@include('includes.auth.head')
	@yield('extra-css')
</head>
<body >
	@yield('content')
	
	@yield('footer')

	
	@yield('extra-script')
</body>
</html>
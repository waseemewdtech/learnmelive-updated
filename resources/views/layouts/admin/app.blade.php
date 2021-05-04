<!DOCTYPE html>
<html>
<head>
	@include('includes.admin.head')
	@yield('extra-css')
</head>
<body  class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		@include('includes.admin.header')
		<div class="content-wrapper">
            @yield('content')
		</div>
    </div>
	
	@yield('footer')

	@include('includes.admin.script')

	@yield('extra-script')
</body>
</html>
<html>
	<head>
	<title>Wang-Project</title>
	<script type = "text/javascript" src = "{{asset('js/base/jquery1.11.2.min.js')}}"></script>
	</head>

<body>
	<div id = "header">
		@include('partials.header')
	</div>
	<div id = "gallery"></div>
	
	<div id = "content">
		@yield('content')
	</div>
		
	<div id = "footer">
		@include('partials.footer')
	</div>
</body>

</html>
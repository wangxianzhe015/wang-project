<html>
	<head>
	<title>Wang-Project</title>

	</head>

<body>
	<div id = "header">
		@include('header')
	</div>
	<div id = "gallery"></div>
	
	<div id = "content">
		@yield('content')
	</div>
		
	<div id = "footer">
		@include('footer')
	</div>
</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('layouts/head')
	<title>Search</title>
</head>
<body>
	<div class="container-fluid">
		<div class="entire-page">
			<div class="search">
				@include('layouts/search')
			</div>			
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
	<title></title>
</head>
<body>
	<div class="container">
		<br/>
		@include('flash::message')
			@if($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div><br/>
			@endif		
		@yield('content')
	</div>
</body>
</html>
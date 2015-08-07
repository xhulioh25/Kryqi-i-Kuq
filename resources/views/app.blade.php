<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kryqi I Kuq</title>

	<link href="/css/app.css" rel="stylesheet">

	<!-- Fonts -->
	<link href="{{asset('Content/bootstrap.css')}}" rel="stylesheet" />
	{{--<link href="{{asset('Content/custom.css')}}" rel="stylesheet" />--}}
	<link href="{{asset('Content/font-awesome.min.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="{{asset('Content/select2.min.css')}}"/>

	<script src="{{asset('Scripts/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('Scripts/jquery-ui-1.11.4.min.js')}}"></script>
	<script src="{{asset('Scripts/bootstrap.min.js')}}"></script>
	<script src="{{asset('Scripts/select2.min.js')}}"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Kryqi I Kuq</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<li><a href="/rregjistrim">Rregjistrimet</a></li>
						<li><a href="/dega">Deget</a></li>
						<li><a href="/programi">Programet</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script>
		var selects = document.getElementsByTagName('select');
		for (i=0; i < selects.length; i++){
			var id = selects[i].id;
			$("#"+id+"").select2();

		}
		$('.tagging').select2({
			tags: true,
			placeholder: 'Zgjidh nje opsion ose shto te ri'
		})

	</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@yield('aimeos_header')

	<title>E-commerce alimentaire</title>

	@yield('aimeos_styles')

	<link type="text/css" rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,300'>
	<link type="text/css" rel="stylesheet" href="/css/app.css">

</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-light">
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item navbar-text"><a class="nav-link" href="/">Accueil</a></li>
				@if (Auth::guest())
					<li class="nav-item navbar-text"><a class="nav-link" href="/login">Se connecter</a></li>
					<li class="nav-item navbar-text"><a class="nav-link" href="/register">Créer un compte</a></li>
				@else
					<li class="nav-item navbar-text dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ route('aimeos_shop_account',['site'=>Route::current()->parameter('site','default'),'locale'=>Route::current()->parameter('locale','en'),'currency'=>Route::current()->parameter('currency','EUR')]) }}" title="Profile">Mon compte</a></li>
							<li><form id="logout" action="/logout" method="POST">{{csrf_field()}}</form><a href="javascript: document.getElementById('logout').submit();">Se déconnecter</a></li>
						</ul>
					</li>
				@endif
			</ul>
			@yield('aimeos_head')
		</div>
	</nav>
    <div class="container">
		@yield('aimeos_nav')
		@yield('aimeos_stage')
		@yield('aimeos_body')
		@yield('aimeos_aside')
		@yield('content')
	</div>

	<!-- Scripts -->
	<script type="text/javascript" src="/js/app.js"></script>

	@yield('aimeos_scripts')

	</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
		.header{
			width: 100%;
			height: 5%;
			position: top right;
			text-align: center;
			font-size: 50px;
		}

		.footer{
			position: bottom center;
			width: 100%;
			text-align: left;
			font-size: 10px;
			border: 1px solid black;
		}
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet wellness centar</title>
</head>
<body>
	<div class="header">
		<div class="jumbotron bg-light">
			<div class="container" style="height=10%">
				<div style="text-align:right; font-size:15px">
					@guest
					<a href="/login" >Prijava</a>
					<a href="/register" >Registracija</a>
					@else
					<div class="mt-3 space-y-1">
						<!-- Authentication -->
						<form method="POST" action="{{ route('logout') }}">
							@csrf

							<x-responsive-nav-link :href="route('logout')"
									onclick="event.preventDefault();
												this.closest('form').submit();">
								{{ __('Log Out') }}
							</x-responsive-nav-link>
						</form>
					</div>
					@endif
				</div>
				<div style="text-align:center; font-size:30px; height=10%">
					Pet wellness centar
				</div>

				<!-- Navigation Bar -->
				<nav class="navbar navbar-expand-lg  navbar-light bg-light" style="font-size:15px">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="/home">Početna <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/informacije">O nama</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/djelatnosti">Djelatnosti</a>
					</li>

					@auth
						@if(Auth::user()->name === 'admin')
							<li class="nav-item">
								<a class="nav-link" href="/add-news-form">Kreiraj novost</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/profil">Povijest tretmana</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/pregledi">Pregled narudžbi</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/klijenti">Klijenti</a>
							</li>
						@else
							<li class="nav-item">
								<a class="nav-link" href="/pregledi">Pregledi</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/profil">Vaš profil</a>
							</li>
						@endif
					@endauth
					</ul>
				</div>
				</nav>
			</div>
		</div>
    </div>

    @yield('content')

	<div class="footer">
		Copyright Ivana Tus
	</div>
   	
</body>
</html>
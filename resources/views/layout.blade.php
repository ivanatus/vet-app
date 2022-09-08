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
            background-color: #B7C1C8;
            padding-top: 1em;
			color: #334c52;
		}
    </style>
	<script src="{{ asset('js/app.js') }}" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet wellness centar</title>
</head>
<body style="background-color:#D0D7DC; color: #334c52; font-family: Sans-serif, verdana;">
	<div class="header">
		<div class="container">
				<div style="text-align:right; font-size:15px; color: black">
					@guest
					<a href="/login" style = "color: #334c52">Prijava</a> |
					<a href="/register" style = "color: #334c52">Registracija</a>
					@else
					<div class="mt-3 space-y-1" style = "color: #334c52">
						<!-- Authentication -->
						<form method="POST" action="{{ route('logout') }}" style = "color: #334c52">
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
				<div style="text-align:center; font-size:35px; height=10%; font-family:Times New Roman">
					PET WELLNESS CENTAR
				</div>

				<!-- Navigation Bar -->
				<nav class="navbar navbar-expand-lg  navbar-light bg-#76a5b0" style="font-size:15px">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="/home">Početna</a>
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

    @yield('content')
   	
	<div id='footer'></div>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style type="text/css">
            .body{
                background-color: #abe0ed;
            }
            .page-conatiner{
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                background-color: #abe0ed;
            }
            .content-wrap{
                flex:1;
                background-color: #abe0ed;
            }
            .header{
                width: 100%;
                height: 5%;
                position: top right;
                text-align: center;
                font-size: 50px;
                background-color: #abe0ed;
                padding-top: 1em;
		    }
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body>
	<div class="header">
		<div>
			<div class="container" style="height=10%">

				<div style="text-align:center; font-size:30px; height=10%; color: #3b4547; font-family: monospace;">
					Pet wellness centar
				</div>

				<!-- Navigation Bar -->
				<nav class="navbar navbar-expand-lg  navbar-light bg-#abe0ed" style="font-size:15px">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="/home">Početna</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/informacije">O nama</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/djelatnosti">Djelatnosti</a>
					</li>
					</ul>
				</div>
				</nav>
			</div>
		</div>
    </div>

        <div className="page-container">
            <div className="content-wrap">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean est tellus, tincidunt a metus nec, dignissim porta ex. Vivamus in lectus dui. In facilisis lectus id tellus malesuada molestie. Phasellus semper mi vitae rutrum auctor. Cras eget neque at nulla tincidunt sollicitudin. Ut ullamcorper faucibus fringilla. Phasellus finibus tincidunt rhoncus. Morbi non viverra magna. Suspendisse a tellus et enim tincidunt porttitor. In non nulla dapibus, tempor diam quis, dapibus ante. Donec vulputate magna ac urna vestibulum, sit amet pulvinar magna hendrerit. Duis id vehicula neque, id tincidunt neque. Praesent porttitor iaculis cursus. Maecenas sit amet dui in sem pretium interdum. In in ipsum ac orci tincidunt ullamcorper. Sed rhoncus est nec velit laoreet euismod.

Nam congue bibendum faucibus. Vivamus tempor lorem ac nisi placerat facilisis. Etiam augue tellus, ultricies blandit arcu sed, interdum dictum libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec a fringilla nisi. Aenean sem dui, mattis ut volutpat sit amet, porttitor quis massa. Maecenas non elit nec massa convallis ultrices in nec lectus. Duis iaculis massa convallis enim suscipit iaculis. Vestibulum massa felis, gravida a lectus vitae, luctus scelerisque dui.

Praesent accumsan, dolor ut condimentum lacinia, velit tortor sollicitudin enim, ut accumsan metus diam vel arcu. Quisque imperdiet mattis libero, non pellentesque metus posuere non. Suspendisse lobortis tortor libero, et commodo enim cursus vel. Donec eu facilisis nibh. Pellentesque eu ipsum vestibulum, condimentum elit et, condimentum nulla. Quisque eleifend, elit vitae varius luctus, mauris lorem interdum elit, sed molestie nibh elit sit amet augue. Integer porta in ligula quis molestie. Pellentesque commodo dignissim orci, sit amet gravida mi iaculis vel. Suspendisse ultricies pretium fringilla. Fusce eu leo feugiat sapien tristique aliquet non sit amet est.

Mauris imperdiet maximus urna, condimentum interdum tellus vehicula ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Proin in augue eu arcu tempor ultricies. Mauris ultricies est quis neque molestie, at rutrum lacus sagittis. Aenean quis ante finibus, malesuada magna sed, imperdiet magna. Quisque luctus lacinia justo, pretium tincidunt magna scelerisque sed.

Vivamus felis tortor, volutpat at fringilla malesuada, rutrum eget nisl. Pellentesque neque velit, faucibus commodo neque vitae, imperdiet volutpat arcu. Nulla eu lobortis sem. Donec non diam eget velit hendrerit elementum et sit amet mauris. Cras pulvinar risus nec sapien venenatis finibus. Nam faucibus sit amet nisi id rhoncus. Fusce et magna elit. Maecenas accumsan lacus et viverra elementum.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean est tellus, tincidunt a metus nec, dignissim porta ex. Vivamus in lectus dui. In facilisis lectus id tellus malesuada molestie. Phasellus semper mi vitae rutrum auctor. Cras eget neque at nulla tincidunt sollicitudin. Ut ullamcorper faucibus fringilla. Phasellus finibus tincidunt rhoncus. Morbi non viverra magna. Suspendisse a tellus et enim tincidunt porttitor. In non nulla dapibus, tempor diam quis, dapibus ante. Donec vulputate magna ac urna vestibulum, sit amet pulvinar magna hendrerit. Duis id vehicula neque, id tincidunt neque. Praesent porttitor iaculis cursus. Maecenas sit amet dui in sem pretium interdum. In in ipsum ac orci tincidunt ullamcorper. Sed rhoncus est nec velit laoreet euismod. Nam congue bibendum faucibus. Vivamus tempor lorem ac nisi placerat facilisis. Etiam augue tellus, ultricies blandit arcu sed, interdum dictum libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec a fringilla nisi. Aenean sem dui, mattis ut volutpat sit amet, porttitor quis massa. Maecenas non elit nec massa convallis ultrices in nec lectus. Duis iaculis massa convallis enim suscipit iaculis. Vestibulum massa felis, gravida a lectus vitae, luctus scelerisque dui. Praesent accumsan, dolor ut condimentum lacinia, velit tortor sollicitudin enim, ut accumsan metus diam vel arcu. Quisque imperdiet mattis libero, non pellentesque metus posuere non. Suspendisse lobortis tortor libero, et commodo enim cursus vel. Donec eu facilisis nibh. Pellentesque eu ipsum vestibulum, condimentum elit et, condimentum nulla. Quisque eleifend, elit vitae varius luctus, mauris lorem interdum elit, sed molestie nibh elit sit amet augue. Integer porta in ligula quis molestie. Pellentesque commodo dignissim orci, sit amet gravida mi iaculis vel. Suspendisse ultricies pretium fringilla. Fusce eu leo feugiat sapien tristique aliquet non sit amet est. Mauris imperdiet maximus urna, condimentum interdum tellus vehicula ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Proin in augue eu arcu tempor ultricies. Mauris ultricies est quis neque molestie, at rutrum lacus sagittis. Aenean quis ante finibus, malesuada magna sed, imperdiet magna. Quisque luctus lacinia justo, pretium tincidunt magna scelerisque sed. Vivamus felis tortor, volutpat at fringilla malesuada, rutrum eget nisl. Pellentesque neque velit, faucibus commodo neque vitae, imperdiet volutpat arcu. Nulla eu lobortis sem. Donec non diam eget velit hendrerit elementum et sit amet mauris. Cras pulvinar risus nec sapien venenatis finibus. Nam faucibus sit amet nisi id rhoncus. Fusce et magna elit. Maecenas accumsan lacus et viverra elementum.
            </div>
        </div>
        <div id='footer'></div>
    </body>
</html>

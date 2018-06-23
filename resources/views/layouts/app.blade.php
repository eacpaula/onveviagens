<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- css -->
    <link href="{{ asset('css/lib/bootstrap-3.3.7.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-grid.css') }}" rel="stylesheet">

    <!-- fonts -->
    <link href="{{ asset('fonts/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome-4.6.3.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/owl.carousel.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

        <header>
            <nav class="navbar  navbar-fixed-top header__topo">
                <div class="container-fluid">
                    <div class="row  header__topo--border">
                        <div class="container">
                            <div class="col-md-6">
                                <nav class="header__topo__left">
                                    <ul>
                                        <li>
                                            <a href="maito:ucs@one.com.br">ucs@one.com.br</a>
                                        </li>
                                        <li>
                                            <a href="tel:549999999">(054)99999-9999</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-6">
                                <nav class="header__topo__right">
                                    <ul>
                                        <li>
                                            <a href="login.html">origem</a>
                                        </li>
                                        <li>
                                            <a href="cadastro.html">BR</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container header__topo__menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="{{ url('/') }}">
                            <img src="{{ asset('img/One.png') }}" alt="one" class="img-responsive center-block">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">

                            <!-- Authentication Links -->
                            @guest
                            <li class="header__topo__menu__nivel-1">
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="header__topo__menu__nivel-1">
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>

                            @else
          
							<li class="header__topo__menu__nivel-1 dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
								<li>
										<a href="/edit">Alterar meus dados</a>
									</li>
									<li>
										<a href="#">Minhas viagens/hoteis</a>
									</li>
									<li>
										<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</li>
									
									
								</ul>
							</li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script type="text/javascript" src="{{ asset('js/lib/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/bootstrap-3.3.7.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</body>

</html>
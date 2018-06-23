<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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

    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
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


                        @if (Route::has('login')) @auth
                        <li class="header__topo__menu__nivel-1">
                            <a href="{{ url('/home') }}">Home</a>
                        </li>
                        @else
                        <li class="header__topo__menu__nivel-1">
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="header__topo__menu__nivel-1">
                            <a href="{{ route('register') }}">Cadastre-se</a>
                        </li>
                        @endauth @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_chamada">
                        <h1>TURQUIA</h1>
                        <p>Mega promoção</p>
                        <div class="banner__chamada__buttom">
                            <a href="#">Confira</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pesquisa">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pesquisa__viagens">


                        <ul class="nav nav-tabs">
							<li class="active">
                                <a data-toggle="tab" href="#pacotes">
                                    <i class="fa fa-briefcase"></i>Pacotes</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#hotel">
                                    <i class="fa fa-building"></i>Hotel</a>
                            </li>
                           
                        </ul>

                        <div class="tab-content">
						<div id="pacotes" class="tab-pane fade in active">
                                <form>
                                    <div class="form-row row">
                                        <div class="col-md-12">
                                            <label for="origemPacotes">origemPacotes</label>
                                            <input type="text" id="origemPacotes" class="form-control" placeholder="origemPacotes">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="destinoPacotes">Destino</label>
                                            <input type="text" id="destinoPacotes" class="form-control" placeholder="destinoPacotes">
                                        </div>
                                    </div>
                                    <div class="form-row row">
                                        <div class="col-md-6">
                                            <label for="idaPacotes">Ida</label>
                                            <input type="text" id="idaPacotes" class="form-control" placeholder="idaPacotes">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="voltaPacotes">Volta</label>
                                            <input type="text" id="voltaPacotes" class="form-control" placeholder="voltaPacotes">
                                        </div>
                                    </div>
                                    <div class="form-row row">
                                        <div class="col-md-6">
                                            <label for="quartosPacotes">Quartos</label>
                                            <select class="form-control" id="quartosPacotes">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="criancasPacotes">Crianças</label>
                                            <select class="form-control" id="criancasPacotes">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="adultoPacotes">Adulto</label>
                                            <select class="form-control" id="adultoPacotes">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row row">
                                        <div class="col-md-12">
                                            <button type="submit" id="buscaPacotes" onclick="nomeViagen()">Buscar Pacotes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="hotel" class="tab-pane fade">
                                <form>
                                    <div class="form-row row">
                                        <div class="col-md-12">
                                            <label for="origem">Destino</label>
                                            <input type="text" id="origem" class="form-control" placeholder="Origem">
                                        </div>
                                    </div>
                                    <div class="form-row row">
                                        <div class="col-md-6">
                                            <label for="entrada">Entrada</label>
                                            <input type="text" id="entrada" class="form-control" placeholder="entrada">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="saida">Saida</label>
                                            <input type="text" id="saida" class="form-control" placeholder="saida">
                                        </div>
                                    </div>
                                    <div class="form-row row">
                                        <div class="col-md-6">
                                            <label for="quartos">Quartos</label>
                                            <select class="form-control" id="quartos">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="criancashotel">Crianças</label>
                                            <select class="form-control" id="criancashotel">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="adultoHotel">Adulto</label>
                                            <select class="form-control" id="adultoHotel">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row row">
                                        <div class="col-md-12">
                                            <button type="submit" id="buscaHotel">Buscar Hotel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="quemSomos">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>One viagens</h2>
                    <p>A One faz tudo por uma boa viagem. Por isso trabalha para transformar essa experiência na melhor conquista de sua vida, através de novas tendências e ampla rede de produtos e serviços turísticos. É essa forma de pensar que estabelece a CVC como a maior operadora de turismo da América Latina. O comprometimento social, a solidez e a inovação propiciaram notoriedade e visibilidade junto ao público. A One foi a primeira companhia a fretar aviões, a investir em um novo canal de distribuição com rede multimarca de produtos turísticos, a desenvolver o conceito de atendimento em shoppings e hipermercados, além de oferecer o parcelamento de viagens em 10 vezes sem juros e valores que cabem no bolso do consumidor.</p>

                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/home-viagens.png') }}" alt="quemSomos" class="img-responsive center-block">
                </div>
            </div>
        </div>
    </section>
    <section class="produto__default">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h2 id="teste">
								<i class="fa fa-avianex"></i>Pacotes NOME DO PACOTE</h2>
                        <ul>
                            <li class="col-md-3 col-sm-4">
                                <div class="produto__item">

                                    <div class="produto__item__local">
                                        <img src="{{ asset('img/fortaleza.jpg') }}" class="img-responsive center-block" alt="nome">
                                        <h3>Fortaleza</h3>
                                    </div>
                                    <div class="produto__item__descricao">
                                        <p>6 noites, hotel + Aéreo</p>
                                        <ol>
                                            <li>
                                                2 pessoas apartir de 
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="produto__item__valor">
                                        <p>R$ 3.262,00</p>
                                        <span>10x sem juros</span>
                                    </div>
                                    <div class="produto__item__button">
                                    @if (Route::has('login')) @auth
                                            <a href="{{ route('login') }}">logar</a>
                                        @else
                                            <a href="{{ route('register') }}">Cadastre-se</a> 
                                     @endauth @endif
                                       
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-4">
                                <div class="produto__item">

                                    <div class="produto__item__local">
                                        <img src="{{ asset('img/riodejaneiro.jpg') }}" class="img-responsive center-block" alt="nome">
                                        <h3>Rio de Janeiro</h3>
                                    </div>
                                    <div class="produto__item__descricao">
                                        <p>3 noites, hotel + Aéreo</p>
                                        <ol>
                                        <li>
                                                2 pessoas apartir de 
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="produto__item__valor">
                                        <p>R$ 506,00</p>
                                        <span>10x sem juros</span>
                                    </div>
                                    <div class="produto__item__button">
                                    @if (Route::has('login')) @auth
                                            <a href="{{ route('login') }}">logar</a>
                                        @else
                                            <a href="{{ route('register') }}">Cadastre-se</a> 
                                     @endauth @endif
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-4">
                                <div class="produto__item">

                                    <div class="produto__item__local">
                                        <img src="{{ asset('img/buenosAires.jpg') }}" class="img-responsive center-block" alt="nome">
                                        <h3>Buenos Aires</h3>
                                    </div>
                                    <div class="produto__item__descricao">
                                         <p>3 noites, hotel + Aéreo</p>
                                        <ol>
                                            <li>
                                            2 pessoas apartir de 
                                            </li>
                                            
                                        </ol>
                                    </div>
                                    <div class="produto__item__valor">
                                        <p>R$ 1.932,00</p>
                                        <span>10x sem juros</span>
                                    </div>
                                    <div class="produto__item__button">
                                    @if (Route::has('login')) @auth
                                            <a href="{{ route('login') }}">logar</a>
                                        @else
                                            <a href="{{ route('register') }}">Cadastre-se</a> 
                                     @endauth @endif
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-4">
                                <div class="produto__item">

                                    <div class="produto__item__local">
                                        <img src="{{ asset('img/PortoSeguro.jpg') }}" class="img-responsive center-block" alt="nome">
                                        <h3>Porto Seguro</h3>
                                    </div>
                                    <div class="produto__item__descricao">
                                        <span>7 noites, Hotel + Aéreo</span>
                                        <ol>
                                            <li>
                                            2 pessoas apartir de 
                                            </li>                                        
                                        </ol>
                                    </div>
                                    <div class="produto__item__valor">
                                        <p>R$ 2.340,00</p>
                                        <span>10x sem juros</span>
                                    </div>
                                    <div class="produto__item__button">
                                    @if (Route::has('login')) @auth
                                            <a href="{{ route('login') }}">logar</a>
                                        @else
                                            <a href="{{ route('register') }}">Cadastre-se</a> 
                                     @endauth @endif
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comentarios">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="comentarios__titulo">
                        <h3>Comentário Clientes</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="owl-carousel comentarios__carousel owl-theme">
                        <div class="item">
                            <div class="comentarios__paisagem">
                                <img src="{{ asset('img/produto-01.jpg') }}" class="img-responsive" alt="teste">
                            </div>
                            <div class="comentarios__viajante">
                                <img src="{{ asset('img/produto-01.jpg') }}" class="img-responsive img-circle center-block" alt="teste">
                            </div>
                            <div class="comentarios__comentario">
                                <p>teste</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="comentarios__paisagem">
                                <img src="{{ asset('img/produto-01.jpg') }}" class="img-responsive" alt="teste">
                            </div>
                            <div class="comentarios__viajante">
                                <img src="{{ asset('img/produto-01.jpg') }}" class="img-responsive img-circle center-block" alt="teste">
                            </div>
                            <div class="comentarios__comentario">
                                <p>teste</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer__news">
            <div class="container">
                <div class="col-md-12 newsletter">
                    <h1>ASSINE NOSSA NEWSLETTER</h1>
                    <p>
                        Acompanhe nossas novidades com notícias,
                        <br> direto no seu e-mail.
                    </p>
                    <form class="form-inline" name="formNewsletter" id="formNewsletter" novalidate="novalidate">
                        <input name="__RequestVerificationToken" type="hidden" value="AREb8kp__09Fedj6iDtxMpoAT-r1KDNxH7YO04HzyQAzt9UpE0oF1YGBK3ugeLrKGk2BwU6R_R8PY7zYl_SROdJI8Dr7VzPuDLrtCW8lAq9rtWt6bJOQ82wkkhSQoDU-40MRlYq86TzqTV5Qo2U9US0oM1QoFYiUYi8AGeJLhQU1">
                        <div class="form-group">
                            <label for="nome"></label>
                            <input type="text" class="form-control" id="NomeNewsletter" name="NomeNewsletter" placeholder="Nome Completo" ax-control="text" ax-required="true" ax-maxlength="100" maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" class="form-control input-sm" id="EmailNewsletter" name="EmailNewsletter" placeholder="E-mail" ax-control="text" ax-required="true" ax-format="email" ax-maxlength="50" maxlength="50">
                        </div>
                        <button type="submit" class="btn">Assinar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer__endereco">
                        <a href="#">
                            <img src="{{ asset('img/One__footer.png') }}" class="img-responsive footer__logo">
                        </a>
                        <p class="footer__endereco__titulo">Campus-Sede:</p>
                        <p>Rua Francisco Getúlio Vargas, 1130 </p>
                        <p>CEP 95070-560 - Caxias do Sul </p>
                        <p>Fone: +55 54 3218-2100</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer__contato">
                        <p class="footer__contato__titulo">Contato:</p>
                        <p>Rua Francisco Getúlio Vargas, 1130 </p>
                        <p>CEP 95070-560 - Caxias do Sul </p>
                        <p>Fone: +55 54 3218-2100</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer__social">
                        <ul>
                            <li>
                                <a href="" target="_blanck"><span class="fa fa-facebook"></span></a>
                            </li>
                            <li>
                                <a href="" target="_blanck"><span class="fa fa-instagram"></span></a>
                            </li>
                            <li>
                                <a href="" target="_blanck"><span class="fa fa-youtube"></span></a>
                            </li>
                            <li>
                                <a href="https://br.pinterest.com/belfastmoda/" target="_blanck"><span class="fa fa-pinterest"></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__pagamentos">
                        <img src="{{ asset('img/bandeiras.png') }}" alt="forma de pagamento" class="img-responsive center-block">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__direitos">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>ONE VIAGENS ® 2018 | Todos os Direitos Reservados</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="{{ asset('js/lib/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/bootstrap-3.3.7.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/comentarios_home.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
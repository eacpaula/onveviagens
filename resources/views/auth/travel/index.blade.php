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
    <section class="produto__default">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h2>
								<i class="fa fa-avianex"></i>Meus Pacotes</h2>
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
                                        <a href="#">comprar</a>
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
                                        <a href="#">Comprar</a>
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
                                        <a href="#">Ver mais detalhes</a>
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
                                        <a href="#">Comprar</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="produto__default">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h2>
								<i class="fa fa-avianex"></i>Meus HOteis</h2>
                        <ul>
                            <li class="col-md-3 col-sm-4">
                                <div class="produto__item">
                                    <div class="produto__item__local">
                                        <img src="{{ asset('img/hotel1.jpg') }}" class="img-responsive center-block" alt="nome">
                                        <h3>Hotel Aspen Comfort Bergson Flat</h3>
                                    </div>
                                    <div class="produto__item__descricao">
                                        <p>por noite, apartir de:</p>
                                    </div>
                                    <div class="produto__item__valor">
                                        <p>R$ 191,00</p>
                                    </div>
                                   
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-4">
                                <div class="produto__item">

                                    <div class="produto__item__local">
                                        <img src="{{ asset('img/hotel2.jpg') }}" class="img-responsive center-block" alt="nome">
                                        <h3>Hotel Swan Tower Caxias do Sul</h3>
                                    </div>
                                    <div class="produto__item__descricao">
                                        <p>por noite, apartir de:</p>
                                    </div>
                                    <div class="produto__item__valor">
                                        <p>R$ 176,00</p>
                                    </div>
                                   
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-4">
                                <div class="produto__item">

                                    <div class="produto__item__local">
                                        <img src="{{ asset('img/hotel3.jpg') }}" class="img-responsive center-block" alt="nome">
                                        <h3>Hotel Bela Vista Parque Hotel</h3>
                                    </div>
                                    <div class="produto__item__descricao">
                                        <p>por dia, apartir de:</p>       
                                    </div>
                                    <div class="produto__item__valor">
                                        <p>R$ 10,00</p>
                                    </div>
                                   
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-4">
                                <div class="produto__item">

                                    <div class="produto__item__local">
                                        <img src="{{ asset('img/hotel4.jpg') }}" class="img-responsive center-block" alt="nome">
                                        <h3>Spa do Vinho, Autograph Collection</h3>
                                    </div>
                                    <div class="produto__item__descricao">
                                         <p>por dia, apartir de:</p>       
                                        
                                    </div>
                                    <div class="produto__item__valor">
                                        <p>R$ 498,00</p>
                                        
                                    </div>
                                    
                                </div>
                            </li>
                        </ul>
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
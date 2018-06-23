@extends('layouts.app')

@section('content')
<section class="background__header background__header__logado"></section>
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
                                            <button type="submit" id="buscaPacotes">Buscar Pacotes</button>
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
    <section class="produto__default">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h2>
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
								<i class="fa fa-avianex"></i>Hoteis para Destino</h2>
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
                                    <div class="produto__item__button">
                                        <a href="#">comprar</a>
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
                                    <div class="produto__item__button">
                                        <a href="#">Comprar</a>
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
                                    <div class="produto__item__button">
                                        <a href="#">Comprar</a>
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
@endsection

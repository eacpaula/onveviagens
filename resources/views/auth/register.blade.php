@extends('layouts.app')

@section('content')
<section class="background__header"></section>
<section class="cadastro main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cadastro__header">
                            <h1>SEJA BEM-VINDO À ONE VIAGENS</h1>
                            <p>EFETUE SEU CADASTRO ABAIXO</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="castro__form">
                        
                            <div class="col-md-offset-2 col-md-8">
                            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" class="form">
                         

@csrf
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="name" >{{ __('Name') }}</label>
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="email" >{{ __('E-Mail Address') }}</label>

                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                        
                                                                        @if ($errors->has('email'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('email') }}</strong>
                                                                            </span>
                                                                        @endif
                                       
                                    </div>
                                </div>
								<div class="row">
								<div class="form-group col-xs-12 sexo">
									<label class="radio-inline">
										<input type="radio" name="Sexo" id="Feminino" value="1">
										Feminino
									</label>
									<label class="radio-inline">
										<input type="radio" name="Sexo" id="Masculino" value="0" checked="">
										Masculino
									</label>
								</div>
								</div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label class="sr-only" for="cpf">CPF</label>
                                        <input type="text" class="form-control" placeholder="CPF" id="cpf" name="cpf" maxlength="50" aria-required="true" aria-invalid="false">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-6">
                                        <label class="sr-only" for="telefone">Telefone</label>
                                        <input type="text" class="form-control" placeholder="Telefone" id="telefone" name="telefone" maxlength="50" aria-required="true" aria-invalid="false">
                                    </div>
                                    <div class="form-group col-xs-6">
                                        <label class="sr-only" for="celefone">Celular</label>
                                        <input type="text" class="form-control" placeholder="Celular"  id="celefone" name="celefone" maxlength="50" aria-required="true" aria-invalid="false">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label class="sr-only" for="cep">CEP</label>
                                        <input type="text" class="form-control" placeholder="CEP"  id="cep" name="cep" maxlength="50" aria-required="true" aria-invalid="false">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label class="sr-only" for="endereco">Endereco</label>
                                        <input type="text" class="form-control" placeholder="Endereço" id="endereco" name="endereco" maxlength="50" aria-required="true" aria-invalid="false">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-4">
                                        <label class="sr-only" for="numero">Número</label>
                                        <input type="text" class="form-control" placeholder="Número" id="numero" name="numero" maxlength="50" aria-required="true" aria-invalid="false">
                                    </div>
                                    <div class="form-group col-xs-8">
                                        <label class="sr-only" for="Complemento">Complemento</label>
                                        <input type="text" class="form-control" placeholder="Complemento" id="Complemento" name="Complemento" maxlength="50" aria-required="true" aria-invalid="false">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-6">
                                        <label class="sr-only" for="cidade">Cidade</label>
                                        <input type="text" class="form-control" placeholder="Cidade"  id="cidade" name="cidade" maxlength="50" aria-required="true" aria-invalid="false">
                                    </div>
                                    <div class="form-group col-xs-6">
                                        <label class="sr-only" for="estado">Estado</label>
                                        <select class="form-control" name="Estado" id="Estado">
                                            <option value="" disabled="" selected="">Estado</option>
                                            <option value="1">AC</option>
                                            <option value="2">AL</option>
                                            <option value="4">AP</option>
                                            <option value="3">AM</option>
                                            <option value="5">BA</option>
                                            <option value="6">CE</option>
                                            <option value="7">DF</option>
                                            <option value="8">ES</option>
                                            <option value="9">GO</option>
                                            <option value="10">MA</option>
                                            <option value="11">MT</option>
                                            <option value="12">MS</option>
                                            <option value="13">MG</option>
                                            <option value="14">PA</option>
                                            <option value="15">PB</option>
                                            <option value="16">PR</option>
                                            <option value="17">PE</option>
                                            <option value="18">PI</option>
                                            <option value="19">RJ</option>
                                            <option value="20">RN</option>
                                            <option value="21">RS</option>
                                            <option value="22">RO</option>
                                            <option value="23">RR</option>
                                            <option value="24">SC</option>
                                            <option value="25">SP</option>
                                            <option value="26">SE</option>
                                            <option value="27">TO</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label class="sr-only" for="referencia">Ponto de referencia</label>
                                        <input type="text" class="form-control" placeholder="Ponto de Referencia" id="referencia" name="referencia" maxlength="50" aria-required="true" aria-invalid="false">
                                    </div>
                                </div>
                              
                                
                                <div class="row">

                        <div class="form-group col-xs-12">
                       
                            <label for="password" >{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-xs-12">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                        <div class="row">
									<div class="form-group col-xs-12">
										<button type="submit" class="login__form__btn">confirmar dados</button>
									</div>
								</div>

								</form>
                            </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

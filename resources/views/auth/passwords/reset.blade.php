@extends('layouts.app')

@section('content')

<section class="login main">
	
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login__header">
                <h1>Alterar Senha</h1>
                <p>EFETUE ATROCA DE SUA SENHA ABAIXO</p>
                </div>
            </div>

            <div class="col-md-offset-3 col-md-6">
                <div class="login__form">
                    <div class="row">
                        <div class="col-md-12 left">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="login__form__header">
                                            <h3>Preencha seus dados nos campos abaixo</h3>
                                    </div>
                                </div>
                            </div>

                                <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="row">
                                            <div class="form-group col-xs-12">
                                                <label for="email">{{ __('E-Mail') }}</label>                                              
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-xs-12"> 
                                                <label for="password">{{ __('Senha') }}</label>                                     
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
                                                <label for="password-confirm">{{ __('Confirmar Senha') }}</label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>       
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-xs-12">
                                                <button type="submit"  class="login__form__btn"> {{ __('Salvar Senha') }}</a>
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


@endsection

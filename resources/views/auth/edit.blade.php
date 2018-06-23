@extends('layouts.app')

@section('content')
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
                            <form method="POST" action="{{ route('update') }}" aria-label="{{ __('update') }}" class="form">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="{{$user->name}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="{{$user->email}}" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Update
                                </button>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
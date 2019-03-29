@extends('layouts.app')

@section("scripts")
    <script>
        let h = window.innerHeight;

        document.getElementsByClassName('container-fluid')[0].style.height = h+"px";
    </script>

@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center box-login">
        <div class="col-md-6 offset-6 form">
            <div class="col-12 mt-3">
                <a href="http://tmontec.com.br" class="d-block logo-login" target="_blank">
                    <img src="{{ asset("imagens/logo.png") }}" alt="Tmontec" class="img-fluid">
                </a>
            </div>
            <div class="card">
                <div class="card-header">Faça seu login</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">Usuário</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group ">
                            <label for="password">Senha</label>

                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group row text-center">
                            <div class="col-12">
                                <div class="form-check">
                                    <label class="form-check-label" for="remember">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Conectar Automaticamente
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-square btn-login">
                                    <i class="fas fa-sign-in-alt"></i> Entrar
                                </button>
                            </div>
                            <div class="col-12">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Esqueceu sua senha?
                                    </a>
                                @endif
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-12">
                <p class="text-center">&copy; 2019</p>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layout')

@section('content')
<div class="auth-page">

    <form method="POST" class="auth-form" action="{{ route('login') }}">
        @csrf
        <h1 class="h1-auth">Авторизация администратора</h1>
        <div class="mb-3">
            <label for="email">Логин</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password">Пароль</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="submitdiv">
            <button type="submit" class="btn btn-primary btn-enter">
                {{ __('Войти') }}
            </button>
        </div>

        <!--<a class="nav-link" style="padding-left: 0px; width: 100px;" href="{{ route('register') }}">{{ __('Регистрация') }}</a>-->

    </form>
</div>

@endsection
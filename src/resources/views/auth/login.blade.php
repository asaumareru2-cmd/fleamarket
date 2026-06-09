@extends('layouts.app')

@section('title','ログイン')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

<div class="login">

    <h2 class="login__title">
        ログイン
    </h2>

    <form class="login-form" action="/login" method="post">
        @csrf

        <div class="form-group">
            <label class="form-group__label">
                メールアドレス
            </label>

            <input
                type="email"
                class="form-group__input" name="email" value="{{old('email')}}" />
                <p class="login-error">
                    @error('email')
                    {{$message}}
                    @enderror
                </p>
        </div>

        <div class="form-group">
            <label class="form-group__label">
                パスワード
            </label>

            <input
                type="password"
                class="form-group__input" name="password" />
                <p class="login-error">
                    @error('password')
                    {{@message}}
                    @enderror
                </p>
        </div>

        <button class="login-form__button">
            ログインする
        </button>

    </form>

    <a href="/register" class="login__link">
        会員登録はこちら
    </a>

</div>

@endsection
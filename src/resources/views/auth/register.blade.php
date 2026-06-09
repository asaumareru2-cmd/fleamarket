@extends('layouts.app')

@section('title','会員登録')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')

<div class="register">

    <h2 class="register__title">
        会員登録
    </h2>

    <form class="register-form" action="/register" method="post">
        @csrf

        <div class="form-group">
            <label class="form-group__label">
                ユーザー名
            </label>

            <input
                type="text"
                class="form-group__input" name="name" value="{{old('name')}}" />
        </div>
        <div class="form-error">
            @error('name')
            {{$message}}
            @enderror
        </div>

        <div class="form-group">
            <label class="form-group__label">
                メールアドレス
            </label>

            <input
                type="email"
                class="form-group__input" name="email" value="{{old('email')}}" />
        </div>
        <div class="form-error">
         @error('email')
            {{$message}}
             @enderror
        </div>


        <div class="form-group">
            <label class="form-group__label">
                パスワード
            </label>

            <input
                type="password"
                class="form-group__input" name="password" />
        </div>
        <div class="form-error">
         @error('password')
            {{$message}}
             @enderror
        </div>

        <div class="form-group">
            <label class="form-group__label">
                確認用パスワード
            </label>

            <input
                type="password"
                class="form-group__input" name="password_confirmation" />
        </div>

        <button class="register-form__button">
            登録する
        </button>

    </form>

    <a href="/login" class="register__link">
        ログインはこちら
    </a>

</div>

@endsection
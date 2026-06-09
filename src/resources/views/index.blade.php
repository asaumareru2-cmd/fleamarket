@extends('layouts.app')

@section('title','トップ画面')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="item-list">

    <div class="tab-menu">
        <a href="" class="tab">おすすめ</a>
        <a href="" class="tab active">マイリスト</a>
    </div>

    <div class="product-grid">

        <div class="product-card">
            <div class="product-image">
                商品画像
            </div>
            <p class="product-name">商品名</p>
        </div>

        <div class="product-card">
            <div class="product-image">
                商品画像
            </div>
            <p class="product-name">商品名</p>
        </div>

        <div class="product-card">
            <div class="product-image">
                商品画像
            </div>
            <p class="product-name">商品名</p>
        </div>

    </div>

</div>
@endsection

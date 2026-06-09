<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>

<header class="header">

    <div class="header__logo">
        <a href="/">
            <img
                src="{{ asset('img/COACHTECHヘッダーロゴ.png') }}"
                alt="COACHTECH">
        </a>
    </div>

    @if(Auth::check())

    <div class="header__search">
        <input
            type="text"
            placeholder="なにをお探しですか？">
    </div>

    <nav class="header-nav">

        <form action="/logout" method="post" >
            @csrf
            <button class="header-nav__link">
            ログアウト
            </button>
        </form>

        <a href="/mypage" class="header-nav__link">
            マイページ
        </a>

        <a href="/sell" class="header-nav__button">
            出品
        </a>

    </nav>

    @endif

</header>

<main>
    @yield('content')
</main>

</body>
</html>
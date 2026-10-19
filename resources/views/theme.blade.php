<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/images/favicon.webp" type="image/x-icon">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-minion shadow-sm">
        <div class="container">

            <a class="navbar-brand" href="/"><img src="/images/logo.webp" alt="logo" class="logo-header"></a>

            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarMain"
                    aria-controls="navbarMain" aria-expanded="false" aria-label="Открыть меню">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link text-bold" href="/">Главная</a></li>
                    <li class="nav-item"><a class="nav-link text-bold" href="/quiz">Тест</a></li>
                    <li class="nav-item"><a class="nav-link text-bold" href="/minions">Миньоны</a></li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    @auth

                        <li class="nav-item">
                            <a class="nav-link text-bold" href="/logout" style="font-size: 22px">Выйти</a>
                        </li>

                        <li class="nav-item">
                            <span class="text nav-link"><a href="/cabinet" style="color: black"
                            style="font-size: 24px">{{ Auth::user()->login }}</a></span>
                        </li>

                        <li class="nav-item">
                            <span class="text nav-link"><a href="/cabinet" style="color: black">
                                    <img src="/images/avatar.webp" alt="avatar" class="avatar-header"></a></span>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-bold" href="/auth">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link button text-bold" href="/register">Регистрация</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    @if (session()->has('success'))
        <div class="alert alert-success alert-warning text-center">
          <b>{{ session()->get('success') }}</b>
        </div>
    @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-warning text-center">
                @foreach ($errors->all() as $error)
                 <b>{{ $error }}</b>
                @endforeach
            </div>
        @endif
    @yield('content')
</main>

<footer class="footer">
    <div class="container">
        <div class="row gy-4 py-4 mt-0">

            {{-- Лого и о сайте --}}
            <div class="col-md-4">
                <a class="navbar-brand p-0" href="/">
                    <img src="/images/logo.webp" alt="logo" class="logo-header">
                </a>
                <p class="footer-text" >
                    Весёлый тест, который расскажет, какой ты миньон.
                    15 вопросов, 8 результатов и ноль серьёзности.
                </p>
            </div>

            {{-- Навигация --}}
            <div class="col-md-4">
                <h5 class="text-bold">Навигация</h5>
                <ul class="footer-list">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/quiz">Тест</a></li>
                    <li><a href="/minions">Миньоны</a></li>
                    @auth
                        <li><a href="/cabinet">Кабинет</a></li>
                        <li><a href="/logout">Выйти</a></li>
                    @else
                        <li><a href="/auth">Войти</a></li>
                        <li><a href="/register">Регистрация</a></li>
                    @endauth
                </ul>
            </div>

            {{-- Контакты --}}
            <div class="col-md-4">
                <h5 class="text-bold">Контакты разработчика</h5>
                <ul class="footer-list">
                    <li><a href="mailto:fisenkopolina06@gmail.com">fisenkopolina06@gmail.com</a></li>
                    <li><a href="/https://t.me/plnsnks">Telegram</a></li>
                    <li><a href="/https://vk.ru/fisenkopolina">ВКонтакте</a></li>
                </ul>
            </div>

        </div>
    </div>

    {{-- Нижняя полоска --}}
    <div class="footer-bottom text-center">
        <p class="mb-0">© 2026 Minion Quiz.</p>
    </div>
</footer>
<script src="{{asset('/js/script.js')}}"></script>
<script src="{{asset('/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>

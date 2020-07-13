<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/pugins/owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')


        <footer>
            <div class="container-fluid footer-callback-outer pt-3 pb-2">
                <div class="container">
                    <div class="row d-md-flex justify-content-between footer-callback">
                        <div class="col-md-5 col-xs-12">
                            <div class="footer-callback__text">
                                Остались вопросы ?
                            </div>
                            <div class="footer-callback__subtext">
                                Оставьте Ваш номер и мы Вам перезвоним<br>в течении 15 минут
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <input type="text" placeholder="Введите ваш телефон" class="footer-callback__input" id="callback-number">
                        </div>
                        <div class="col-md-3 col-xs-12">
                            <button class="footer-callback__button" id="callback-action">
                                Перезвоните мне!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid footer-info-outer pt-2 pb-2">
                <div class="container">
                    <div class="row d-md-flex justify-content-between footer-info">
                        <div class="col-md-5 col-xs-12 footer-info-about">
                            <a class="nav__navbar-brand navbar-brand d-md-flex justify-content-start pt-5 pb-3" href="index.html">
                                <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                                <div class="nav__logo">
                                    <div class="nav__logotext">
                                        ЛИТЭК
                                    </div>
                                    <div class="nav__logosub">
                                        Правильные технические решения
                                    </div>
                                </div>
                            </a>
                            <p>
                                Наша компания является многопрофильным
                                предприятием. Проектирование, изготовление
                                и поставку, ремонт оборудования, деталей и узлов,
                                инструмента для предприятий различных
                                отраслей экономики
                            </p>
                            <p>
                                Адрес: 404130, Россия<br>
                                Волгоградская область, г. Волжский<br>
                                1й-Индустриальный проезд 18-101<br>
                            </p>
                            <p>
                                ИНН 3435126847<br>
                                КПП 343501001<br>
                                Южный филиал ПАО «Промсвязьбанк»<br>
                                Р/СЧ 40702810270050838801<br>
                                БИК 041806715 к/с 30101810100000000715<br>
                            </p>
                        </div>
                        <div class="col-md-3 col-xs-12 footer-info-contacts">
                            <h5 class="pt-5 pb-3">Контакты для связи</h5>
                            +7 (8443) 39-60-20<br>
                            +7 (8443) 25-69-94<br>
                            <br>
                            Главный конструктор<br>
                            +7 (961) 667 61 22<br>
                            <br>
                            Коммерческий отдел<br>
                            +7 (960) 894 87 83<br>
                            <h5 class="pt-5 pb-3">Документы</h5>
                            <a href="#">Политика конфедециальности</a>
                            <a href="#">Обработка персональных данных</a>
                            <a href="#">Публичная оферта</a>
                        </div>
                        <div class="col-md-4 col-xs-12 footer-info-feedback">
                            <h5 class="pt-5 pb-3">Форма обратной связи</h5>
                            <input type="text" class="footer-info-feedback__input-name" placeholder="Введите Ваше имя">
                            <input type="text" class="footer-info-feedback__input-phone" id="feedback-number" placeholder="Введите Ваш телефон">
                            <div class="footer-info-feedback-textarea_wrapper">
                                <textarea rows="10" cols="45" class="footer-info-feedback-textarea_wrapper__textarea" placeholder="Напишите здесь Ваше сообщение"></textarea>
                                <button class="footer-info-feedback-textarea_wrapper__button"><i class="fa fa-paper-plane"></i></button>
                            </div>
                            <div class="form-check feedback-concentpolicy">
                                <input type="checkbox" class="form-check-input feedback-concentpolicy__checkbox" id="feedback-concentpolicy">
                                <label class="form-check-label  feedback-concentpolicy__label" for="feedback-concentpolicy">Я даю согласие на обработку <a href>моих персональных
                                        данных</a></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid footer-copyright-outer pt-3 pb-2">
                <div class="container">
                    <div class="d-md-flex justify-content-between footer-copyright">
                        <div class=" footer-copyright__text">ООО " ЛИТЭК" © 2020-2021 Все права защищены.</div>
                        <div class=" footer-copyright__download-catalog"><a href=""><img class="mr-2 img-fluid" src="images/template/download-catalog-footer.png" alt="Скачать каталог продукции">Скачать каталог продукции</a></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/plugins/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="https://api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&lang=ru-RU" type="text/javascript"></script>
</body>

</html>
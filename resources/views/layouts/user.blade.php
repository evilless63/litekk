<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('plugins/owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <!-- Modal -->
        <div class="modal fade" id="directorsMail" tabindex="-1" role="dialog" aria-labelledby="directorsMailLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="directorsMailLabel">Отправить письмо директору</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row feedback-form mt-5">
                            <div class="col-md-5 col-sx-12">
                                <input type="text" class="feedback-form__name" id="DirectorEmailName" placeholder="Введите Ваше имя">
                                <input type="text" class="feedback-form__email" id="DirectorEmailEmail" placeholder="Введите Ваш email">
                                <input type="hidden" class="feedback-form__file_hidden">
                                <button type="text" class="feedback-form__file d-flex justify-content-start align-items-center" id="DirectorEmailFile"><img src="{{asset('images/template/add_files.png')}}" class="mr-3" alt="">Приложите файлы (при желании)</button>
                            </div>
                            <div class="col-md-7 col-sx-12">

                                    <textarea rows="5" cols="45" class="feedback-form__textarea" id="DirectorEmailText" placeholder="Введите Ваше сообщение"></textarea>
                                    <div class="col-md-12"></div>
                                    <button type="text" class="feedback-form__push" id="sendDirectorEmail">Отправить</button>

                            </div>
                        </div>
                        </div>

                </div>
            </div>
        </div>
        <header>
            <div class="container-fluid header header-contacts-outer pt-2 pb-2">
                <div class="container header-contacts-inner">
                    <div class="row header-contacts">
                        <div class="col-md-5 col-xs-12 d-flex align-items-center header-contacts__adress">
                            <i class="fa fa-map-marker header-contacts__adress-marker mr-2"></i> г. Волжский,
                            1й-Индустриальный проезд 18-101
                        </div>
                        <div class="col-md-7 col-xs-12 header-contacts__phones-emails d-md-flex align-items-center justify-content-between">
                            <div class="col-xs-12 header-contacts__phone d-flex align-items-center">
                                <i class="fa fa-info-circle header-contacts__phone-marker mr-2"></i>+7 (8443) 25 69 94
                            </div>
                            <div class="col-xs-12 header-contacts__phone d-flex align-items-center">
                                <i class="fa fa-info-circle header-contacts__phone-marker mr-2"></i>+7 (8443) 39 60 20
                            </div>
                            <div class="col-xs-12 header-contacts__email d-flex align-items-center" data-toggle="modal" data-target="#directorsMail">
                                <i class="fa fa-envelope-o header-contacts__email-marker mr-2"></i>Письмо директору
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid header header-nav-outer  pt-3 pb-3">
                <div class="container header-nav-inner">
                    <nav class="nav justify-content-around align-items-center mt-1">
                        <a class="nav__navbar-brand navbar-brand d-md-flex justify-content-between" href="{{route('site.index')}}">
                            <img src="{{asset('images/template/logo.png')}}" class="d-inline-block align-top img-fluid" alt="">
                        </a>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('site.index')}}">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('site.company')}}">О компании</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" id="collapseCatalogButton" href="#collapseCatalog">Каталог продукции</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('site.news')}}">Новости</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('site.articles')}}">Статьи</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('site.delivery')}}">Доставка</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('site.contacts')}}">Контакты</a>
                        </li>
                    </nav>
                </div>
            </div>


            <div class="collapse" id="collapseCatalog">
                <div class="card card-body collapse-catalog">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1 collapse-catalog__arrow-left d-flex align-items-center owl-nav disabled">
                                <i class="fa fa-angle-left mr-5 customPrevBtn"></i>
                            </div>
                            <div class="col-md-10">
                                <div class="collapse-catalog-inner owl-carousel owl-theme">


                                    <div class="collapse-catalog-inner-item">
                                        <a href="{{route('products.telega')}}">
                                            <div class="collapse-catalog-inner-item__image d-flex align-items-end justify-content-center">
                                                <img class="img-fluid" src="{{asset('images/products/telega/perspective.png')}}" alt="Пример модели">
                                            </div>
                                            <h3 class="collapse-catalog-inner-item__name">telega</h3>
                                            <div class="collapse-catalog-inner-item__number">
                                                01
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse-catalog-inner-item">
                                        <a href="{{route('products.p1pm2')}}">
                                            <div class="collapse-catalog-inner-item__image d-flex align-items-end justify-content-center">
                                                <img class="img-fluid" src="{{asset('images/products/p1pm2/perspective.png')}}" alt="Пример модели">
                                            </div>
                                            <h3 class="collapse-catalog-inner-item__name">p1pm2</h3>
                                            <div class="collapse-catalog-inner-item__number">
                                                02
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse-catalog-inner-item">
                                        <a href="{{route('products.p1pna')}}">
                                            <div class="collapse-catalog-inner-item__image d-flex align-items-end justify-content-center">
                                                <img class="img-fluid" src="{{asset('images/products/p1pna/perspective.png')}}" alt="Пример модели">
                                            </div>
                                            <h3 class="collapse-catalog-inner-item__name">p1pna</h3>
                                            <div class="collapse-catalog-inner-item__number">
                                                03
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse-catalog-inner-item">
                                        <a href="{{route('products.p2r')}}">
                                            <div class="collapse-catalog-inner-item__image d-flex align-items-end justify-content-center">
                                                <img class="img-fluid" src="{{asset('images/products/p2r/perspective.png')}}" alt="Пример модели">
                                            </div>
                                            <h3 class="collapse-catalog-inner-item__name">p2r</h3>
                                            <div class="collapse-catalog-inner-item__number">
                                                04
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse-catalog-inner-item">
                                        <a href="{{route('products.p2rn')}}">
                                            <div class="collapse-catalog-inner-item__image d-flex align-items-end justify-content-center">
                                                <img class="img-fluid" src="{{asset('images/products/p2rn/perspective.png')}}" alt="Пример модели">
                                            </div>
                                            <h3 class="collapse-catalog-inner-item__name">p2rn</h3>
                                            <div class="collapse-catalog-inner-item__number">
                                                05
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse-catalog-inner-item">
                                        <a href="{{route('products.rolgang')}}">
                                            <div class="collapse-catalog-inner-item__image d-flex align-items-end justify-content-center">
                                                <img class="img-fluid" src="{{asset('images/products/rolgang/perspective.png')}}" alt="Пример модели">
                                            </div>
                                            <h3 class="collapse-catalog-inner-item__name">rolgang</h3>
                                            <div class="collapse-catalog-inner-item__number">
                                                06
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse-catalog-inner-item">
                                        <a href="{{route('products.t001')}}">
                                            <div class="collapse-catalog-inner-item__image d-flex align-items-end justify-content-center">
                                                <img class="img-fluid" src="{{asset('images/products/t001/perspective.png')}}" alt="Пример модели">
                                            </div>
                                            <h3 class="collapse-catalog-inner-item__name">t001</h3>
                                            <div class="collapse-catalog-inner-item__number">
                                                07
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse-catalog-inner-item">
                                        <a href="{{route('products.t003')}}">
                                            <div class="collapse-catalog-inner-item__image d-flex align-items-end justify-content-center">
                                                <img class="img-fluid" src="{{asset('images/products/t003/perspective.png')}}" alt="Пример модели">
                                            </div>
                                            <h3 class="collapse-catalog-inner-item__name">t003</h3>
                                            <div class="collapse-catalog-inner-item__number">
                                                08
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse-catalog-inner-item">
                                        <a href="{{route('products.t004')}}">
                                            <div class="collapse-catalog-inner-item__image d-flex align-items-end justify-content-center">
                                                <img class="img-fluid" src="{{asset('images/products/t004/perspective.png')}}" alt="Пример модели">
                                            </div>
                                            <h3 class="collapse-catalog-inner-item__name">t004</h3>
                                            <div class="collapse-catalog-inner-item__number">
                                                09
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse-catalog-inner-item">
                                        <a href="{{route('products.tm2')}}">
                                            <div class="collapse-catalog-inner-item__image d-flex align-items-end justify-content-center">
                                                <img class="img-fluid" style="width: 50%;" src="{{asset('images/products/tm2/perspective.png')}}" alt="Пример модели">
                                            </div>
                                            <h3 class="collapse-catalog-inner-item__name">tm2</h3>
                                            <div class="collapse-catalog-inner-item__number">
                                                10
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse-catalog-inner-item">
                                        <a href="{{route('products.parts')}}">
                                            <div class="collapse-catalog-inner-item__image d-flex align-items-end justify-content-center">
                                                <img class="img-fluid" style="width: 50%;" src="{{asset('images/products/parts/perspective.png')}}" alt="Пример модели">
                                            </div>
                                            <h3 class="collapse-catalog-inner-item__name">Запчасти</h3>
                                            <div class="collapse-catalog-inner-item__number">
                                                11
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-1 collapse-catalog__arrow-right d-flex align-items-center owl-nav disabled">
                                <i class="fa fa-angle-right mr-5 customNextBtn"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </header>

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
                            <input type="text" placeholder="Введите ваш телефон" class="footer-callback__input" id="callbackNumber">
                        </div>
                        <div class="col-md-3 col-xs-12">
                            <button class="footer-callback__button" id="callbackAction">
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
                            <a class="nav__navbar-brand navbar-brand d-md-flex justify-content-start pt-5 pb-3" href="{{route('site.index')}}">
                                <img src="{{asset('images/template/logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">

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
                            <input type="text" class="footer-info-feedback__input-name" id="feedbackFooterName" placeholder="Введите Ваше имя">
                            <input type="text" class="footer-info-feedback__input-phone" id="feedbackFooterNumber" placeholder="Введите Ваш телефон">
                            <div class="footer-info-feedback-textarea_wrapper">
                                <textarea rows="10" cols="45" class="footer-info-feedback-textarea_wrapper__textarea" id="feedbackFooterText" placeholder="Напишите здесь Ваше сообщение"></textarea>
                                <button class="footer-info-feedback-textarea_wrapper__button" id="feedbackFooterSend"><i class="fa fa-paper-plane"></i></button>
                            </div>
                            <div class="form-check feedback-concentpolicy">
                                <input type="checkbox" class="form-check-input feedback-concentpolicy__checkbox" id="feedbackFooterConcentPolicy" require>
                                <label class="form-check-label  feedback-concentpolicy__label" for="feedback-concentpolicy">Я даю согласие на обработку <a href ="{{route('site.policy')}}">моих персональных
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
                        <div class=" footer-copyright__download-catalog"><a href="{{asset('files/sample.pdf')}}" target="_blank"><img class="mr-2 img-fluid" src="{{asset('images/template/download-catalog-footer.png')}}" alt="Скачать каталог продукции">Скачать каталог продукции</a></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/imask"></script>
    <!-- <script src="{{ asset('plugins/owlcarousel/owl.carousel.min.js')}}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script src="https://api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&lang=ru-RU" type="text/javascript"></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
</body>

</html>
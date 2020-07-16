@extends('layouts.user')

@section('content')
<main class="pb-5 pt-5 text-sm-center text-md-left news">

        <div class="container breadcrumbs">
            <a href="">Главная</a> > <a href="">Новости</a> > <a href="">Интересное</a>
        </div>
        <div class="container">
            <h1 class="mt-5">Новости нашей компании</h1>
        </div>
        <div class="container filter mt-5">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-4 col-xs-12 filter__category mt-2">
                    Выберите категорию<i class="fa fa-angle-down ml-2"></i>
                </div>
                <div class="col-md-3 filter__year">
                    <i class="fa fa-angle-left mr-2"></i>2018 2019 2020 <i class="fa fa-angle-right ml-2"></i></2018>
                </div>
                <div class="col-md-5 filter__search">
                    <i class="fa fa-search mr-2"></i><input type="text" class="filter__search-input"
                        placeholder="Введите поисковый запрос">
                </div>
            </div>
        </div>
        <div class="container hashtags mt-5 mb-5">
            <a class="hashtags__tag" href="tag"># интересное # годовой отчет # наши проекты # наши награды # мылй бизнес # новый формат  # тележки
                # федеральная помощь # камчатка  # жизнь # большой проект  # моховик  # рыбзавод  # лучшее 2020
                # собаки  # рыба  # горы  # пляж  # слово  # слово  # слово  # слово</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-11" id="article">
                    <div class="row news-block mb-5">
                        <div class="col-md-4 col-xs-12 news-block__image">
                            <img src="images/template/novosti.jpg" alt="Новость" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-xs-12 news-short-info">
                            <div class="row news-short-info__misc d-flex align-items-center justify-content-start">
                                <span class="mr-4 col-5">12.05.2020</span>
                                <div class="col-5">
                                    <i class="fa fa-eye"></i>
                                    <span>222002</span>
                                </div>
                            </div>
                            <h2 class="news-short-info__header mt-3 mb-3">
                                Новость на сайт
                            </h2>
                            <div class="news-short-info__short-desc">
                                <p>С 4 по 5 декабря 2020 г. в Москве, в гостинице «Балчуг Кемпински Москва»
                                    по адресу: ул. Балчуг, д.1 состоится 4-й ежегодный форум и выставка
                                    «Тепличные Комплексы России и СНГ»</p>
                            </div>
                            <div class="">
                                <a href="#" class="news-short-info__show-more">
                                    Узнать подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row news-block mb-5">
                        <div class="col-md-4 col-xs-12 news-block__image">
                            <img src="images/template/novosti.jpg" alt="Новость" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-xs-12 news-short-info">
                            <div class="row news-short-info__misc d-flex align-items-center justify-content-start">
                                <span class="mr-4 col-5">12.05.2020</span>
                                <div class="col-5">
                                    <i class="fa fa-eye"></i>
                                    <span>222002</span>
                                </div>
                            </div>
                            <h2 class="news-short-info__header mt-3 mb-3">
                                Новость на сайт
                            </h2>
                            <div class="news-short-info__short-desc">
                                <p>С 4 по 5 декабря 2020 г. в Москве, в гостинице «Балчуг Кемпински Москва»
                                    по адресу: ул. Балчуг, д.1 состоится 4-й ежегодный форум и выставка
                                    «Тепличные Комплексы России и СНГ»</p>
                            </div>
                            <div class="">
                                <a href="#" class="news-short-info__show-more">
                                    Узнать подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row news-block mb-5">
                        <div class="col-md-4 col-xs-12 news-block__image">
                            <img src="images/template/novosti.jpg" alt="Новость" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-xs-12 news-short-info">
                            <div class="row news-short-info__misc d-flex align-items-center justify-content-start">
                                <span class="mr-4 col-5">12.05.2020</span>
                                <div class="col-5">
                                    <i class="fa fa-eye"></i>
                                    <span>222002</span>
                                </div>
                            </div>
                            <h2 class="news-short-info__header mt-3 mb-3">
                                Новость на сайт
                            </h2>
                            <div class="news-short-info__short-desc">
                                <p>С 4 по 5 декабря 2020 г. в Москве, в гостинице «Балчуг Кемпински Москва»
                                    по адресу: ул. Балчуг, д.1 состоится 4-й ежегодный форум и выставка
                                    «Тепличные Комплексы России и СНГ»</p>
                            </div>
                            <div class="">
                                <a href="#" class="news-short-info__show-more">
                                    Узнать подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row news-block mb-5">
                        <div class="col-md-4 col-xs-12 news-block__image">
                            <img src="images/template/novosti.jpg" alt="Новость" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-xs-12 news-short-info">
                            <div class="row news-short-info__misc d-flex align-items-center justify-content-start">
                                <span class="mr-4 col-5">12.05.2020</span>
                                <div class="col-5">
                                    <i class="fa fa-eye"></i>
                                    <span>222002</span>
                                </div>
                            </div>
                            <h2 class="news-short-info__header mt-3 mb-3">
                                Новость на сайт
                            </h2>
                            <div class="news-short-info__short-desc">
                                <p>С 4 по 5 декабря 2020 г. в Москве, в гостинице «Балчуг Кемпински Москва»
                                    по адресу: ул. Балчуг, д.1 состоится 4-й ежегодный форум и выставка
                                    «Тепличные Комплексы России и СНГ»</p>
                            </div>
                            <div class="">
                                <a href="#" class="news-short-info__show-more">
                                    Узнать подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row news-block mb-5">
                        <div class="col-md-4 col-xs-12 news-block__image">
                            <img src="images/template/novosti.jpg" alt="Новость" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-xs-12 news-short-info">
                            <div class="row news-short-info__misc d-flex align-items-center justify-content-start">
                                <span class="mr-4 col-5">12.05.2020</span>
                                <div class="col-5">
                                    <i class="fa fa-eye"></i>
                                    <span>222002</span>
                                </div>
                            </div>
                            <h2 class="news-short-info__header mt-3 mb-3">
                                Новость на сайт
                            </h2>
                            <div class="news-short-info__short-desc">
                                <p>С 4 по 5 декабря 2020 г. в Москве, в гостинице «Балчуг Кемпински Москва»
                                    по адресу: ул. Балчуг, д.1 состоится 4-й ежегодный форум и выставка
                                    «Тепличные Комплексы России и СНГ»</p>
                            </div>
                            <div class="">
                                <a href="#" class="news-short-info__show-more">
                                    Узнать подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row news-block mb-5">
                        <div class="col-md-4 col-xs-12 news-block__image">
                            <img src="images/template/novosti.jpg" alt="Новость" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-xs-12 news-short-info">
                            <div class="row news-short-info__misc d-flex align-items-center justify-content-start">
                                <span class="mr-4 col-5">12.05.2020</span>
                                <div class="col-5">
                                    <i class="fa fa-eye"></i>
                                    <span>222002</span>
                                </div>
                            </div>
                            <h2 class="news-short-info__header mt-3 mb-3">
                                Новость на сайт
                            </h2>
                            <div class="news-short-info__short-desc">
                                <p>С 4 по 5 декабря 2020 г. в Москве, в гостинице «Балчуг Кемпински Москва»
                                    по адресу: ул. Балчуг, д.1 состоится 4-й ежегодный форум и выставка
                                    «Тепличные Комплексы России и СНГ»</p>
                            </div>
                            <div class="">
                                <a href="#" class="news-short-info__show-more">
                                    Узнать подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row news-block mb-5">
                        <div class="col-md-4 col-xs-12 news-block__image">
                            <img src="images/template/novosti.jpg" alt="Новость" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-xs-12 news-short-info">
                            <div class="row news-short-info__misc d-flex align-items-center justify-content-start">
                                <span class="mr-4 col-5">12.05.2020</span>
                                <div class="col-5">
                                    <i class="fa fa-eye"></i>
                                    <span>222002</span>
                                </div>
                            </div>
                            <h2 class="news-short-info__header mt-3 mb-3">
                                Новость на сайт
                            </h2>
                            <div class="news-short-info__short-desc">
                                <p>С 4 по 5 декабря 2020 г. в Москве, в гостинице «Балчуг Кемпински Москва»
                                    по адресу: ул. Балчуг, д.1 состоится 4-й ежегодный форум и выставка
                                    «Тепличные Комплексы России и СНГ»</p>
                            </div>
                            <div class="">
                                <a href="#" class="news-short-info__show-more">
                                    Узнать подробнее
                                </a>
                            </div>
                        </div>
                    </div><div class="row news-block mb-5">
                        <div class="col-md-4 col-xs-12 news-block__image">
                            <img src="images/template/novosti.jpg" alt="Новость" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-xs-12 news-short-info">
                            <div class="row news-short-info__misc d-flex align-items-center justify-content-start">
                                <span class="mr-4 col-5">12.05.2020</span>
                                <div class="col-5">
                                    <i class="fa fa-eye"></i>
                                    <span>222002</span>
                                </div>
                            </div>
                            <h2 class="news-short-info__header mt-3 mb-3">
                                Новость на сайт
                            </h2>
                            <div class="news-short-info__short-desc sticky ">
                                <p>С 4 по 5 декабря 2020 г. в Москве, в гостинице «Балчуг Кемпински Москва»
                                    по адресу: ул. Балчуг, д.1 состоится 4-й ежегодный форум и выставка
                                    «Тепличные Комплексы России и СНГ»</p>
                            </div>
                            <div class="">
                                <a href="#" class="news-short-info__show-more">
                                    Узнать подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1 news-controls flex-column justify-content-around d-none d-sm-block" id="aside1">
                    <i class="fa fa-arrow-circle-o-up news-controls__up"></i>
                    <i class="fa fa-arrow-circle-o-down news-controls__down"></i>
                </div>
            </div>
        </div>
    </main>
@endsection

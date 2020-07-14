@extends('layouts.user')

@section('content')
<main class="text-sm-center text-md-left news">
    <div class="slider">
        <div class="container-fluid slider-block block-1 pt-5 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 slider-block-text">
                        <h2 class="slider-block__header">Делаем под вас</h2>
                        <p class="slider-block__description">
                            Делаем любые варианты исполнения
                            по вашему техническому заданию.
                            Под любые размеры под любые
                            труборельсы, нагрузка, ширина
                            высота, под ваши
                            потребности !
                        </p>
                    </div>
                    <div class="col-md-8">
                        <img src="images/template/slider/block-1/image.png" alt="Делаем под вас">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid catalog-outer pt-3 pb-2 mt-4" id="catalog-parallax">
        <div class="catalog-tomato"></div>
        <div class="catalog-pepper"></div>
        <div class="catalog-leaf"></div>
        <div class="catalog-cabbage"></div>
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <div class="collapse-catalog__arrow-left d-flex align-items-center owl-nav disabled">
                <i class="fa fa-angle-left customPrevBtnProduct"></i>
            </div>
            <div class="container mr-1 ml-1">

                <div class="catalog">
                    <div class="row">
                        <div class="owl-carousel products-catalog">
                            <div class="mb-2 catalog-block">
                                <a href="">
                                    <img src="images/template/catalog/1.png" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Пример товара 1
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания товара
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="">
                                    <img src="images/template/catalog/1.png" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Пример товара 1
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания товара
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="">
                                    <img src="images/template/catalog/1.png" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Пример товара 1
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания товара
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="">
                                    <img src="images/template/catalog/1.png" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Пример товара 1
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания товара
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="">
                                    <img src="images/template/catalog/1.png" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Пример товара 1
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания товара
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="">
                                    <img src="images/template/catalog/1.png" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Пример товара 1
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания товара
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="">
                                    <img src="images/template/catalog/1.png" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Пример товара 1
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания товара
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="collapse-catalog__arrow-right d-flex align-items-center owl-nav disabled">
                <i class="fa fa-angle-right customNextBtnProduct"></i>
            </div>
        </div>


    </div>
    <div class="container-fluid download-catalog-outer pt-3 pb-2">
        <div class="container">
            <div class="row d-md-flex justify-content-between download-catalog">
                <div class="col-md-6 col-xs-12 d-flex justify-content-start">
                    <img src="images/template/download-catalog.png" class="img-fluid mr-4" alt="Полный каталог">
                    <div>
                        <div class="download-catalog__text">
                            Полный каталог
                        </div>
                        <div class="download-catalog__subtext">
                            Полный каталог продукции и услуг Вы можете<br>бесплатно скачать на анашем сайте в
                            формате PDF
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-xs-12">
                    <button class="download-catalog__button" id="callback-action">
                        Скачать
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid about-outer pt-3 pb-2" id="about-parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 about-slider">
                    <img src="images/template/about-slider/1.png" class="about-slider__item img-fluid" alt="Литек. Правильные технические решения">
                    <img src="images/template/about-slider/2.png" class="about-slider__item img-fluid" alt="Литек. Правильные технические решения">
                    <img src="images/template/about-slider/3.png" class="about-slider__item img-fluid" alt="Литек. Правильные технические решения">
                    <img src="images/template/about-slider/4.png" class="about-slider__item img-fluid" alt="Литек. Правильные технические решения">
                    <img src="images/template/about-slider/5.png" class="about-slider__item img-fluid" alt="Литек. Правильные технические решения">
                    <img src="images/template/about-slider/6.png" class="about-slider__item img-fluid" alt="Литек. Правильные технические решения">
                    <img src="images/template/about-slider/7.png" class="about-slider__item img-fluid" alt="Литек. Правильные технические решения">
                    <img src="images/template/about-slider/8.png" class="about-slider__item img-fluid" alt="Литек. Правильные технические решения">
                    <img src="images/template/about-slider/9.png" class="about-slider__item img-fluid" alt="Литек. Правильные технические решения">
                    <img src="images/template/about-slider/10.png" class="about-slider__item img-fluid" alt="Литек. Правильные технические решения">
                    <img src="images/template/about-slider/11.png" class="about-slider__item img-fluid" alt="Литек. Правильные технические решения">
                    <img src="images/template/about-slider/12.png" class="about-slider__item img-fluid" alt="Литек. Правильные технические решения">
                    <img src="images/template/about-slider/13.png" class="about-slider__item img-fluid" alt="Литек. Правильные технические решения">
                </div>
                <div class="col-md-5 col-xs-12 about">
                    <img src="images/template/logo.png" class="about__logo img-fluid" alt="Литек. Правильные технические решения" title="Литек. Правильные технические решения" />
                    <h3 class="about__header mt-3 mb-3">Коротко о нашей компании</h3>
                    <p class="about__text">Наша компания является многопрофильным
                        предприятием, осуществляющим:</p>
                    <p class="about__text">
                        Проектирование, изготовление и поставку,
                        ремонт оборудования, деталей и узлов, инструмента
                        для предприятий различных отраслей экономики
                        (добыча и переработка природных ресурсов и
                        полезных ископаемых, металлургия, машиностроение,
                        энергетика, сельское хозяйство, пищевая промышленность,
                        транспорт, медицина, торговля, ЖКХ и т.д.)
                        и предлагает свои услуги по обеспечению
                        ремонтно-эксплуатационных нужд
                        и планов технического развития
                        Вашего предприятия.</p>
                    <a href="" class="about__link">Читать подробнее</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-11 newsCarousel">
                <div class="row news-block mt-5 mb-5">
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
                            <a href="novost.html" class="news-short-info__show-more">
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
                            <a href="novost.html" class="news-short-info__show-more">
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
                            <a href="novost.html" class="news-short-info__show-more">
                                Узнать подробнее
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1 news-controls flex-column justify-content-around d-none d-sm-block">
                <i class="fa fa-arrow-circle-o-up news-controls__up"></i>
                <i class="fa fa-arrow-circle-o-down news-controls__down"></i>
            </div>
        </div>
    </div>
    <div id="map"></div>
</main>
@endsection
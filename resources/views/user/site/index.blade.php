@extends('layouts.user')

@section('content')
<main class="text-sm-center text-md-left news">
    <div class="slider main-slider">
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
                        <img class="img-fluid" src="images/template/slider/block-1/image.png" alt="Делаем под вас">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid slider-block block-1 pt-5 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <img class="img-fluid" src="images/template/slider/block-2/image.png" alt="Делаем под вас">
                    </div>
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
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid catalog-outer pt-5 pb-3" id="catalogParallax">
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
                                <a href="{{route('products.phrbg')}}">
                                    <img src="{{ asset('images/template/catalog/phrbg.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Серия Пхр-б/г
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Тележка химостойкая большегрузная под еврокуб 1м3
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.p2r')}}">
                                    <img src="{{ asset('images/template/catalog/p2r.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Серия П2Р
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Тележка для сбора урожая и обслуживания теплиц
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.p1pna')}}">
                                    <img src="{{ asset('images/template/catalog/p1pna.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Серия П1пна
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Тележка для сбора урожая и обслуживания теплиц
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.p1rbg')}}">
                                    <img src="{{ asset('images/template/catalog/p1rbg.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Серия П1р-б/г
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Тележка большегрузная под европаллет
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.p1kpm')}}">
                                    <img src="{{ asset('images/template/catalog/p1kpm.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Серия П1кпм
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Тележка для сбора растительных отходов
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.p1pm3shnk')}}">
                                    <img src="{{ asset('images/template/catalog/p1pm2.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Серия П1пм3-шнк
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Тележка для сбора урожая и обслуживания теплиц
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.p2pm2n')}}">
                                    <img src="{{ asset('images/template/catalog/p2pm2n.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Серия П2пм-2н
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Тележка 2х ярусная прицепная для сбора урожая и обслуживания теплиц
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.p2rn')}}">
                                    <img src="{{ asset('images/template/catalog/p2rn.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Серия П2рн-1х0.85мг
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Тележка 2х ярусная ручная для обслуживания теплиц
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.p2rv')}}">
                                    <img src="{{ asset('images/template/catalog/p2rv.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Серия П2рв
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        111111111
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.p3rpsh')}}">
                                    <img src="{{ asset('images/template/catalog/p3rpsh.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Серия П3рпш
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Тележка-рольганг для сбора урожая
                                    </p>
                                </a>
                            </div>
                            {{-- <div class="mb-2 catalog-block">
                                <a href="{{route('products.p1pm2')}}">
                                    <img src="{{ asset('images/template/catalog/p1pm2.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Серия П1пм3-шнк
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Тележка для сбора урожая и обслуживания теплиц
                                    </p>
                                </a>
                            </div> --}}
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.pet')}}">
                                    <img src="{{ asset('images/template/catalog/pet.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Серия ПЕТ
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Тележка многоярусная для обслуживания теплиц
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.parts')}}">
                                    <img src="{{ asset('images/template/catalog/parts.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        Запасные части
                                    </h2>
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
                <div class="col-md-6 col-xs-12 d-sm-flex justify-content-start">
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
                    <a href="{{asset('files/sample.pdf')}}" target="_blank" class="download-catalog__button" id="callback-action">
                        Скачать
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid about-outer pt-3 pb-2" id="about-parallax">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5 col-xs-12 about-slider">
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
                </div>
                <div class="col-md-6 col-xs-12 about">
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
                    <a href="{{route('site.company')}}" class="about__link">Читать подробнее</a>
                </div>
            </div>
        </div>
    </div>
    
    <div id="map"></div>
</main>
@endsection
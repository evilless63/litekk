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
                                <a href="{{route('products.t001')}}">
                                    <img src="{{ asset('images/template/catalog/t001.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        t001
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания t001
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.t004')}}">
                                    <img src="{{ asset('images/template/catalog/t004.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        t004
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания t004
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.rolgang')}}">
                                    <img src="{{ asset('images/template/catalog/rolgang.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        rolgang
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания rolgang
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.t003')}}">
                                    <img src="{{ asset('images/template/catalog/t003.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        t003
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания t003
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.telega')}}">
                                    <img src="{{ asset('images/template/catalog/telega.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        telega
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания telega
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.p1pm2')}}">
                                    <img src="{{ asset('images/template/catalog/p1pm2.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        p1pm2
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания p1pm2
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.p1pna')}}">
                                    <img src="{{ asset('images/template/catalog/p1pna.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        p1pna
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания p1pna
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.p2r')}}">
                                    <img src="{{ asset('images/template/catalog/p2r.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        p2r
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания p2r
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.p2rn')}}">
                                    <img src="{{ asset('images/template/catalog/p2rn.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        p2rn
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания p2rn
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.tm2')}}">
                                    <img src="{{ asset('images/template/catalog/tm2.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        tm2
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания tm2
                                    </p>
                                </a>
                            </div>
                            <div class="mb-2 catalog-block">
                                <a href="{{route('products.parts')}}">
                                    <img src="{{ asset('images/template/catalog/parts.png')}}" class="catalog-block__image" alt="">
                                    <h2 class="catalog-block__header mt-3">
                                        parts
                                    </h2>
                                    <p class="catalog-block__description mt-2">
                                        Пример короткого описания parts
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
                    <img src="images/template/about-slider/11.png" class="about-slider__item img-fluid" alt="Литек. Правильные технические решения">
                    <img src="images/template/about-slider/12.png" class="about-slider__item img-fluid" alt="Литек. Правильные технические решения">
                    <img src="images/template/about-slider/13.png" class="about-slider__item img-fluid width50" alt="Литек. Правильные технические решения">
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
    <div class="container">
        <div class="row align-items-center">
            <div class="col-11 newsCarousel">
                @foreach($news as $new)
                <div class="row news-block mt-5 mb-5">
                    <div class="col-md-4 col-xs-12 news-block__image">
                        <img src="{{$new->image}}" alt="{{$new->header}}" class="img-fluid">
                    </div>
                    <div class="col-md-6 col-xs-12 news-short-info">
                        <div class="row news-short-info__misc d-flex align-items-center justify-content-start">
                            <span class="mr-4 col-5">{{$new->published_at}}</span>
                            <!-- <div class="col-5">
                                <i class="fa fa-eye"></i>
                                <span>222002</span>
                            </div> -->
                        </div>
                        <h2 class="news-short-info__header mt-3 mb-3">
                        {{$new->header}}
                        </h2>
                        <div class="news-short-info__short-desc">
                            <p>{{$new->description}}</p>
                        </div>
                        <div class="">
                            <a href="{{$new->slug}}" class="news-short-info__show-more">
                                Узнать подробнее
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-1 news-controls flex-column justify-content-around d-none d-sm-block">
            {{ $news->links() }}
                <i class="fa fa-angle-up news-controls__up mb-5"></i>
                <i class="fa fa-angle-down news-controls__down"></i>
            </div>
        </div>
    </div>
    <div id="map"></div>
</main>
@endsection
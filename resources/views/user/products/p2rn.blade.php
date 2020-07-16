@extends('layouts.user')

@section('content')
<main class="pb-5 pt-5 text-sm-center text-md-left product-background product">

    <div class="container breadcrumbs">
        <a href="">Главная</a> > <a data-toggle="collapse" href="#collapseCatalog">Товары</a> > <a href="">Тележка рольганг</a>
    </div>
    <div class="container pt-5">
        <div class="row product d-flex align-items-center">
            <div class="col-md-6 col-xs-12">
                <img src="{{asset('images/products/p2rn/perspective.png')}}" class="img-fluid product__image" alt="Тележка рольганг">
            </div>
            <div class="col-md-6 col-xs-12">
                <h1 class="product__header">Тележка рольганг</h1>
                <p class="product__subheader">
                    Тележки для сбора урожая, серия П3рпш
                </p>
            </div>
        </div>
    </div>
    <div style="    height: 150px;
        overflow: hidden;
        margin-top: -105px;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #dcdcdc;"></path>
        </svg></div>
    <div class="container-fluid chars">
        <div class="container">
            <div class="row pt-3">
                <div class="col">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Длина (по осям сцепки в поезд при опущенном дышле) </td>
                                <td>2860 мм</td>
                            </tr>
                            <tr>
                                <td>Высота (с верхней полкой)</td>
                                <td>1532 мм</td>
                            </tr>
                            <tr>
                                <td>Ширина (по кожухам центральных колес) </td>
                                <td>766 мм</td>
                            </tr>
                            <tr>
                                <td>Роликовая платформа (рольганг)</td>
                                <td>2415х474 мм с 47 роликами Ø 32 мм</td>
                            </tr>
                            <tr>
                                <td>Просвет между роликовой и ходовой платформами</td>
                                <td>255 мм</td>
                            </tr>
                            <tr>
                                <td>Верхняя полка</td>
                                <td>2105х410 мм глубиной 30 мм</td>
                            </tr>
                            <tr>
                                <td>Масса тележки</td>
                                <td>95 кг</td>
                            </tr>
                            <tr>
                                <td>Максимальная нагрузка на телегу</td>
                                <td>500 кг</td>
                            </tr>

                        </tbody>

                    </table>
                    <div class="table__e2e2e2">
                        Ходовая платформа 2490х700мм оснащена центр. (рулевыми) колесами Ø200- 2шт.,
                        поворотными колесами Ø125- 4шт.,полиамидными катками Ø Ø140/90хL145 -4шт
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 col-xs-12 top__product">
                <img class="img-fluid" src="{{asset('images/products/p2rn/top.jpg')}}" alt="">
                <p class="mt-5">Изготовлены ООО «ЛИТЭК» для ООО «Агро-Инвест»
                    по договору поставки №АИ/2018/С и спецификации
                    №7 от 04.02.19г. в соответствии с согласованным
                    сторонами черт. П3рпш.00.00.00.000ВО и КД
                    из приложения №2 к спецификации.</p>
            </div>
            <div class="col-md-6 col-xs-12 bottom__product">
                <img class="img-fluid" src="{{asset('images/products/p2rn/bottom.jpg')}}" alt="">
                <p class="mt-5">
                    Тележки П3рпш (зав. №№ 126аи/2019 – 170аи/2019)
                    прошли выходной контроль на соответствие условиям
                    договора, техническим требованиям заказчика и
                    кон-структорской документации изготовителя и
                    признаны годными к эксплуатации и поставке.
                </p>
            </div>
        </div>
        <div class="row mt-5 d-flex">
            <div class="col">
                <button class="model-show d-flex align-items-center">
                    <img class="img-fluid" src="{{asset('images/template/products/3dmodel.png')}}" alt="">
                    <span>3D МОДЕЛЬ</span>
                </button>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <img src="{{asset('images/products/p2rn/front.jpg')}}" alt="">
            </div>
        </div>

        <div class="row benefits mt-5 pt-5">
            <div class="col-md-3">
                <div class="d-flex flex-column">
                    <div class="p-2">
                        <p class="benefits__number">01</p>
                        <p class="benefits__desc">Мы используем только
                            качественные марки металла
                            которые имеют сертификаты
                            соответствия</p>
                    </div>
                    <div class="p-2">
                        <p class="benefits__number">02</p>
                        <p class="benefits__desc">Покупая у нас, Вы имеете
                            гарантии и уверенность в
                            завтрашнем дне !</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-flex justify-content-center">
                <img class="img-fluid" src="{{asset('images/products/p2rn/left.jpg')}}" alt="">
            </div>
            <div class="col-md-3">
                <div class="d-flex flex-column">
                    <div class="p-2">
                        <p class="benefits__number">03</p>
                        <p class="benefits__desc">Вся наша продукция проходит
                            тестирование и имеет все
                            разрешительные документы</p>
                    </div>
                    <div class="p-2">
                        <p class="benefits__number">04</p>
                        <p class="benefits__desc">Мы доставим любую
                            нашу продукцияю
                            в любую точку РФ
                            и мира!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container product-feedback mt-5 pt-5">
        <div class="row">
            <div class="col">
                <h2>Остались вопросы?</h2>
            </div>
        </div>
        <div class="row feedback-form mt-5">
            <div class="col-md-5 col-sx-12">
                <input type="text" class="feedback-form__name" placeholder="Введите Ваше имя">
                <input type="text" class="feedback-form__email" placeholder="Введите Ваш email">
                <input type="hidden" class="feedback-form__file_hidden">
                <button type="text" class="feedback-form__file d-flex justify-content-start align-items-center"><img src="images/template/add_files.png" class="mr-3" alt=""> Прикрепить фото и
                    документы</button>
            </div>
            <div class="col-md-7 col-sx-12">
                <div class="row">
                    <textarea rows="5" cols="45" class="feedback-form__textarea" placeholder="Введите Ваше сообщение"></textarea>
                    <div class="col-md-12"></div>
                    <button type="text" class="feedback-form__push">Отправить</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container product-docs mt-5 pt-5">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <a href="#" type="text" class="d-flex justify-content-start align-items-center"><img src="images/template/product-docs.png" class="mr-3" alt="">ПОЛНАЯ ДОКУМЕНТАЦИЯ</a>
            </div>
        </div>
    </div>

    <div class="container product-etc mt-5 pt-5">
        <div class="row">
            <div class="col">
                <p>ООО «ЛИТЭК» предлагает разработку рабочей конструкторской документации для производства
                    оборудования в России взамен зарубежного. Работы производятся на основании заявок,
                    технических требований и условий российских заказчиков, а также в соответсвии
                    с потребностями рынка. При выполнении работ соблюдаются требования техрегламентов,
                    ГОСТ, Правил, ЕСКД и другой нормативной документации, действующей в Российской Федерации.
                    Возможна технологическая подготовка производства опытных образцов.</p>
                <p>ООО «ЛИТЭК» освоено импортозамещение для предприятий различных отраслей экономики:
                    добыча и переработка природных ресурсов и полезных ископаемых, металлургия,
                    машиностроение, судоходство, энергетика, сельское хозяйство, пищевая
                    промышленность, транспорт, медицина, торговля, ЖКХ и т.д</p>
            </div>
        </div>
    </div>
</main>
@endsection

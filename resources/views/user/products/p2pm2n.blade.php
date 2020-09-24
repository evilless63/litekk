@extends('layouts.user')

@section('content')
<main class="pb-5 pt-5 text-sm-center text-md-left product-background product">

    <div class="container breadcrumbs">
        <a href="/">Главная</a> > <a data-toggle="collapse" href="#collapseCatalog">Товары</a> > <a href="">Серия П2пм-2н</a>
    </div>
    <div class="container pt-5">
        <div class="row product d-flex align-items-center">
            <div class="col-md-6 col-xs-12">
                <img src="{{asset('images/products/p2pm2n/perspective.png')}}" class="img-fluid product__image" alt="Серия П2пм-2н">
            </div>
            <div class="col-md-6 col-xs-12">
                <h1 class="product__header">Серия П2пм-2н</h1>
                <p class="product__subheader">
                    Тележка 2х ярусная прицепная для сбора урожая и обслуживания теплиц
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
                                <td>Длина (от края заднего поручня по конец опущенного дышла)</td>
                                <td>2364,2 мм</td>
                            </tr>
                            <tr>
                                <td>Высота (от пола по верху заднего поручня)</td>
                                <td>843 мм</td>
                            </tr>
                            <tr>
                                <td>Ширина (по площадкам поворотных колес)</td>
                                <td>808 мм</td>
                            </tr>
                            <tr>
                                <td>Ходовая платформа (нижняя рама)</td>
                                <td>2065х600 мм</td>
                            </tr>
                            <tr>
                                <td>Съемная полка</td>
                                <td>1950х600 мм</td>
                            </tr>
                            <tr>
                                <td>Грузоподъемность</td>
                                <td>500 кг</td>
                            </tr>
                            <tr>
                                <td>Масса тележки</td>
                                <td>93,5 кг</td>
                            </tr>
                        </tbody>

                    </table>
                    <div class="table__e2e2e2">
                        <p>Ходовая платформа включает в себя - раму (из трубы 50х50х2 с приклепанным оцинкованным листом 1,2мм, грузоприемной площадкой 1925х600мм, высотой загрузочной плоскости от пола 220мм) и колесную часть: 
                            <ul>
                                <li>4 полиамидных катка ØØ140/90мм длиной 145мм для перемещения по труборельсам ØØ50-57мм с межосевым расстоянием 490-560мм;</li>
                                <li>2 центральных (рулевых) обрезиненных колеса Ø200мм;</li>
                                <li>4 поворотных колеса Ø100мм, гуммированных полиуретаном, оснащенных защитными оцинкованными дугами.</li>
                            </ul>

                            Рулевые колеса и катки установлены на оси и шарикоподшипники. Съемная полка изготовлена из трубы 40х20х2 с отбортовкой рамы 10мм и оснащена 2мя съемными алюминиевыми настилами 2,0мм (с центральными прорезями для захвата) и крепится к поручням болтами через специальные ушки, этажный просвет 400мм.
                        </p>
                        <p>
                        Поручни - съемные и служат для ручного управления, а для сцепки тележек друг с другом и прицепу к напольному транспорту имеются опускные дышла и фаркопы. Окраска непокрытых поверхностей – порошковой эмалью.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 col-xs-12 top__product">
                <img class="img-fluid" src="{{asset('images/products/p2pm2n/top.jpg')}}" alt="">
                <p class="mt-5">Тележка предназначена для сбора урожая и обслуживания теплиц и перемещается индивидуально вручную по труборельсам (отопительные регистры) и полу теплиц или в сцепке с другими тележками напольным транспортом.</p>
            </div>
            <div class="col-md-6 col-xs-12 bottom__product">
                <img class="img-fluid" src="{{asset('images/products/p2pm2n/bottom.jpg')}}" alt="">
                <p class="mt-5">
                    Гарантийный срок эксплуатации – покупные колеса – 6 месяцев, остальное изделие - 1год. Расчетный срок службы –7 лет.
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
                <img src="{{asset('images/products/p2pm2n/front.jpg')}}" alt="">
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
                <img class="img-fluid" src="{{asset('images/products/p2pm2n/left.jpg')}}" alt="">
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
                <input type="text" class="feedback-form__name" id="feedbakContactsName" placeholder="Введите Ваше имя">
                <input type="text" class="feedback-form__email" id="feedbakContactsEmail" placeholder="Введите Ваш email">
                <input type="hidden" class="feedback-form__file_hidden" id="feedbakContactsFile">
                <button type="text" class="feedback-form__file d-flex justify-content-start align-items-center"><img src="{{asset('images/template/add_files.png')}}" class="mr-3" alt="">Приложите файлы (при желании)</button>
            </div>
            <div class="col-md-7 col-sx-12">
                <div class="row">
                    <textarea rows="5" cols="45" class="feedback-form__textarea" id="feedbakContactsText" placeholder="Введите Ваше сообщение"></textarea>
                    <div class="col-md-12"></div>
                    <button type="text" class="feedback-form__push" id="feedbakContactsSend">Отправить</button>
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
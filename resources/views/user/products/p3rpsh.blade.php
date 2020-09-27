@extends('layouts.user')

@section('content')
<main class="pb-5 pt-5 text-sm-center text-md-left product-background product">

    <div class="container breadcrumbs">
        <a href="/">Главная</a> > <a data-toggle="collapse" href="#collapseCatalog">Товары</a> > <a href="">Серия П3рпш</a>
    </div>
    <div class="container pt-5">
        <div class="row product d-flex align-items-center">
            <div class="col-md-6 col-xs-12">
                <img src="{{asset('images/products/p3rpsh/perspective.png')}}" class="img-fluid product__image" alt="Серия П3рпш">
            </div>
            <div class="col-md-6 col-xs-12">
                <h1 class="product__header">Серия П3рпш</h1>
                <p class="product__subheader">
                    Тележка-рольганг для сбора урожая
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
                                <td>Длина (по осям сцепки в поезд при опущенном дышле)</td>
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
                        <p>Ходовая платформа 2490х700мм оснащена</p>
                        <ul>
                            <li>центр. (рулевыми) колесами Ø200- 2шт.</li>
                            <li>поворотными колесами Ø125- 4шт.</li>
                            <li>полиамидными катками Ø Ø140/90хL145 -4шт</li>
                        </ul>
                        <p>
                            Металлоконструкции - сборно-сварные из стального стандартного металлопроката (лист, пруток, профильная и круглая труба) и деталей, изготавливаемых резкой, гибкой и мехобработкой. Тележка может трансформироваться в 2х и 1 этажную. Конструкция позволяет использовать тележку на автоматизированных системах разгруки и сортировки голландских теплиц. Межосевое расстояние труборельсов ØØ51-57мм – от 490 до 565мм.
                        </p>
                        <p>
                            Окраска непокрытых поверхностей – порошковой эмалью.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 col-xs-12 top__product">

                <p class="mt-5">Тележки-рольганги имеют ходовую раму закрытого типа и 3 этажа для размещения грузов. 1м этажём является загрузочная (верхняя) площадка платформы, состоящей из колесной части и ходовой рамы закрытого типа, которая максимально исключает зацепы стеблями растений за элементы конструкции, т.к. вся колесная часть скрыта под неё. В её проемы могут устанавливаются оцинкованные поддоны (дополнительная опция).
                </p>
                <p>
                    2м этажём является загрузочная площадка съемного рольганга, устанавливающегося на ходовую раму на подставках и крепящегося болтами к торцевым поручням платформы, которые служат для ручного управления тележкой. 3м этажем является съемная и регулируемая по высоте верхняя полка, устанавливающаяся на стойках, крепящихся к платформе и рольгангу. Для сцепки тележек друг с другом в поезд и прицепу к напольному транспорту имеется опускное дышло и фаркоп. Поворотные колеса позволяют маневрировать по полу индивидуально и в сцепке.
                </p>
            </div>

        </div>

        <div class="row mt-5">
            <div class="col-md-6 col-xs-12 top__product">
                <img class="img-fluid" src="{{asset('images/products/p3rpsh/top.jpg')}}" alt="">
                <p class="mt-5">Тележки предназначены для сбора урожая и обслуживания теплиц.
                    При эксплуатации происходит их индивидуальное перемещение вручную по труборельсам (отопительные регистры) и полу теплиц или в сцепке с другими тележками напольным транспортом. Для перемещения по регистрам установлены на осях и шарикоподшипниках 4 полиамидных катка с ребордами. Для перемещения по полу установлены центральные (рулевые) колеса на осях и колеса на поворотных опорах.
                </p>
            </div>
            <div class="col-md-6 col-xs-12 bottom__product">
                <img class="img-fluid" src="{{asset('images/products/p3rpsh/bottom.jpg')}}" alt="">
                <p class="mt-5">
                    Гарантийный срок эксплуатации тележек 1год, покупных колес – 6 месяцев. Расчетный срок службы тележек – 7 лет.
                </p>
            </div>
        </div>
        <div class="row mt-5 d-flex">
            <div class="col">
                <a href="{{route('3dmodel', 'p3rpsh')}}" target="_blank" class="model-show d-flex align-items-center">
                    <img class="img-fluid" src="{{asset('images/template/products/3dmodel.png')}}" alt="">
                    <span>3D МОДЕЛЬ<br> 
                        <span>откроется в новом окне. Для загрузки требуется некоторое время, в зависимости от скорости Вашего интернет-соединения</span> </span>
                </a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <img class="img-fluid" src="{{asset('images/products/p3rpsh/front.jpg')}}" alt="">
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
                <img class="img-fluid" src="{{asset('images/products/p3rpsh/left.jpg')}}" alt="">
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
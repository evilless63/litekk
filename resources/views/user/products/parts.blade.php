@extends('layouts.user')

@section('content')
<main class="pb-5 pt-5 text-sm-center text-md-left product-background product">

    <div class="container breadcrumbs">
        <a href="/">Главная</a> > <a data-toggle="collapse" href="#collapseCatalog">Товары</a> > <a href="">Запасные части</a>
    </div>


    <div class="container">

        <div class="row mt-5">
            <div class="col-md-6 col-xs-12">
                <h2 class="parts-h2">Катки 145/140</h2>
                <img class="img-fluid" src="{{asset('images/products/parts/katok_145_140.png')}}" alt="">
                <p class="">
                </p>
            </div>
            <div class="col-md-6 col-xs-12 ">
                <h2 class="parts-h2">Катки 200</h2>
                <img class="img-fluid" src="{{asset('images/products/parts/katok_200.png')}}" alt="">
                <p class="">
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 col-xs-12 ">
                <h2 class="parts-h2">Подъемно-опускные дышла</h2>
                <img class="img-fluid" src="{{asset('images/products/parts/dishlo.png')}}" alt="">
                <p class="">Подъемно-опускные дышла предназначены для сцепки тележек в поезд и с напольным транспортом теплиц.</p>
                <p>Изготавливаются из стальных листов толщиной от 6мм методом лазерной или абразивной резки на оборудовании с ЧПУ.</p>
                <p>Конфигурация, размеры, марка стали изделий варьируются в зависимости от технического задания.
                </p>
            </div>
            <div class="col-md-6 col-xs-12 ">
                <h2 class="parts-h2">Катковые узлы</h2>
                <img class="img-fluid" src="{{asset('images/products/parts/katkovy_usel.png')}}" alt="">
                <p class="">
                    Катковые узлы состоят из:
                <ul>
                    <li>осей ØØ20-25мм</li>
                    <li>катков (полиамидный ролик Ø90 с ребордой ØØ140-200мм и 2 подшипника) с крепежом</li>
                </ul>
                Ролики вытачиваются из литых заготовок и могут иметь, при необходимости, различную внутреннюю конфигурацию под заглубление подшипников и сборку с тележкой.
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 col-xs-12 ">
                <h2 class="parts-h2">Колесные узлы</h2>
                <img class="img-fluid" src="{{asset('images/products/parts/kolesny_usel.png')}}" alt="">
                <p class="">
                    Колесные узлы состоят из:
                <ul>
                    <li>осей ØØ20-25мм</li>
                    <li>колес Ø200мм (литая резиновая шинка на ступице из алюминиевого сплава с 2 подшипниками) с крепежом</li>
                </ul>
                </p>
                <p>Колеса, при необходимости, могут иметь другие размеры и конструкцию.
                </p>
            </div>
            <div class="col-md-6 col-xs-12 ">
                <h2 class="parts-h2">Ведущий колесный узел</h2>
                
                <img class="img-fluid" src="{{asset('images/products/parts/uzel_gidravlik.png')}}" alt="">
                <a href="{{route('3dmodel', 'uzel_gidravlik')}}" target="_blank" style="margin-left: 0em" class="model-show d-flex align-items-center mb-2 company-info-block">
                    <img class="img-fluid" src="{{asset('images/template/products/3dmodel.png')}}" alt="">
                    <span>3D МОДЕЛЬ<br> 
                        <span>откроется в новом окне. Для загрузки требуется некоторое время, в зависимости от скорости Вашего интернет-соединения</span> </span>
                </a>
                <p class="">
                    Ведущий колесный узел (длиной 700мм) гидравлической самоходной тележки предназначен для её перемещения по полу и труборельсам теплиц и включает в себя:
                <ul>
                    <li>ось Ø30мм (ведущий вал)</li>
                    <li>звездочку цепной передачи</li>
                    <li>2 подшипника в корпусах (крепящихся к ходовой раме)</li>
                    <li>2 ролика Ø105мм (с полиуретановой шинкой на стальной ступице) для перемещения по труборельсам</li>
                    <li>2 колеса Ø218мм (полиамидный обод шириной 40мм на стальном фланце) для перемещения по полу (являются ребордами при перемещении по труборельсам)</li>
                    <li>шпонки и крепежныедетали</li>
                </ul>
                </p>
                <p>Ведомые катки гидравлических тележек предназначены для её перемещения по труборельсам и полу теплиц и состоят из полиамидных роликов Ø90мм с 2 подшипниками и полиамидного упрочняющего обода Ø195мм шириной 30мм, прикрепляемого на реборду ролика для её усиления при перемещении по полу.
                </p>
                <p>При необходимости размеры могут изменяться.

                </p>
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
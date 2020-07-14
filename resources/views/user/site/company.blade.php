@extends('layouts.user')

@section('content')
<main class="text-sm-center text-md-left company">

    <div class="promo-company">
        <div class="container-fluid promo-company-block block-1 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 promo-company-block-text">
                        <h2 class="promo-company-block__header">О КОМПАНИИ</h2>
                        <p class="promo-company-block__description">
                            Многие думают, что Lorem Ipsum - взятый с потолка
                            псевдо-латинский набор слов, но это не совсем так.
                            Его корни уходят в один фрагмент классической латыни
                            45 года н.э., то есть более двух тысячелетий назад.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid statistics  pt-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 d-flex justify-content-around">
                        <img class="img-fluid align-self-center statistic__image" src="images/template/company/gears.png" alt="">
                        <div class="statistic__info">
                            <div class="statistic-numbers">150 000</div>
                            <div class="statistic-desc">Проданных<br>изделий</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 d-flex justify-content-around">
                        <img class="img-fluid align-self-center statistic__image" src="images/template/company/people.png" alt="">
                        <div class="statistic__info">
                            <div class="statistic-numbers">+ 300</div>
                            <div class="statistic-desc">Более 300<br>человек в штате</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 d-flex justify-content-around">
                        <img class="img-fluid align-self-center statistic__image" src="images/template/company/calendar.png" alt="">
                        <div class="statistic__info">
                            <div class="statistic-numbers">30 лет</div>
                            <div class="statistic-desc">30 лет работы<br>для вас</div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-2">
                        <hr>
                    </div>
                    <div class="col-md-10 about-company">
                        <p>
                            Основной задачей ООО "ЛИТЭК" является комплексное решение задач
                            по повышению эффективности деятельности промышленных
                            предприятий региона, которая реализуется через:
                        </p>
                    </div>
                </div>
                <div class="row mt-3 benefits">
                    <div class="col-md-4 col-xs-12">
                        <div class="benefits__number">
                            01
                        </div>
                        <p class="pl-5">
                            Организацию системы
                            межпроизводственной
                            технологической
                            кооперации;
                        </p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="benefits__number">
                            02
                        </div>
                        <p class="pl-5">
                            Оказание помощи в
                            вопросах дозагрузки
                            свободных
                            производственных
                            мощностей;
                        </p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="benefits__number">
                            03
                        </div>
                        <p class="pl-5">
                            Содействие в реализации
                            программ технического
                            перевооружения
                            производств;
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M-2.54,24.17 C195.53,414.95 341.13,-272.86 501.97,151.47 L500.00,0.00 L-16.64,-17.27 Z" style="stroke: none; fill: #355f31;"></path>
        </svg></div>


    <div class="container substitution mt-5">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <p>Импортозамещение подразумевает разработку конструкторской
                    документации и дальнейшее изготовление оборудования и запасных
                    частей взамен зарубежных по заявкам и техническим заданиям
                    отечественных заказчиков. Потребительские свойства и технические
                    характеристики проектируемой и выпускаемой продукции не уступают
                    параметрам замещаемой зарубежной продукции.</p>
            </div>
            <div class="col-md-5 col-xs-12">
                <h2>Импортозамещение</h2>
            </div>
        </div>
        <div class="row mt-5">
            <img class="img-fluid" src="images/template/company/substitution.png" alt="">
        </div>
    </div>

    <div class="container-fluid feedback pt-5">
        <div class="container ">
            <h2>Остались вопросы?</h2>
            <div class="row feedback-form mt-5">
                <div class="col-md-5 col-sx-12">
                    <input type="text" class="feedback-form__name" placeholder="Введите Ваше имя">
                    <input type="text" class="feedback-form__email" placeholder="Введите Ваш email">
                    <input type="hidden" class="feedback-form__file_hidden">
                    <button type="text" class="feedback-form__file d-flex justify-content-start align-items-center"><img src="images/template/add_files.png" class="mr-3" alt="">Приложите файлы (при
                        желании)</button>
                </div>
                <div class="col-md-7 col-sx-12">
                    <div class="row">
                        <textarea rows="5" cols="45" class="feedback-form__textarea" placeholder="Введите Ваше сообщение"></textarea>
                        <div class="col-md-12"></div>
                        <button type="text" class="feedback-form__push">Отправить</button>
                    </div>
                </div>
            </div>

            <div class="row company-description">
                <div class="col">
                    <p>ООО «ЛИТЭК» предлагает разработку рабочей конструкторской документации для производства
                        оборудования в России взамен зарубежного. Работы производятся на основании заявок,
                        технических требований и условий российских заказчиков, а также в соответсвии
                        с потребностями рынка. При выполнении работ соблюдаются требования техрегламентов,
                        ГОСТ, Правил, ЕСКД и другой нормативной документации, действующей в Российской Федерации.
                        Возможна технологическая подготовка производства опытных образцов.
                    </p>
                    <p>
                        ООО «ЛИТЭК» освоено импортозамещение для предприятий различных отраслей экономики:
                        добыча и переработка природных ресурсов и полезных ископаемых, металлургия,
                        машиностроение, судоходство, энергетика, сельское хозяйство, пищевая
                        промышленность, транспорт, медицина, торговля, ЖКХ и т.д
                    </p>
                </div>
            </div>
        </div>


    </div>
</main>
@endsection
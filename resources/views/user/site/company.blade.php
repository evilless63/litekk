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
                            Основополагающей задачей Нашей Компании является обеспечение заказчиков эксклюзивной продукцией, основываясь на их потребностях. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid statistics  pt-5 ">
            <div class="container">
                
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


    <div class="container substitution mt-5 mb-5">
        <div class="row mb-5">
            <div class="col-md-7 col-xs-12">
                <p>Индивидуальный подход и детальная проработка поставленных задач позволяет выстраивать устойчивые отношения с нашими покупателями, результатом которых является многолетнее, плодотворное сотрудничество с ведущими тепличными хозяйствами России.</p>
            </div>
            <div class="col-md-5 col-xs-12">
                <h2>Индивидуальный подход</h2>
            </div>
        </div>
        <div class="row pt-5 mb-5 company-info-block">
            <div class="col-md-5 col-xs-12">
                <h2>Производство полного цикла</h2>
            </div>
            <div class="col-md-7 col-xs-12">
                <p>Мы осуществляем от начала и до конца весь технологический процесс изготовления оборудования по чертежам заказчика, начиная от изучения потребностей клиента и  заканчивая вводом в эксплуатацию оборудования и обучением сотрудников покупателя для работы с новым оборудованием. </p> 
            </div>
        </div>
        <div class="row pt-5 mb-5 company-info-block">
            <div class="col-md-7 col-xs-12">
                <p>В Нашей Компании имеются ресурсы для обеспечения покупателей необходимыми запасными частями для различного оборудования. Мы предлагаем выезд наших специалистов с целью обслуживания оборудования на территории покупателя. Также наши клиенты всегда могут рассчитывать на помощь даже на этапе разработки технического задания. </p>
            </div>
            <div class="col-md-5 col-xs-12">
                <h2>Техническое сопровождение</h2>
            </div>
        </div>
        <div class="row pt-5 mb-5 company-info-block">
            <div class="col-md-5 col-xs-12">
                <h2>Информационная поддержка</h2>
            </div>
            <div class="col-md-7 col-xs-12">
                <p>Наша опытная команда всегда на связи и мы оперативно реагируем на все обращения покупателей, отвечаем на любые вопросы, возникшие в процессе работы и ввода в эксплуатацию нашего оборудования.</p> 
            </div>
        </div>
        <div class="row pt-5 mb-5 company-info-block">
            <div class="col-md-7 col-xs-12">
                <p>Наша Компания не стоит на месте и мы регулярно модернизируем разработанную нами продукцию. Обладая значительным потенциалом роста в долгосрочной перспективе, опираясь на опытную команду сотрудников, мы стремимся стать лидером на рынке изготовления нестандартного оборудования.</p>
            </div>
            <div class="col-md-5 col-xs-12">
                <h2>Инновации в производстве</h2>
            </div>
        </div>
        <div class="row pt-5 mb-5">
            <img class="img-fluid" src="images/template/company/substitution.png" alt="">
        </div>
    </div>

    <div class="container-fluid feedback pt-5">
        <div class="container ">
            <h2>Остались вопросы?</h2>
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
@extends('layouts.user')

@section('content')
<main class="pb-5 pt-5 text-xs-center text-md-left kontakty">

    <div class="container breadcrumbs">
        <a href="/">Главная</a> > <a href="">Контакты</a>
    </div>
    <div class="container">
        <h1 class="mt-5">Наши контакты и информация</h1>
    </div>
    <div class="container text-center contact-information mt-5">
        <div class="row">
            <div class="col">
                <p>Адрес: 404130, Россия, Волгоградская область, г. Волжский</p>
                <p>1й-Индустриальный проезд 18-101</p>
                <p>Время работы: Пн. – Пт. с 9:00 до 18:00</p>
                
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                
                <p>Тел/факс: +7 (8443) 39-60-20 , +7 (8443) 25-69-94</p>
                <p>Отдел главного конструктора: +7 (960) 894-87-83</p>
                <p>Коммерческий отдел: +7 (961) 661-43-97</p>
                <p>litek34@mail.ru</p>
            </div>
        </div>
    </div>
    <div id="map"></div>

    <div class="container">
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
                    <button type="text" class="feedback-form__push" id="feedbakContactsSend" >Отправить</button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
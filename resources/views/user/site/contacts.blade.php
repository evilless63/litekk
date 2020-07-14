@extends('layouts.user')

@section('content')
<main class="mb-5 mt-5 text-xs-center text-md-left kontakty">

    <div class="container breadcrumbs">
        <a href="">Главная</a> > <a href="">Контакты</a>
    </div>
    <div class="container">
        <h1 class="mt-5">Наши контакты и информация</h1>
    </div>
    <div class="container text-center contact-information mt-5">
        <div class="row">
            <div class="col">
                <p>Адрес: 404130, Россия, Волгоградская область, г. Волжский</p>
                <p>1й-Индустриальный проезд 18-101</p>
                <p>Тел/факс: +7 (8443) 39-60-20</p>
                <p>litek34@mail.ru</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <a href="/" class="contact-information__download mt-4">
                    Скачать карточку партнера
                </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <p>Время работы: Пн. – Пт. с 9:00 до 18:00</p>
                <p>Тел./факс: +7 (495) 748-51-20 (многоканальный)</p>
            </div>
        </div>
    </div>
    <div id="map"></div>

    <div class="container">
        <div class="row feedback-form mt-5">
            <div class="col-md-5 col-sx-12">
                <input type="text" class="feedback-form__name" placeholder="Введите Ваше имя">
                <input type="text" class="feedback-form__email" placeholder="Введите Ваш email">
                <input type="hidden" class="feedback-form__file_hidden">
                <button type="text" class="feedback-form__file d-flex justify-content-start align-items-center"><img src="images/template/add_files.png" class="mr-3" alt="">Приложите файлы (при желании)</button>
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
</main>
@endsection
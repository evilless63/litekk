@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Админ панель</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Добро пожаловать !
                    <p>Для работы со статьями, воспользуйтесь группой "Статьи" в меню. Сначала создайте категории статей, а затем добавьте первую статью</p>
                    <p>Для работы с новостями, воспользуйтесь группой "Новости" в меню. Сначала создайте категории новостей, а затем добавьте первую новость</p>
                    <p>Для просмотра отправленных сообщений от пользователей сайта, воспользуйтесь пунктом меню "Сообщения от пользователей"</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

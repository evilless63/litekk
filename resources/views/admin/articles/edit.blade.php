@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    
                    <h1>Редактировать статью</h1>

                    <form action="{{route('article.edit', $article->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('header') ? ' has-error' : '' }}">
                            <label for="header">Название</label>
                            <input type="text" value="{{ $article->header }}" name="header" class="form-control" id="header" aria-describedby="header" placeholder="заголовок" required>
                            <small id="headerHelp" class="form-text text-muted">Заголовок статьи, который будет отображаться на сайте</small>
                        </div>

                        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description">Краткое описание</label>
                            <textarea type="text" value="{{ $article->description }}" name="description" class="form-control" id="description" placeholder="Краткое описание" required></textarea>
                            <small id="descriptionHelp" class="form-text text-muted">Краткое описание, которое будет отображаться в превью к полному тексту статьи</small>
                        </div>

                        <div class="form-group {{ $errors->has('text') ? ' has-error' : '' }}">
                            <label for="text">Текст статьи</label>
                            <textarea type="text" value="{{ $article->text }}" name="text" class="form-control" id="text" aria-describedby="text" placeholder="Текст статьи" required></textarea>
                            <small id="textHelp" class="form-text text-muted">Основной текст статьи, который будет отображаться при переходе на страницу со статьей</small>
                        </div>

                        <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                            <p>Текущее изображение:</p>
                            <img class="img-fluid mb-4" src="/images/articles/{{ $article->image }}" alt="{{$article->header}}">
                            <label for="image">Основное изображение</label>
                            <input type="file" value="{{ $article->image }}" name="image"  id="image" placeholder="Основное изображение" required>
                            <small id="imageHelp" class="form-text text-muted">Основное изображение статьи, которое будет отображаться в общем списке статей</small>
                        </div>

                        <hr>

                        <div class="form-group {{ $errors->has('meta_keys') ? ' has-error' : '' }}">
                            <label for="meta_keys">Мета ключи</label>
                            <input type="text" value="{{ $article->meta_keys }}" name="meta_keys" class="form-control" id="meta_keys" aria-describedby="meta_keys" placeholder="Мета ключи">
                            <small id="meta_keysHelp" class="form-text text-muted">Ключевые слова, которые должны ассоциироваться со статьей. Указываются через запятую</small>
                        </div>

                        <div class="form-group {{ $errors->has('meta_description') ? ' has-error' : '' }}">
                            <label for="meta_description">Мета описание</label>
                            <input type="text" value="{{ $article->meta_description }}" name="meta_description" class="form-control" id="meta_description" aria-describedby="meta_description" placeholder="Мета описание">
                            <small id="meta_descriptionHelp" class="form-text text-muted">Мета описание. Это описание будет выводится в поисковой выдаче в качестве текста сниппета Google или Yandex</small>
                        </div>

                        <div class="form-group {{ $errors->has('meta_title') ? ' has-error' : '' }}">
                            <label for="meta_title">Мета заголовок</label>
                            <input type="text" value="{{ $article->meta_title }}" name="meta_title" class="form-control" id="meta_title" aria-describedby="meta_title" placeholder="Мета заголовок">
                            <small id="meta_titleHelp" class="form-text text-muted">Мета заголовок. Этот заголовок будет использоваться в качествте заголовка сниппета Google или Yandex. Достаточно указать только заголовок темы. Заголовок будет выведен в поисковой выдаче в виде "Литэк - Мета заголовок"</small>
                        </div>

                        <button type="submit" class="btn btn-primary">Внести изменения в статью</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
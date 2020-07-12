@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Редактировать категорию статьи</div>

                <div class="card-body">

                    <form action="{{route('categoryArticle.update', $category->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title">Название</label>
                            <input type="text" value="{{ $category->title }}" name="title" class="form-control" id="title" aria-describedby="header" placeholder="заголовок" required>
                            <small id="titleHelp" class="form-text text-muted">Название категории на сайте</small>
                        </div>

                        <button type="submit" class="btn btn-primary">Внести изменения в категорию</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

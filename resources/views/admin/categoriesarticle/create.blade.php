@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Создать категорию статьи</div>

                <div class="card-body">
                    <form action="{{route('categoryArticle.store')}}" method="post">
                        @csrf
                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title">Название</label>
                            <input type="text" value="{{ old('title') }}" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Укажите название категории на сайте" required>
                            <small id="titleHelp" class="form-text text-muted">Название категории на сайте</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Создать категорию</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

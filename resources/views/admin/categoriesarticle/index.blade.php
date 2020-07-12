@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Категории</div>

                <div class="card-body">

                    <a href="{{route('categoryArticle.create')}}">Создать категорию</a>

                    <div class="list-group mt-3">
                        @foreach($categories as $category)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{route('categoryArticle.edit', $category->id)}}">{{$category->title}}</a>
                            <form action="{{route('categoryArticle.destroy', $category->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="badge badge-danger badge-pill">Удалить</button>
                            </form>

                        </li>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

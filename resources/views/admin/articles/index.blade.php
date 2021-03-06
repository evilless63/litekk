@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Статьи</div>

                <div class="card-body">

                    <a href="{{route('articles.create')}}">Создать статью</a>

                    <div class="list-group mt-3">
                        @foreach($articles as $article)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{route('articles.edit', $article->id)}}">{{$article->header}}</a>
                            <form action="{{route('articles.destroy', $article->id)}}" method="post">
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

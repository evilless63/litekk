@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Новости</div>

                <div class="card-body">

                    <a href="{{route('news.create')}}">Создать новость</a>

                    <div class="list-group mt-3">
                        @foreach($news as $new)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{route('news.edit', $new->id)}}">{{$new->header}}</a>
                            <form action="{{route('news.destroy', $new->id)}}" method="post">
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

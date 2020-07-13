@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Письма</div>

                <div class="card-body">

                    <div class="list-group mt-3">
                        @foreach($emails as $email)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{route('emails.show', $email->id)}}">{{$email->title}}</a>
                        </li>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

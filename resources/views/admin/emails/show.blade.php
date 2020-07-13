@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Письмо</div>

                <div class="card-body">

                   <h3>{{$email->name}}</h3>

                   <p>{{$email->message}}</p>

                   <p>{{$email->phone}}</p>
                   <p>{{$email->email}}</p>

                   <a href="{{$email->filepath}}">Вложения</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

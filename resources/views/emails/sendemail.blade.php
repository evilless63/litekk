div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@if($data->direction == 1) Клиент заказал звонок @endif Письмо с сайта</div>

                <div class="card-body">

                   <h3>{{$data->name}}</h3>

                   <p>{{$data->message}}</p>

                   <p>{{$data->phone}}</p>
                   <p>{{$data->email}}</p>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>@if($data["direction"] == 1) Клиент заказал звонок @endif Письмо с сайта</h3>
                </div>

                <div class="card-body">
                    @if(array_key_exists('name', $data))
                    <p>Имя: {{$data["name"]}}</p>
                    @endif
                    @if(array_key_exists('message', $data))
                    <p>Текст сообщения: {{$data["message"]}}</p>
                    @endif
                    @if(array_key_exists('phone', $data))
                    <p>Телефон отправителя: {{$data["phone"]}}</p>
                    @endif
                    @if(array_key_exists('email', $data))
                    <p>Почта отправителя: {{$data["email"]}}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
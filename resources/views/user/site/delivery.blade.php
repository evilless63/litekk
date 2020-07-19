@extends('layouts.user')

@section('content')
<main class="pb-5 pt-5 text-sm-center text-md-left new">

        <div class="container breadcrumbs">
            <a href="/">Главная</a> > <a href="">Доставка</a>
        </div>
        <div class="container d-md-flex align-items-center justify-content-between mt-5">
            <h1>Доставка</h1>
        </div>
        <div class="container">
            <div class="row delivery-description">
                <div class="col-md-6 col-xs-12">
                    <img class="img-fluid delivery-description__img" src="images/template/delivery/delivery-image.jpg"
                        alt="Доставка - Литек.Правильные технические решения"
                        title="Доставка - Литек.Правильные технические решения">
                </div>
                <div class="col-md-6 col-xs-12 delivery-description__desc">
                    <p>
                        Основой успешной работы любой службы доставки,
                        от крупного международного оператора до крохотной
                        курьерской службы является качественная логистика.
                        Эта наука занимается управлением потоками как
                        материальными, так и информационными, которые
                        возникают в процессе движения грузов,
                        и без которых экспресс доставка существовать не может.
                    </p>
                    <p>
                        Появилась эта наука достаточно давно, но использовалась
                        преимущественно в военной области. Так первую книгу по
                        логистике, написанную военным теоретиком Жомини изучал
                        еще Александр II. Самым же грандиозным логистическим
                        проектом в истории России стала эвакуация огромного
                        количества промышленных предприятий. Во время
                        Великой Отечественной войны, для того
                        чтобы обеспечить выпуск необходимой фронту продукции,
                        большая часть предприятий и
                        организаций была перемещена из европейской части России
                        далеко за Урал и в республики Средней Азии.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col">
                    <img class="img-fluid" src="images/template/delivery/wowlogistics.png" alt="Партнер доставки">
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/template/delivery/dellin.png" alt="Партнер доставки">
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/template/delivery/dpd.png" alt="Партнер доставки">
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/template/delivery/sdek.png" alt="Партнер доставки">
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/template/delivery/cargo.png" alt="Партнер доставки">
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/template/delivery/boom.png" alt="Партнер доставки">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row calculators">
                <div class="col mt-3 mb-3">
                    <div class="calculators__one calculators__block"></div>
                </div>
                <div class="col mt-3 mb-3">
                    <div class="calculators__two calculators__block"></div>
                </div>
                <div class="col mt-3 mb-3">
                    <div class="calculators__three calculators__block"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <img class="img-fluid" src="images/template/company/substitution.png" alt="">
            </div>
        </div>
    </main>
@endsection

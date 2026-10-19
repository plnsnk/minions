@extends('theme')

@section('title')
    Главная
@endsection

@section('content')


    <div class="banner">
        <div class="row" style="--bs-gutter-x: 0!important;">

            <div class="col-md-8 d-flex flex-column align-items-center justify-content-center">
                <p class="text-white">Узнай своего внутреннего миньона</p>
                <a  class="quiz-btn text-bold blink" style="font-size: 30px;text-decoration: none" href="/quiz">Пройти тест! </a>
                <p class="text-white" style="font-size: 20px">Осторожно: результат пугающе точный.</p>
            </div>

            <div class="col-md-4 photo m-0">
                <img src="/images/minion.webp" alt="banner" class="banner_photo">
            </div>
        </div>
    </div>

    <section id="vicpedia">
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-5 d-flex justify-content-between mt-5">
                    <img src="/images/facts.webp" alt="minion" class="facts">
                </div>

                <div class="col-8 col-md-7 d-flex justify-content-center flex-column mt-3">
                    <h2 class="text-bold text-center">Кто такие <img src="/images/minions.webp" class="img-facts"> ?</h2>
                    <p class="text m-4 mb-2">
                        Миньоны существуют с начала времён: они служили тираннозавру, пещерным людям, фараонам,
                        Дракуле и Наполеону - и всех их умудрились случайно погубить.
                        Их язык - гремучая смесь испанского, французского, итальянского и "бананового",
                        а главная суперспособность - превращать любой серьёзный план в весёлый хаос.
                        Но это лишь верхушка банана. У миньонов есть собственная история, рекорды и секреты
                        - и всё это задокументировано в самой серьёзной энциклопедии мира.</p>
                    <a  class="quiz-btn text-bold d-flex justify-content-center" style="font-size: 20px;text-decoration: none"
                        href="https://ru.wikipedia.org/wiki/Миньоны_(существа)" target="_blank">Подробнее </a>
                </div>
            </div>
        </div>
    </section>

    <section class="movies container pt-4 pb-4">
        <h2 class="text-bold text-center p-3 " style="font-size: 30px">Фильмы с миньонами</h2>
        <div class="d-flex flex-wrap p-3 justify-content-around">
            @foreach($minions as $minion)
                <div class="card-movies d-flex flex-column align-items-center">
                    <img src="{{$minion->photo_path}}" alt="фильм {{$minion->name}}" class="minion-img" style="border-radius: 20px;
            width: auto!important;">
                    <h2 class="text-bold p-3" style="font-size: 19px" title="{{$minion->description}}">{{$minion->name}}</h2>
                    <a href="{{$minion->href}}" target="_blank" class="text text-center" style="color: black" >Посмореть</a>
                </div>
            @endforeach
        </div>
    </section>
    <section class="container">
    <h1 class="text text-center p-3" style="font-size: 40px; line-height: 2; outline-width: 60px;">
        Фильмы, <br> когда у Миньнов и их хозяина появилась
        <br> <span class="blink text-bold " style="font-size: 35px">семья</span> </h1>
    </section>
    <section class="movies-despicable container mb-4">

        <div class="d-flex flex-wrap p-3 justify-content-around">
            @foreach($despicables as $despicable)
                <div class="card-movies d-flex flex-column align-items-center">
                    <img src="{{$despicable->photo_path}}" alt="фильм {{$despicable->name}}" class="minion-img despicable-img" style="border-radius: 20px;
            width: auto!important;">
                    <h2 class="text-bold p-3" style="font-size: 24px" title="{{$despicable->description}}">{{$despicable->name}}</h2>
                    <a href="{{$despicable->href}}" target="_blank" class="text text-center" style="color: black" >Посмореть</a>
                </div>
            @endforeach
        </div>
    </section>


@endsection

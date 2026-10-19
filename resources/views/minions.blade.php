@extends('theme')

@section('title')
    Минионы
@endsection

@section('content')
    <div style="background-color: #e7c158" class="p-4">

    <section id="minions" class="container" >
        <h1 class="text-bold text-center p-3" style="font-size: 30px">Минионы из теста</h1>
        <div class="cards d-flex justify-content-center flex-wrap">
            @foreach($minions as $minion)
                <div class="card-minion m-2 d-flex align-items-center p-2 flex-column" style="background-color: white">
                    <h2 class="text-bold">{{$minion->name}}</h2>
                    <img src="{{$minion->photo_path}}" alt="{{$minion->name}}" class="minion-img">
                     <p class="text-card text">{{$minion->teg}}</p>
                </div>
            @endforeach
                <div class="text-center mt-3">
                    <a href="/quiz" class="quiz-btn text mb-3 text-center" style="color: black">Пройти тест</a>
                </div>
        </div>
    </section>
    </div>
@endsection

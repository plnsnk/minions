@extends('theme')

@section('title')
    Результат
@endsection

@section('content')
    <div class="body-result d-flex align-items-center flex-column ">
{{--        <img src="/images/geroi.webp" alt="" style="height: 100px;width: 80px">--}}
        <div class="questions-block d-flex justify-content-center flex-column m-4 mb-0 align-items-center" id="result-block">
            <h1 class="text-bold text-center" style="font-size: 25px;">Ты {{$minion->name}}!</h1>
            <img src="{{$minion->photo_path}}" alt="minion" class="result-photo">
            <div class="row mb-2">
              <div class="col">
                  <p class="result-text m-0 text-end ml-1" style="font-size: 30px;min-width: 220px;">{{$minion->teg}}</p>
              </div>

              <div class="col">
                  <img src="/images/minions.webp" class="img-facts">
              </div>
            </div>

            <p class="result-text">{{$minion->description}}</p>
        </div>
        <img src="/images/gru.webp" alt="gru" style="max-width: 300px;height: auto">
        <div class="text-center mt-3">
            <a href="/quiz" class="quiz-btn text-bold mb-3">Пройти ещё раз</a>
        </div>
{{--        <div class="row">--}}
{{--         <div class="col">--}}
{{--             --}}
{{--         </div>--}}
{{--         <div class="col">--}}
{{--             --}}
{{--         </div>--}}
{{--        </div>--}}

{{--        <img src="/images/minion.webp" alt="banner" class="banner_photo">--}}
    </div>


@endsection

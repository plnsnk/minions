@extends('theme')

@section('title')
    Тест
@endsection

@section('content')
    <div style="background-color: #e7c158">
    <section id="test" class="container">
        <div class="d-flex justify-content-center">
            <p  class="quiz-btn text-bold m-3 text-center" style="font-size: 30px;text-decoration: none;color:
            #f6e3a4!important;">Узнай какой ты <img src="/images/minions.webp" class="img-facts">! </p>
        </div>
         <form action="/result" method="post">
            @csrf
            @foreach($questions as $i => $question)
                <div class="questions-block">
                    <h3 class="text-bold">{{$i + 1}}. {{$question->text}}</h3>

                    @foreach($question->answers->shuffle() as $answer)
                        <label class="answer-option">
                            <input type="radio"
                                   name="answers[{{ $question->id }}]"
                                   value="{{ $answer->id }}"
                                   required>

                            {{-- серая — пока не выбрано --}}
                            <img src="{{ asset('images/radio-off.webp') }}" alt="" class="radio-icon icon-off">
                            {{-- с глазом — когда выбрано --}}
                            <img src="{{ asset('images/radio-on.webp') }}" alt="" class="radio-icon icon-on">

                            <span>{{ $answer->text }}</span>
                        </label>
                    @endforeach
                </div>

            @endforeach
            <button type="submit" class="text-bold test-button" style="font-size: 18px">Узнать результат</button>
        </form>
    </section>
    </div>
@endsection

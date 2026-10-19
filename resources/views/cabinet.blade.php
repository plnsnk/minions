@extends('theme')

@section('title')
    Кабинет
@endsection

@section('content')
    <div style="background-color: #e7c158">
    <section id="certificates"  class="container" style="height: 75%">
        <h2 class="text-bold p-3 text-center" style="font-size: 25px">Мои сертификаты</h2>

        @forelse($certificates as $cert)
            <div class="row text p-3 questions-block mt-0">
                <div class="col-xl-10 col-md-9">
                    <p class="cabinet-text">
                        {{ $cert->created_at->format('d.m.Y') }} - ты
                        <span class="text-bold">{{ $cert->minion->name }}</span>
                    </p>
                </div>
                <div class="col-xl-2 col-md-3 cabinet-text" >
                    <a href="{{ asset('storage/' . $cert->path) }}" target="_blank" style="color: black">открыть сертификат</a>
                </div>
            </div>

        @empty
            <p>Пока нет сертификатов -  <a href="/quiz" class="quiz-btn text-bold mb-3" style="color: black">
                    пройди тест</a>!</p>
        @endforelse
        <div class="text-center mt-3">
            <a href="/quiz" class="quiz-btn text mb-3" style="color: black">Пройти ещё раз</a>
        </div>
    </section>
    </div>
@endsection

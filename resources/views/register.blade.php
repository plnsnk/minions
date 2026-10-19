@extends('theme')

@section('title')
    Регистрация
@endsection

@section('content')
    <section class="register-login d-flex justify-content-center">
        <form action="/register" method="post" class="form m-5 p-4">
            @csrf
            <h1 class="text-bold text-center p-3" style="font-size: 28px">Зарегистрироваться</h1>

            <div class="mb-3">
                <label class="text form-label label-form">Логин</label>
                <input type="text" name="login" class="form-input form-group" placeholder="Логин" required>
                <div class="invalid-feedback"></div>
            </div>

            <div class="mb-3">
                <label class="text form-label label-form">ФИО</label>
                <input type="text" name="username" class="form-input form-group" placeholder="ФИО" required>
                <div class="invalid-feedback"></div>
            </div>

            <div class="mb-3">
                <label class="text form-label label-form">Номер телефона</label>
                <input type="tel" name="phone" class="form-input form-group" placeholder="Номер телефона" required>
                <div class="invalid-feedback"></div>
            </div>

            <div class="mb-3">
                <label class="text form-label label-form">Почта</label>
                <input type="email" name="email" class="form-input form-group" placeholder="Почта" required>
                <div class="invalid-feedback"></div>
            </div>

            <div class="mb-3">
                <label class="text form-label label-form">Пароль</label>
                <input type="password" name="password" class="form-input form-group" placeholder="Пароль" required>
                <div class="invalid-feedback"></div>
            </div>

            <div class="mb-3">
                <label class="text form-label label-form">Повторите пароль</label>
                <input type="password" name="password_confirmation" class="form-input form-group"
                       placeholder="Повторите пароль" required>
                <div class="invalid-feedback"></div>
            </div>

            <button type="submit" class="text text-center form-button" style="font-size: 24px;">
                Зарегистрироваться</button>
            <hr>
            <p class="text text-center p-3 m-0 pb-0">У вас есть аккаунт? <a href="/auth"><b>Войти</b></a></p>
        </form>
    </section>
@endsection

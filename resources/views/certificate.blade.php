<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сертификат</title>
    <style>
        body { background:#e7c158; margin:0; padding:40px 20px; font-family:sans-serif; }
        .cert { max-width:700px; margin:0 auto; background:#f9e9b8; border:4px solid #6b4e00;
            border-radius:20px; padding:50px 40px; text-align:center; }
        .cert h1 { color:#355f77; letter-spacing:4px; }
        .name { font-size:32px; font-weight:bold; color:#6b4e00; margin:15px 0; }
        .minion { font-size:28px; color:#355f77; font-weight:bold; }
        .cert img { max-height:300px; margin:20px 0; }
    </style>
</head>
<body>
<div class="cert">
    <p style="letter-spacing:3px; text-transform:uppercase;">Minion Quiz</p>
    <h1>СЕРТИФИКАТ</h1>
    <p>Настоящим удостоверяется, что</p>
    <p class="name">{{ $user->username }}</p>
    <p>успешно прошёл тест «Какой ты миньон» и официально признан:</p>
    <p class="minion">{{ $minion->name }}</p>
    <img src="{{ $minion->photo_path }}" alt="{{ $minion->name }}">
    <p>Дата выдачи: {{ now()->format('d.m.Y') }}</p>
</div>
</body>
</html>

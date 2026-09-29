<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Первая страница</title>
</head>
<body>
    <div class="flex justify-center items-center h-screen flex-col">
        <h1>Help</h1>
        <a href="/">Главная</a>
        <!-- <p>{{$array[0]}}</p>
        <p>{{$array[1]}}</p>
        <p>{{$array[2]}}</p> -->
        @foreach ($array as $arr)
        <p>{{ $arr }}</p>
        @endforeach
    </div>
</body>
</html>
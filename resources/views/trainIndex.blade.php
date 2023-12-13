<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        @foreach ($todayTrains as $train)
        <li> <span class="fw-bold">Orario Partenza:  </span>{{$train->orario_partenza}} - <span class="fw-bold">Stazione Partenza:</span> {{$train->stazione_di_partenza}} - <span class="fw-bold">Stazione d'arrivo:</span>  {{$train->stazione_di_arrivo}}</li>
            
        @endforeach
    </div>
</body>
</html>
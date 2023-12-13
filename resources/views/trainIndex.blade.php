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
        <li> Orario Partenza: {{$train->orario_partenza}} - Stazione Partenza: {{$train->stazione_di_arrivo}} - Stazione d'arrivo:  {{$train->stazione_di_arrivo}}</li>
            
        @endforeach
    </div>
    
</body>
</html>
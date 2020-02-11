@extends('layout')

@section('content')
    <?php
    $api = json_decode(file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=stockholm&appid=054591b3363fee277db526c645d8295d'), true);
    $temp = $api['main']['temp'] - 273.15; // Subtract from kelvin value to get celsius

    echo ('<div class="text-center align-items-center justify-content-center">' .
        "<h4>The temperature in Stockholm is {$temp} degrees with {$api['weather'][0]['description']}.</h4></div>");

    ?>
    <div class="content text-center d-flex flex-column align-items-center flex-d-col justify-content-center">
        <h1 class="mb-4 h1 main-heading">Vi kommer ihåg åt dig</h1>
        <h3 class="h3 sub-heading mb-4"><span class="dark-text"><strong>Chas Bar Tab</strong></span> registrerar enkelt
            dina dryckesutlägg under Chas Academy´s förstklassiga event.
            "Men notan då?" - Den betalar du direkt, senare eller lite då och då<span class="dark-text">*</span></h3>
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><a href="/students">Studenter</a></li>
            <li class="list-group-item"><a href="/order">Ny beställning</a></li>
            <li class="list-group-item"><a href="/drinks">Drycker</a></li>
            <li class="list-group-item"><a href="/history">Historia</a></li>
        </ul>
        <p class="note">*<span class=uppercase><em>innan</span> examensdagen freeloaders</em></p>
    </div>
@endsection




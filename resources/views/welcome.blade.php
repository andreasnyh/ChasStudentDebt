@extends('layout')

@section('content')
    <?php
        $apiKey = env('API_KEY');
        $city = "Stockholm";
        $api = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}"), true);
        $temp =  round($api['main']['temp'] - 273.15, 1); // Subtract from kelvin value to get celsius
        $tempFeels = round($api['main']['feels_like'] - 273.15, 1); // Subtract from kelvin value to get celsius
        $weather = $api['weather'];



        echo('<div class="text-center align-items-center justify-content-center">' .
            "<h4>The temperature in {$city} is {$temp}℃, feels like {$tempFeels}℃ with {$api['weather'][0]['description']}.</h4>");
            foreach ($weather as $wType){
                echo("<img src='http://openweathermap.org/img/wn/{$wType['icon']}@2x.png'>");
            }
        echo("</div>");
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




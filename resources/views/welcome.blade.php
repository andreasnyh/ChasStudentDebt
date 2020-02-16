    @extends('layout')

    @section('content')
        
    <div class="content text-center d-flex flex-column align-items-center flex-d-col justify-content-center">
        <h1 class="mb-4 h1 main-heading">Vi kommer ihåg åt dig</h1>
        <h3 class="h3 sub-heading mb-4"><span class="dark-text"><strong>Chas Bar Tab</strong></span> registrerar enkelt dina dryckesutlägg under Chas Academy´s förstklassiga event.
                       "Men notan då?" - Den betalar du direkt, senare eller lite då och då<span class="dark-text">*</span></h3>
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><a href="/students">Studenter</a></li>
            <li class="list-group-item"><a href="/order">Ny beställning</a></li>
            <li class="list-group-item"><a href="/drinks">Drycker</a></li>
            <li class="list-group-item"><a href="/history">Historia</a></li>
        </ul>

        <?php
            $brewKey = "0cecc2de820dc46cde46804f597e1614";
            $url = "http://api.brewerydb.com/v2/beers/?hasLabels=Y&key=$brewKey";
            $databrew = file_get_contents($url);
            $brew = json_decode($databrew);
            $brewNum = rand(0, 45);
            $brewPresent = ($brew->data[$brewNum]->name);
            $brewPic = ($brew->data[$brewNum]->labels->icon);
            echo "<br><h4>Veckans öl:</h4>
                    <h3>$brewPresent</h3>
                    <img src=$brewPic alt='Beer logo'>";
        ?>
        
        <p class="note">*<span class=uppercase><em>innan</span> examensdagen freeloaders</em></p>
    </div>
    @endsection




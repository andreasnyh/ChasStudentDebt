    @extends('layout')

    @section('content')
        
    <div class="content text-center d-flex flex-column align-items-center flex-d-col justify-content-center">
        <h1 class="mb-4 h1 main-heading">Vi kommer ihåg åt dig</h1>
        <?php
        $base = "https://pokeapi.co/api/v2/pokemon/";
        //$id = 1;
        //$data = file_get_contents($base.$id.'/');
        //$pokemon = json_decode($data);
        //echo $pokemon->name;
        for ($id = 1; $id < 3; $id++) {
        $data = file_get_contents($base.$id.'/');
        $pokemon = json_decode($data);
        echo $pokemon->name."<br>";
        }
        ?>
        <h3 class="h3 sub-heading mb-4"><span class="dark-text"><strong>Chas Bar Tab</strong></span> registrerar enkelt dina dryckesutlägg under Chas Academy´s förstklassiga event.
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




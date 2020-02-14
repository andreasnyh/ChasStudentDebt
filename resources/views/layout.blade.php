<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Luckiest+Guy|Orbitron|Russo+One|Squada+One&display=swap" rel="stylesheet">
    <title>Chas Bar Tab</title>
</head>
<body>
    <nav class=" text-light bg-dark">
        <img class="pl-4 py-4" src="https://chas.se/wp-content/uploads/2017/03/ChasLogoSvgWht.svg" width="200"
            alt="Chas Visual Management">
        <img id="logo1"src="/images/bar_tab_logo1.png" width="150" alt="">
        <img class="ml-2 mt-3" src="/images/bar_tab_logo.png" width="35" alt="tab-key">
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer class=" d-flex flex-row justify-content-between bg-dark text-light mt-5 p-4">
        <section class="d-flex flex-column justify-content-between">
        <a href="https://github.com/SimonNord">Simon Nordström</a>
        <a href="https://github.com/andreasnyh">Andréas Ny</a>
    </section>
    <section class="d-flex flex-column justify-content-between">
        <a href="https://github.com/ByHT">Hung Ta</a>
        <a href="https://github.com/erax83">Erik Axelsson</a>
    </section>
    <section class="d-flex flex-column justify-content-between">
        <a href="https://github.com/DylanNore">Dylan Nore</a>
        <a href="https://github.com/Voldakka">Karl Falk</a>
    </section>
    <section class="d-flex flex-column justify-content-between">
        <a href="https://github.com/andreasnyh/ChasStudentDebt/">Project on Github</a>
        <p>&copy; 2020 Chas Academy</p>
    </section>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="/js/main.js"></script>
</body>

</html>

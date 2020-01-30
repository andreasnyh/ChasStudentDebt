<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Chas Bar Tab</title>
</head>

<body>
    <nav class=" text-light bg-dark mb-5">
        <img class="pl-4 py-4" src="https://chas.se/wp-content/uploads/2017/03/ChasLogoSvgWht.svg" width="200"
            alt="Chas Visual Management">
        <img class="ml-2 mt-3" src="/images/bar_tap_logo.png" width="50" alt="tab-key">
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer class="bg-dark text-light mt-5 p-4">
        <h3>About us</h3>
        <h6> <a href="https://github.com/SimonNord">Simon Nordström</a></h6>
        <h6> <a href="https://github.com/andreasnyh">Andréas Ny</a></h6>
        <h6> <a href="https://github.com/ByHT">Hung Ta</a></h6>
        <h6> <a href="https://github.com/erax83">Erik Axelsson</a></h6>
        <h6> <a href="https://github.com/DylanNore">Dylan Nore</a></h6>
        <h6> <a href="https://github.com/Voldakka">Karl Falk</a></h6>
        <h6><a href="https://github.com/andreasnyh/ChasStudentDebt/">Project on Github</a></h6>
        <p>&copy; 2020 Chas Academy</p>
    </footer>
    <script src="/js/main.js"></script>
</body>

</html>

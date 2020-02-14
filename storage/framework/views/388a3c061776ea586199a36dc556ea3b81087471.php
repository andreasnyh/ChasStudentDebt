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
        <?php echo $__env->yieldContent('content'); ?>
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
    <script src="/js/main.js"></script>
</body>

</html>
<?php /**PATH /home/vagrant/code/ChasStudentDebt/resources/views/layout.blade.php ENDPATH**/ ?>
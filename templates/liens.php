<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $title ?></title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <section>
            <?php
            include "inc/banniere.php";
            ?>
        </section>
        <br>
        <nav>
            <?php
            include "inc/menu.php";
            ?>
        </nav>
    </header>
    <main>
        <div>
            <h2>
                <?= $title ?>
            </h2>
        </div>
        <div>
            <img src="img/liens.jpg" alt="">
        </div>
        <p id="last">
            D'autres capitales se sont associées à notre site.
        </p>
        <p class="flex">
        <ul>
            <li><a href="">Berlin</a></li>
            <li><a href="">Vienne</a></li>
            <li><a href="">Paris</a></li>
            <li><a href="">Madrid</a></li>
            <li><a href="">Rome</a></li>
            <li><a href="">Londres</a></li>
        </ul>
        </p>
        <p class="flex">
        <ul>
            <li><a href="">Lisbonne</a></li>
            <li><a href="">Prague</a></li>
            <li><a href="">Amsterdam</a></li>
            <li><a href="">Copenhague</a></li>
            <li><a href="">Dublin</a></li>
            <li><a href="">Athènes</a></li>
        </ul>
        </p>
        <p class="flex">
        <ul>
            <li><a href="">Sofia</a></li>
            <li><a href="">Varsovie</a></li>
            <li><a href="">Helsinski</a></li>
            <li><a href="">Stockholm</a></li>
            <li><a href="">Oslo</a></li>
            <li><a href="">Budapest</a></li>
        </ul>
        </p>
    </main>
    <footer>

    </footer>
</body>

</html>
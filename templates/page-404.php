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
            <img src="img/404.jpg" alt="">
        </div>
        <p id=err404>
            Euh, la page demandée est introuvable!
        </p>
        <h5>
            Le mieux est de retourner à <a href="../index.php">l'accueil</a>.
        </h5>
    </main>
    <footer>

    </footer>
</body>

</html>
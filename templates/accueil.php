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
            <img src="img/armoiries.png" alt="">
        </div>
        <p>
            Prague, capitale et plus grande ville de la Tchéquie, est située en Bohême, au cœur de l'Europe centrale, sur les rives de la Vltava. Capitale historique du royaume de Bohême, elle connaît son apogée au XIVe siècle sous Charles IV, devenant un centre culturel et religieux majeur. Au XVIe et XVIIe siècles, sous Rodolphe II, Prague redevient brièvement capitale impériale. Après une période de déclin, elle retrouve son importance au XIXe siècle avec la Renaissance nationale tchèque et devient la capitale de la Tchécoslovaquie en 1918.

            Pendant la guerre froide, Prague tente une libéralisation politique en 1968, écrasée par les troupes du pacte de Varsovie. La révolution de Velours de 1989 marque la fin de cette période. Aujourd'hui, Prague est un centre économique dynamique avec une économie tertiaire et touristique florissante. La ville, riche en styles architecturaux, est inscrite au patrimoine mondial de l'UNESCO depuis 1992.
        </p>
        <h5>
            Dans ce site, vous trouverez diverses informations concernant : 
        </h5>
        <h5 id=enbas>
            <ul>
                <li>
                    <a href="">Une brève présentation de Prague sur son rôle en Tchéquie et dans le monde</a>
                </li>
                <li>
                    <a href="">Un rappel historique, de sa fondation à aujourd'hui</a>
                </li>
                <li>
                    <a href="">Un tour d'horizon en matière d'art et culture</a>
                </li>
                <li>
                    <a href="">Une galerie de photographies</a>
                </li>
                <li>
                    <a href="">Un formulaire pour nous contacter</a>
                </li>
                <li>
                    <a href="">Des liens vers des sites partenaires</a>
                </li>
            </ul>
        </h5>
        <h5>
            Source : <a href="https://fr.wikipedia.org/wiki/Prague" target="_blank">Wikipedia</a> - Ville de Prague
        </h5>
    </main>
    <footer>

    </footer>
</body>

</html>
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
            <img src="img/geographie.png" alt="">
        </div>
        <p>
            Prague, située au cœur de l'Europe centrale, est à mi-distance entre les mers Baltique et Adriatique, et entre l'océan Atlantique et la mer Noire. Elle se trouve à 250 km de Vienne, 300 km de Berlin et 200 km de Brno. La ville est située sur les rives de la Vltava, au centre de la Bohême, dans une région appelée le « quadrilatère de Bohême », correspondant au bassin de l'Elbe. Ce plateau granitique est encadré par plusieurs chaînes montagneuses : la Forêt de Bohême, les monts Métallifères, les monts des Géants et le massif tchéco-morave.

            Avec une superficie de 496 km², Prague est une ville étendue et hétérogène, comprenant un centre historique densifié, des cités-dortoirs et une périphérie quasi-rurale. Elle possède un climat continental humide, marqué par des écarts saisonniers de température et des précipitations tout au long de l'année. Les étés sont chauds et orageux, tandis que les hivers sont froids et relativement secs. Les records de température sont de 37,8 °C en juillet 1983 et −27,6 °C en mars 1922.

            Le site de Prague, situé de part et d'autre de la Vltava, rassemble divers paysages typiques de la Tchéquie : une vallée encaissée au sud, un plateau calcaire à l'ouest, et une grande plaine à l'est. La Vltava est un axe commercial important, reliant les ressources méridionales et les productions de la plaine de l'Elbe. La ville historique s'étend sur les deux rives de la rivière, entourée de collines comme Petřín, Hradčany, Vyšehrad et Letná. Onze îles jalonnent le parcours de la Vltava, dont la plus grande est l'Île Císařský.

            Prague compte 197,2 km² de surface agricole, 51,9 km² de forêts, 11 km² de milieux aquatiques et 50,2 km² de surfaces urbanisées.
        </p>
    </main>
    <footer>

    </footer>
</body>

</html>
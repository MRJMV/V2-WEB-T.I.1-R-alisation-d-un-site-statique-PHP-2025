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
            <img src="img/contacts.jpg" alt="">
        </div>
        <p>
            Pour nous laisser un commentaire ou pour obtenir un renseignement complémentaite, remplissez le formulaire ci-dessous :
        </p>
        <div>
            <form action="/action_page.php">
                <label for="fname">NOM : </label>
                <input type="text" id="fname" name="firstname" placeholder="Votre nom">

                <label for="lname">PRENOM : </label>
                <input type="text" id="lname" name="lastname" placeholder="Votre prénom">

                <label for="city">VILLE : </label>
                <input type="text" id="city" name="city" placeholder="Votre ville">

                <label for="mail">E-MAIL : </label>
                <input type="text" id="mail" name="email" placeholder="Votre e-mail">

                <label for="com">COMMENTAIRES : </label>
                <input type="text" id="com" name="comment" placeholder="Votre message">

                <input type="submit" value="Submit">
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>
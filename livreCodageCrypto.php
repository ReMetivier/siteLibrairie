<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Acceuil</title>
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/livreCrypto.css">
    </head>
    <body>
        <?php if(!isset($_SESSION['name'])):?>

            <p id=connect>"Veuillez vous connecter pour accéder à cette page"</p>;
        <?php else:?>
            <header>
                <?php require_once 'templates/header.php' ?>
            </header>
            <main>
                <div>
                    <img id="bestSeller" src="/img/codageCrypto.jpg" alt="">
                </div>
                <div>
                    <p>Titre : Codage et Cryptographie</p>
                    <p>Auteur : Juan Gomez</p>
                    <p>résumé :</p>
                    <p> L'intégrité et confidentialité des communications dépendent de codes complexes dont la conception repose sur les mathématiques. Ce livre propose une voyage stimulant au cœur de l'arithmétique de la sécurité et du secret, en s’arrêtant, entre autres, sur les chiffrements qui ont décidé du destin des nations et sur le langage de communication des ordinateurs. </p>
                    <?php if($_SESSION['bookType']):?>
                        <p>genre : litérature </p>
                    <?php endif; ?>

                    <?php if($_SESSION['parution']):?>
                        <p>année de parution : 2013 </p>
                    <?php endif; ?>

                    <?php if($_SESSION['ageCible']):?>
                        <p>age ciblé : à partir de 15ans</p>
                    <?php endif; ?>
                </div>
            </main>
        <? endif ?>
    </body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/footer.css">
    <title>IT-Gaming</title>
</head>
<body>
    <?php require_once 'templates/header.php'; ?>
    <main flex>
        <div id=centrage>

            <form action="controllers/connexion.php" method="POST">
                <div id="formu">

                    <div class="ecrire">
                        <label id="nameForm" for="name">identifiant :</label>
                        <input type="text" placeholder="votre identifiant" name="name">
                    </div>
                    <div class="ecrire">
                        <label for="password">Mot de passe : </label>
                        <input type="password" placeholder="Votre mot de passe" name="password">
                    </div>
                    <input id="formbut" type="submit" value="Connection!">
                </div>
            </form>
        </div>
    </main>
    <?php require_once 'templates/footer.php'; ?>
</body>
</html>

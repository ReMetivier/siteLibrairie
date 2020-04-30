<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Profile</title>
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/profile.css">
    </head>
    <body>
        <header><?php require_once 'templates/header.php' ?></header>
        <main class="flex">
            <!-- inserer une image -->
            <div><img id="imageUser" src="/img/userPhoto.png" alt="photo utilisateur"> </div>
            <div class="infosUser">
                <p>Nom : <?= $_SESSION['userName'] ?></p>
                <p>prénom :  <?= $_SESSION['name'] ?> </p>
                <p>age : <?= $_SESSION['userAge'] ?></p>
                <p>courriel : <?= $_SESSION['mail'] ?></p>
                <p>Cochez ce que vous souhaitez afficher : </p>
                <form action="/controllers/preferences.php" method="POST">

                    <?php if($_SESSION['bookType']==1) :?>
                        <label for="booktype">le genre du livre</label>
                        <input type="checkbox" name="bookType" value="1" checked>
                    <?php else: ?>
                        <label for="booktype">le genre du livre</label>
                        <input type="checkbox" name="bookType" value="1">
                    <?php endif; ?>
                    <br />
                    <?php if(isset($_SESSION['parution'])) :?>
                    <label for="parution">année de parution</label>
                    <input type="checkbox" name="parution" value="1" checked>
                    <?php else: ?>
                        <label for="parution">année de parution</label>
                        <input type="checkbox" name="parution" value="1">
                    <?php endif; ?>
                    <br />
                    <?php if(isset($_SESSION['ageCible'])) :?>
                    <label for="ageCible">age minimum</label>
                    <input type="checkbox" name="ageCible" value="1" checked>
                    <?php else: ?>
                        <label for="ageCible">age minimum</label>
                        <input type="checkbox" name="ageCible" value="1">
                    <?php endif; ?>
                    <br />
                    <input type="submit" value="enregistrer">
                </form>



            </div>
        </main>
        <footer><?php require_once 'templates/footer.php' ?></footer>
    </body>
</html>

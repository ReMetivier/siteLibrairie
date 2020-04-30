<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Ma librairie</title>
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/index.css">
    </head>
    <body>
        <header><?php require_once 'templates/header.php' ?></header>
        <main class="flex">
            <h1>Bienvenue <?php if(isset($_SESSION['name'])): echo $_SESSION['name']; endif;?> sur notre librairie en ligne</h1>
            <img src="/img/fondAcceuil.jpg" alt="">
        </main>
        <footer></footer>
    </body>
</html>

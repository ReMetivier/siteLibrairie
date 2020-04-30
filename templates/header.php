<?php session_start();?>
<header>
    <nav class="flex">

        <img src="/img/Logo.png" alt="Logo du site" id="logo">

        <ul class="flex">
            <li><a href="/"><img src="/img/acceuil.png" alt="image d'acceuil" class="icone" ></a></li>
            <li><a href="/listing.php"><img src="/img/listing.png" alt="des livres" class="icone"></li>
            <li>
                <?php if(isset($_SESSION['name'])): ?>
                    <a href="/livreCodageCrypto.php"><img id="livreCrypto" src="/img/codageCrypto.jpg" alt=""></a>
                    <a href="/profile.php"><img src="/img/iconeCompte.png" alt="image du compte" class="icone"></a>
                    <a href="/controllers/logOut.php"><img id="deco"src="/img/deconnexion.png" alt="image du deconnexion" class="icone"></a>
                <?php else:?>
                    <a href="/form.php"><img src="/img/login.png" alt="image du compte" class="icone"></a>
                <?php endif; ?>
            </li>
        </ul>
    </nav>
</header>

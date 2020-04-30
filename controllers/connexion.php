<?php

session_start();

//identifiant autorisé
$idUser = 'Regis';
$passUser = '1234';
$userName = 'Metivier';
$userAge = '38';
$mail= 'r.metivier@it-students.fr';
$name = strtolower($_POST['name']);

$password = $_POST['password'];





//test des identifiants si bon log retour acceuil avec connexion sinon renvoi formulaire avec msg erreur
if($_POST['name'] == $idUser && $_POST['password']==$passUser){
    $_SESSION['name'] = ucfirst($_POST['name']);
    $_SESSION['userName'] = $userName;
    $_SESSION['userAge'] = $userAge;
    $_SESSION['bookType'] = 1;
    $_SESSION['parution'] = 1;
    $_SESSION['ageCible'] = 1;
    $_SESSION['mail'] = $mail;
    header('Location: /');
    exit;
}else{
    header ("Refresh: 2;URL=/form.php");
    exit;
}

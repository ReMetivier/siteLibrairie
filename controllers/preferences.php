<?php
session_start();
$_SESSION['bookType'] = $_POST['bookType'];
$_SESSION['parution'] = $_POST['parution'];
$_SESSION['ageCible'] = $_POST['ageCible'];
header('Location: /livreCodageCrypto.php');

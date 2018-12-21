<?php

$bdd = new PDO('mysql:host=localhost;dbname=wsprosit5;charset=utf8', 'root', '');

$pseudo = $_POST['pseudo'];
$motDePasse = $_POST['motDePasse'];

$st=$bdd->query("SELECT COUNT(*) FROM utilisateur WHERE pseudo ='".$pseudo."' AND motDePasse ='".$motDePasse."'")->fetch();

if ($st['COUNT(*)']==1)
    {
        echo "Bienvenue";
    }
else echo "Vous n'existez pas";

?>

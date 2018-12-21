<?php
$bdd = new PDO('mysql:host=localhost;dbname=wsprosit5;charset=utf8', 'root', '');

$requete=$bdd->prepare("SELECT nom FROM produit");

$requete->bindValue(':nom', PDO::PARAM_STR);

$requete->execute();

$rowAll = $requete->fetchAll(PDO::FETCH_BOTH);

foreach ($rowAll as $row)
{
    echo $row;
}

?>
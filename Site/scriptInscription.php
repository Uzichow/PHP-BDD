<?php
$bdd = new PDO('mysql:host=localhost;dbname=wsprosit5;charset=utf8', 'root', '');


$pseudo = $_POST['pseudo'];
$motDePasse = $_POST['motDePasse'];

// Requête préparée pour empêcher les injections SQ
$requete = $bdd->prepare("INSERT INTO utilisateur (pseudo, motDePasse) VALUES( :pseudo,:motDePasse)");

$requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
$requete->bindValue(':motDePasse', $motDePasse, PDO::PARAM_STR);

$select= $bdd->prepare("SELECT pseudo FROM utilisateur WHERE pseudo = :pseudo");
$select->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
$select->execute();

if ($user=$select->fetch(PDO::FETCH_ASSOC)== null)
{
    $requete->execute();
}
else echo "Pseudo déjà pris";




?>
<?php
/**
 * Created by PhpStorm.
 * User: ciloo
 * Date: 22/09/16
 * Time: 11:08
 */
include('bdd.php');


$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$mail = $_GET['mail'];
$mdp = $_GET['mdp'];

$connexion = getConnection();

$newentry  = "INSERT INTO Personne (prenom, nom, Mail, Motdepasse) VALUES ('$prenom', '".$nom."', '".$mail."', '".$mdp."')";




execSql($connexion, $newentry);









 header ('location: ../public/index.php');
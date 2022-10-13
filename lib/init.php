<?php

/*
 * Code d'initialisation des tous les programmes
 */
// Affichage des erreurs
ini_set('display_errors', 1);
error_reporting(E_ALL);

// ouverture de la base de Donnée
// new PDO(Paramètre de connexion, login, mote de passe)
global $bdd;
$bdd = new PDO("mysql:host=localhost;charset=UTF8;dbname=devgestion;charset=UTF8", "root", "");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

?> 
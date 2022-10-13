<?php

session_start();

require "lib/init.php"; /// fichier de connexion

include 'views/page/connexion.php';

/* si le bouton se connecter est préssé  */
if (isset($_POST['formconnexion'])) {
    $login_username = htmlspecialchars($_POST['login_username']);

    $login_password = htmlspecialchars(($_POST['login_password']));
    /* si l'emplacement du mail et du mot de passe n'est pas vide */
    if(!empty($login_username) AND !empty($login_password)){
        /* il regarde si il trouve les éléments dans la base de données  */

        /* il execute la requête sql */

        $requser = $bdd->prepare("SELECT login_username, login_password from employe where login_username = ? and login_password = ?");
        $requser->execute(array($login_username, $login_password ));

        $userexist = $requser->rowCount();

        /* si l'utilisateur existe */
        if($userexist == 1)
        {

           $userinfo = $requser->fetch(); /* resultat de la formule */
           $_SESSION['id'] = $userinfo['id'];/* user info prend l'id comme contenue */
           $_SESSION['login_username'] = $userinfo['login_username'];/* user info prend l'email comme contenue */


           /* quand il est connecté il arrive sur la page de la comptabilité  */
           header("Location: comptabilite.php?id=".$_SESSION['id']);

        }
        else
        {

          echo " Mauvais mail ou mot de passe ";
        }
    }
    else{

        echo "tout les champs doivent être complétés ";

    }
}

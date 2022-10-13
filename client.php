<?php

require "lib/init.php";

/* 3 requetes sql qui toutes les 3 vont selectionner toutes les informations qui se trouvent dans les 3 bases de données */

$reponse1 = $bdd->query("SELECT * FROM entreprise");


$reponse2 = $bdd->query("SELECT * FROM contact");


$reponse3 = $bdd->query("SELECT * FROM projet");

include 'views/page/client.php';
/* si le bouton presse ajouter client est activé les commandes situées dans le si suivant vont être éxécutés  */
if (isset($_POST['form_ajout_client'])){
    

    /* requête sql pour inserer les données entreprises dans la base de données table entreprise */
    $requete1 = $bdd->prepare("INSERT INTO entreprise(Nom) VALUES(?)");

    
    

            $requete1->execute(array($_POST['nom_entreprise']));
            $last_id=$bdd->lastInsertId(); 
        
/* requête sql pour inserer les contacts des entreprises dans la table contact  */
    $requete2 = $bdd->prepare("INSERT INTO contact(id,Nom,Prenom,Fonction,Tel,Email)VALUES(?,?,?,?,?,?)");
            

            $requete2->execute(array($last_id,$_POST['nom'],$_POST['prenom'],$_POST['fonction'],$_POST['tel'],$_POST['email']));

            /* inserer les données des projets dans la table projet */
    $requete3 = $bdd->prepare("INSERT INTO projet(id,Nom,Description)VALUES(?,?,?)");  
     
            $requete3->execute(array($last_id,$_POST['nom_projet'],$_POST['description']));
            
            echo "test";
}
else{
    echo "test2";
}
?>

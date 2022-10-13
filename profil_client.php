<?php
 require "lib/init.php";



if (isset($_GET['id']) and !empty($_GET['id'])) {
    $get_id = htmlspecialchars($_GET['id']);
    $entreprise = $bdd->prepare('SELECT * FROM entreprise WHERE id = ?');
    $entreprise->execute(array($get_id));
}
/*
    
    $contact = $bdd->prepare('SELECT CO.Nom, CO.Prenom, CO.Fonction, CO.Tel, CO.Email FROM contact AS CO
INNER JOIN projet ON CO.id where id = ?');


    $nomprojet = $bdd->prepare('SELECT PR.Nom ,PR.Description
FROM projet AS PR
INNER JOIN entreprise ON PR.Id = entreprise.id where id = ? ');

    if ($entreprise->rowCount() == 1) {
        $entreprise = $entreprise->fetch();
        $titre = $entreprise['titre'];
        $contenu = $article['contenu'];

    } else {
        die("Cet entreprise n'existe pas !");
    }
} else{
    die('Erreur');
}
*/


include 'views/page/profil_client.php'; 

?>

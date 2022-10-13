<?php

// Rôle:  Inserer les données saisies dans un formulaire dans la base de données 

// Fonction : 
// Variable : 


require "lib/init.php"; /// fichier de connexion

$reponse = $bdd->query("SELECT * FROM compta");

include 'views/page/comptabilite.php';


// Deb ajout comptabilité
if (isset($_POST['form_ajout_compta']) and(isset ($_FILES['upfile']) and !empty($_FILES['upfile']['name']))  ) {
     // taille max du fichier 5 mo
// Insertion fichier :

    $tailleMax = 5097152;
    // extension de fichiers
    $extensionsValides = array('jpg', 'jpeg', 'pdf', 'png'); 
    //requete préparé
    //insertion des données dans la base de données
    
    //il execute la commande insert into
     // si la taille du fichier est inferieur a la taille maximum le fichier rentre
    if ($_FILES['upfile']['size'] <= $tailleMax) {
        $extensionsUpload = strtolower(substr(strrchr($_FILES['upfile']['name'], '.'), 1));
        
        if (in_array($extensionsUpload, $extensionsValides))
        //le fichier va se trouver sur ce chemin là 
        {
           
            // concaténation chemin fichier . la date du jour années mois jour h . extension du fichier
            $chemin = "assets/comptabilite/facture/" ;
            $nom =  date("Y-m-d-H-i-s") . "." . $extensionsUpload;
            $resultat = move_uploaded_file($_FILES['upfile']['tmp_name'], $chemin . $nom );
            $requete = $bdd->prepare("INSERT INTO `compta`(`Types`, `Fichier`, `Dates`, `Libelle`, `Ref`, `Auxiliaire`, `Flux_HT`, `TVA`) VALUES (?,?,?,?,?,?,?,?)
            ");
            

                        // les $_POST corresspondent a ce qu'on recherche 
                     $requete->execute(array(
                    $_POST['TYPES'],$nom, $_POST['Dates'],
                     $_POST['Libelle'], $_POST['Ref'],
                      $_POST['Auxiliaire'], $_POST['Flux_HT'], 
                      $_POST['TVA']));
                     echo 'test1';
        
                        
          // sinon il ne rentre pas
 } else{
                
                    $msg = "Votre fichier doit être au format jpg, jpeg, pdf, png"; 
                }
     } //signalement
    else {
                $msg = "votre fichier ne doit pas dépasser 5Mo";
            }
        
    echo "test2";

    echo "<script>iziToast.success({title: 'OK',message: 'Successfully inserted record!',});</script>";
} else {
    echo "<script>iziToast.warning({title: 'Caution', message: 'TEST',});</script>";
}




  

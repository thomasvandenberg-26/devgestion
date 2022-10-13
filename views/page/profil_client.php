<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    include 'views/fragment/head.php'
    ?>
    <title>Profils client | DevERP</title>
</head>

<body>
    <?php include 'views/fragment/header.php'    ?>
    <main class="main_profil_client">
       
   
    <?php 
    if(isset($_GET['nom_entreprise'])){
     $q = htmlspecialchars($_GET['nom_entreprise']);
    $entreprise = $bdd->query('SELECT Nom FROM entreprise WHERE id LIKE "%'.$q.'%" ' );
    
    }
    ?>
    <?php while ($donnees = $entreprise->fetch()){


         ?>

    
       <h1><?php echo $donnees['Nom'] ?></h1>

      

            <?php include 'views/fragment/contact/projet_client.php' ?>


            <?php include 'views/fragment/contact/contact_client.php' ?>
    </main>
 
</body>

<!--<script src="js/slide.js"> </script>-->


<?php } ?>
<!-- Appele librairie -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/qrcodejs/qrcode.js" defer></script>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    include 'views/fragment/head.php'
    ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>

    <title>comptabilité | DevERP</title>
</head>

<body>
    <?php
    include 'views/fragment/header.php'
    ?>
    <main class="main_comptabilite">
        <h1>Comptabilité</h1>

        <?php
        include 'views/fragment/comptabilite/ajout_compta.php'
        ?>

        <div class="tab">
            <a class="tablinks" onclick="openCompta(event, 'achats_sortie')">Achats | Sortie</a>
            <a class="tablinks" onclick="openCompta(event, 'ventes_entrees')">Ventes | Entrées</a>
            <a class="tablinks" onclick="openCompta(event, 'banques')">Banques</a>
            <a class="tablinks" onclick="openCompta(event, 'operation')">Opération</a>
            <a class="tablinks" onclick="openCompta(event, 'diverses')">Diverses</a>
        </div>

        <article id="achats_sortie" class="tabcontent">
            <?php
            include 'views/fragment/comptabilite/achats_sortie.php'
            ?>
        </article>

        <article id="ventes_entrees" class="tabcontent">
            <?php
            include 'views/fragment/comptabilite/ventes_entrees.php'
            ?>
        </article>

        <article id="banques" class="tabcontent">
            <?php
            include 'views/fragment/comptabilite/banques.php'
            ?>
        </article>

        <article id="operation" class="tabcontent">
            <?php
            include 'views/fragment/comptabilite/operation.php'
            ?>
        </article>

        <article id="diverses" class="tabcontent">
            <?php
            include 'views/fragment/comptabilite/diverses.php'
            ?>
        </article>

    </main>
</body>

</html>

<script src="js/tab.js"></script>
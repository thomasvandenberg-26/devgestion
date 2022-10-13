<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    include 'views/fragment/head.php'
    ?>

    <title>Client | DevERP</title>
</head>

<body>

    <?php
    include 'views/fragment/header.php'
    ?>
    <main class="main_client">
        <h1>Client</h1>


        <?php
        include 'views/fragment/client/ajout_client.php';
        ?>

        <?php
        include 'views/fragment/client/tout_client.php';
        ?>
    </main>
</body>

</html>
<!-- fonction ajout nouveau projet et nouveau contact -->
<script src="js/tab2.js" charset="utf-8"></script>

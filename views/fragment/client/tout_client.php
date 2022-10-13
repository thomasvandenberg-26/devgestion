<article class="tout_client">
    <h2>Tout les clients</h2>
    <form method= "GET" action="client.php">
        <label for="nom_entreprise">Nom d'entreprise</label>
        <input name="nom_entreprise" id="nom_entreprise" type="search">
        <input type="submit" value="Valider">
    </form>

    <?php

    $entreprise = $bdd->query('SELECT * FROM entreprise ORDER BY id DESC');
    if(isset($_GET['nom_entreprise']))
    {
    $q = htmlspecialchars($_GET['nom_entreprise']);
    if (!empty($q)) {
     
        $entreprise = $bdd->query('SELECT * FROM entreprise WHERE Nom LIKE"%' . $q . '%" ORDER BY id DESC');
     
     //   $entreprise->execute(array($q));
    }
}
    ?>
    <table>
        <thead>
            <tr>
                <th>Nom de l'entreprise</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($donnees = $entreprise->fetch()) {

            ?>
                <tr>
                    <td><?php echo $donnees['Nom'] ?></td>



                    <td>
                        <a href="profil_client.php?id=Thomas+vandenberg">Voir</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</article>
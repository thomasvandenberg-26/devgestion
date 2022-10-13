<form>
    <label for="date">Date</label>
    <input name="date" type="date">

    <input type="submit" value="Valider">
</form>

<img onclick="window.location='csv.php'" src="assets/svg/excel.svg" alt="bouton télécharger fichier csv">

<?php 

/* requete sql pour aller chercher toutes les factures de type Opération */
$request_client = $bdd->prepare("SELECT * FROM compta WHERE Types='operation'");
$request_client->execute();
?>


<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Libellé</th>
            <th>Référence</th>
            <th>Auxiliaire</th>
            <th>Flux HT</th>
            <th>TVA</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php while ($donnees = $request_client->fetch()) {

            ?>
        <tr>
            <td><?php echo $donnees['Dates'] ?></td>
            <td><?php echo $donnees['Libelle'] ?></td>
            <td><?php echo $donnees['Ref'] ?></td>
            <td><?php echo $donnees['Auxiliaire'] ?></td>
            <td><?php echo $donnees['Flux_HT'] ?></td> 
            <td><?php echo $donnees['TVA']?></td>

        <td>
        <button>Voir</button>
        </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
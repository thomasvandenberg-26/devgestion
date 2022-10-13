<form >
<form>
    <label for="date">Date</label>
    <input name="date" type="date">

    <input type="submit" value="Valider">
</form>

<img onclick="window.location='csv.php'" src="assets/svg/excel.svg" alt="bouton télécharger fichier svg">

<?php 
/*
$query = $bdd->query("SELECT * FROM compta WHERE Types='achat_sortie' ");
if ($query === false){
    var_dump($bdd->errorInfo());
    die('Erreur SQL');
}
$client = $query->fetchAll();
print_r($client);
*/
/* requete sql pour aller chercher toutes les factures de type achat sortie */
$request_client = $bdd->prepare("SELECT * FROM compta WHERE Types='achat_sortie'");
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
                <button onclick="window.location='csv.php'">Voir</button>
                
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</form>
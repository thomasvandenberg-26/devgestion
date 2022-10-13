<form id="ajout_produit_achete" class="ajout_compta" method="post" action="comptabilite.php" enctype="multipart/form-data">
    <h2>Ajout comptabilité</h2>

    <div>
        <label for="TYPES">Types</label>
        <!-- balise de déroulement avec 4 types possibles  -->
        <select name="TYPES" id="" require>
            <option value="">-- Choisir une option --</option>
            <option value="achat_sortie">Achat | Sortie</option>
            <option value="ventes_entrees">Ventes | Entrées</option>
            <option value="operation">Opération</option>
            <option value="diverses">Diverses</option>
        </select>


        <!-- balise fichier , pour inserer un fichier via le formulaire -->
        <label for="upfile"></label>
        <input type="file" name="upfile" id="upfile">


    </div>
    <div>
        <!-- balise de type date, pour afficher la date d'achat -->
        <label for="Dates">Date</label>
        <input name="Dates" type="date" require>

        <!-- balise de type pour afficher diverses informations concernant le produit et sa facture -->
        <label for="Libelle">Libellé</label>
        <input name="Libelle" type="text" require>

        <label for="Ref">Référence</label>
        <input name="Ref" type=text require>
    </div>
    <div>
        <label for="Auxiliaire">Auxiliaire</label>
        <input name="Auxiliaire" type="text" require>

        <label for="Flux_HT">Flux HT</label>
        <input name="Flux_HT" type="text" require>
 
        <!-- balise de déroulement pour choisir la TVA -->
        <label for="TVA">TVA</label>
        <select name="TVA" id="TVA" require>
            <option value="0.5">0.5%</option>
            <option value="10">10%</option>
            <option value="20">20%</option>
        </select>
    </div>

    <!-- validation du formulaire -->
    <input type="submit" value="Valider" name="form_ajout_compta">
</form>
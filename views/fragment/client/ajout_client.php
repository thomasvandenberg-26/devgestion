<form id="ajout_compta" class="ajout_client"  method="post" action="client.php">



    <!-- Ajout Client -->
    <div>
        <h2 class="cent">Ajout Client</h2>

        <label for="nom_entreprise">Nom d'entreprise</label>
        <input name="nom_entreprise" id="nom_entreprise" type="text">
    </div>

    <!-- Contact -->
    <div class="contact">
        <h2>Contact</h2>

        <button type="button" onclick="ajout_nouveaucontact();">+ Ajouter un nouveaux contact</button>

        <label for="nom">Nom</label>
        <input name="nom" id="nom" type="text" id="nom">

        <label for="prenom">Prénom</label>
        <input name="prenom" id="prenom" type="text">

        <label for="fonction">Fonction</label>
        <input name="fonction" id="fonction" type="text">

        <label for="tel">Téléphone</label>
        <input name="tel" id="tel" type="tel">

        <label for="email">Email</label>
        <input name="email" id="email" type="email">
    </div>

    <!-- Projet -->
    <div class="projet">
        <h2>Projet</h2>

        <button type="button" onclick="ajout_nouveauprojet();">+ Ajouter un nouveaux projet</button>

        <label for="nom_projet">Nom de projet</label>
        <input name="nom_projet" id="nom_projet" type="text" id="nom_projet" >

        <label class=description for="description">Description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    </div>

    <input type="submit" value="valider" name="form_ajout_client">
</form>
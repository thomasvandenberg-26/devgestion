<h1>Devis | Facture</h1>

 
        <h2>Ajout devis | factures</h2>

        <article>


                <h2>Coordonnées : </h2>

                <div>
                        <label for="Nom client">Nom client</label>
                        <input name="Nom client" type="text" require>

                        <label for="contact">Libellé</label>
                        <input name="contact" type="text" require>
                </div>

                <div>
                        <label for="Type">Type </label>
                        <select name="Type">
                                <option value="Facture"> Facture </option>
                                <option value="Devis"> Devis </option>
                        </select>
                </div>

        </article>

        <article>

                <h2> Description </h2>

                <div>
                        <label for="Projet">Projet</label>
                        <input name="Projet" type="text" require>

                        <label for="Quantité">Quantité</label>
                        <input type="number" name=Quantité require>

                </div>
                <div>
                        <label for="prix_Unitaire">Prix Unitaire</label>
                        <input type="number" name=prix_Unitaire require>


                        <label for="Taxe">Taxe</label>
                        <input type="number" name=Taxe require>
                </div>

        </article>
        
        <button name="Valider" onclick="window.location=facture_devis.php">Valider</button>
        

</form>
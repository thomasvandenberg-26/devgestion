function ajout_nouveauprojet(){
document.getElementById('nom_projet').insertAdjacentHTML('afterend', '<label for="nom"> Nom de projet </label>'
+' <input name="nom_projet" id="nom_projet" type="text" id="nom_projet" >'
+' <label class=description for="description">Description</label>'
+' <textarea name="description" id="" cols="30" rows="10"></textarea>');
}

function ajout_nouveaucontact(){
    document.getElementById('nom').insertAdjacentHTML('afterend','<label for="nom">Nom</label>'
    +'<input name="nom" id="nom" type="text">'
    +'<label for="prenom">Prénom</label>'
    +'<input name="prenom" id="prenom" type="text">'
    +'<label for="fonction">Fonction</label>'
    +'<input name="fonction" id="fonction" type="text">'
    +'<label for="tel">Téléphone</label>'
    +'<input name="tel" id="tel" type="tel">'
    +'<label for="email">Email</label>'
    +'<input name="email" id="email" type="email">');

}   


<?php
require "lib/init.php";
if(isset($_GET['type']))
{
    $type=$_GET['type'];
}
else{
    
$type="achat_sortie";
}
$requete = $bdd->prepare("SELECT * from compta where Types = '{$type}'");
    $requete->execute();
echo("hello");


header( 'Content-Type: text/csv' );
header( 'Content-Disposition: attachment;filename=tableau.csv');
$fp = fopen('php://output', 'w');
fputs($fp, $bom  =(chr(0xEF) . chr(0xBB) . chr(0xBF) ));
fputcsv($fp, array('Dates', 'Libelle', 'Ref', 'Auxiliaire','Flux_HT','TVA'));

while ($donnees = $requete->fetch()) {

    
fputcsv($fp, array( $donnees['Dates'], $donnees['Libelle'],$donnees['Ref'],$donnees['Auxiliaire'], $donnees['Flux_HT'],$donnees['TVA'])  );

}
fclose($fp);


?>
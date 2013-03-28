<?php
require_once("Classes/appelClasse.php");
$bdd = new BDD();

$q = $bdd->query("SELECT * FROM users");


header("Content-Type: text/xml ; charset=utf-8");
$resultat = '<?xml version="1.0" encoding="utf-8"?>';
$resultat.='<users>';
while ($ligne    = $q->fetch())
{
    $resultat.="<user id='" . $ligne["ID"] . "'>";
    $resultat.='<nom>'.$ligne["Nom"].'</nom>';
    $resultat.='<prenom>' . $ligne["Prenom"]. '</prenom>';
    $resultat.="</user>";
}
$resultat.='</users>';
echo $resultat;
?>

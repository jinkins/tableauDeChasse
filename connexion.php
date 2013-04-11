<?php

require_once("Classes/appelClasse.php");

$userManager = new UserManager();
if($userManager->connexion($_POST["qui"], $_POST["mdp"]) == true)
{
    $ok = "main.php";
    //$_SESSION["user"] = $userManager->select($_POST["id"]);
}
else
{
    $ok = "non";
}
header("Content-Type: text/xml ; charset=utf-8");
$resultat = '<?xml version="1.0" encoding="utf-8"?>';
$resultat.='<reponse>';
$resultat.='<resultat>';
$resultat.= $ok;
$resultat.='</resultat>';
$resultat.='</reponse>';
echo $resultat;
?>
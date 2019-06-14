<?php                
//connexion à la bdd
$mysql_serveur = "localhost";
$mysql_pseudo = "evaluation03";
$mysql_pass = "evaluation03";
$mysql_bdd = "evaluation04";

$bdd=new mysqli ($mysql_serveur, $mysql_pseudo, $mysql_pass, $mysql_bdd);
if ($bdd->connect_errno)
{
    echo "Echec lors de la connexion à MySQL
    (" . $bdd->connect_errno . ") " . $bdd->connect_errno;
}
?>
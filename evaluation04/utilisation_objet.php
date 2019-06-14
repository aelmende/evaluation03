<?php
include("./include/sql_connect.php");
include("./objet.php");

$table = "aderents";
$tablePost = $_POST['table'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$code_postal = $_POST['code_postal'];
$ville = $_POST['ville'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$photo = $_POST['photo'];
$MDP = $_POST['MDP'];

$sql = new BDD;
$sql = $this->createTable($table);
$sql = $this->insert($tablePost,$nom,$prenom,$adresse,$code_postal,$ville,$telephone,$email,$photo,$MDP);
?>
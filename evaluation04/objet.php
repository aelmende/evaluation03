<?php
class BDD {
    
    public $sql;

    function __construct() {

    }
    function createTable() {
        $sql = "CREATE TABLE `".$table."` ( 
            `id` int(10) unsigned NOT NULL auto_increment, 
            `nom` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP, 
            `prenom` varchar(40) NOT NULL, 
            `adresse` varchar(40) NOT NULL, 
            `code_postal` varchar(40) NOT NULL, 
            `ville` varchar(40) NOT NULL, 
            `telephone` varchar(40) NOT NULL, 
            `email` varchar(40) NOT NULL, 
            `photo` varchar(40) NOT NULL, 
            `MDP` varchar(40) NOT NULL, 
            PRIMARY KEY (`id`) 
         )";
         $bdd->query($sql) or die ('Erreur SQL !' .$sql. '<br />' .$bdd->error);
    }
    function insert($table,$nom,$prenom,$adresse,$code_postal,$ville,$telephone,$email,$photo,$MDP) {
		$sql = "UPDATE ".$table." SET nom=".$nom."";
        $bdd->query($sql) or die ('Erreur SQL !' .$sql. '<br />' .$bdd->error);
        $sql = "UPDATE ".$table." SET prenom=".$prenom."";
        $bdd->query($sql) or die ('Erreur SQL !' .$sql. '<br />' .$bdd->error);
        $sql = "UPDATE ".$table." SET adresse=".$adresse."";
        $bdd->query($sql) or die ('Erreur SQL !' .$sql. '<br />' .$bdd->error);
        $sql = "UPDATE ".$table." SET code_postal=".$code_postal."";
        $bdd->query($sql) or die ('Erreur SQL !' .$sql. '<br />' .$bdd->error);
        $sql = "UPDATE ".$table." SET ville=".$ville."";
        $bdd->query($sql) or die ('Erreur SQL !' .$sql. '<br />' .$bdd->error);
        $sql = "UPDATE ".$table." SET telephone=".$telephone."";
        $bdd->query($sql) or die ('Erreur SQL !' .$sql. '<br />' .$bdd->error);
        $sql = "UPDATE ".$table." SET email=".$email."";
        $bdd->query($sql) or die ('Erreur SQL !' .$sql. '<br />' .$bdd->error);
        $sql = "UPDATE ".$table." SET photo=".$photo."";
        $bdd->query($sql) or die ('Erreur SQL !' .$sql. '<br />' .$bdd->error);
        $sql = "UPDATE ".$table." SET MDP=".$MDP."";
        $bdd->query($sql) or die ('Erreur SQL !' .$sql. '<br />' .$bdd->error);
    }
    function __destruct() {
        
    }
}
?>
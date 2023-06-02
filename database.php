<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=ecein', 'root', 'root');
}
 
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>
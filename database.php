<?php
//identifier le nom de base de données
$database_name = "ecein";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de passe = '' (rien)
$db_handle = new mysqli('localhost:3308', 'root', '', $database_name);

// Vérifier la connexion
if ($db_handle->connect_error) {
    die("Erreur de connexion à la base de données: " . $db_handle->connect_error);
}

// Stocker l'objet de connexion dans la variable $database
$database = $db_handle;
?>

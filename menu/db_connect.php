<?php
// db_connect.php

$host = 'localhost'; // ou l'adresse de votre serveur MySQL
$db_name = 'repetiteur_db'; // Nom de votre base de données
$username = 'root'; // Votre nom d'utilisateur MySQL
$password = ''; // Votre mot de passe MySQL

try {
    // Établir la connexion
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    // Définir le mode d'erreur PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Afficher un message d'erreur en cas d'échec de la connexion
    echo "Échec de la connexion : " . $e->getMessage();
    exit;
}
?>

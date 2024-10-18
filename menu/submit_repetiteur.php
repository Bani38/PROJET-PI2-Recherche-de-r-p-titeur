<?php
// submit_repeater.php

// Inclure la connexion à la base de données
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer et valider les données
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $matiere = htmlspecialchars(trim($_POST['matiere']));
    $localisation = htmlspecialchars(trim($_POST['localisation']));

    // Vérifier que l'email est valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email invalide.";
        exit;
    }

    // Préparer la requête d'insertion
    $stmt = $pdo->prepare("INSERT INTO repetiteurs (nom, email, telephone, matiere, localisation) VALUES (?, ?, ?, ?, ?)");

    // Exécuter la requête et gérer le résultat
    if ($stmt->execute([$nom, $email, $telephone, $matiere, $localisation])) {
        echo "Répétiteur ajouté avec succès !";
    } else {
        echo "Une erreur est survenue lors de l'ajout du répétiteur.";
    }
} else {
    echo "Méthode de requête invalide.";
}
?>


<?php
// Mockup data
$repetiteurs = [
    1 => ['name' => 'Alice Dupont', 'subject' => 'Mathématiques', 'location' => 'Paris', 'bio' => 'Passionnée de mathématiques, je donne des cours depuis 5 ans.'],
    2 => ['name' => 'Jean Martin', 'subject' => 'Physique', 'location' => 'Lyon', 'bio' => 'Enseignant en physique, je m\'efforce de rendre les concepts accessibles.'],
];

$id = $_GET['id'] ?? null;
$repetiteur = $id ? $repetiteurs[$id] ?? null : null;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du repetiteur</title>
    <link rel="stylesheet" href="styles.css">
</head>
<Style> 
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

header {
    background-color: #4CAF50;
    color: white;
    padding: 1em;
    text-align: center;
}

h1 {
    margin: 0;
}

h2 {
    color: #4CAF50;
}

/* Styles du contenu principal */
main {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

p {
    line-height: 1.6;
}

/* Styles des boutons */
button {
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #45a049;
}

/* Styles du modal */
#modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
}

#modalContent {
    background: white;
    padding: 20px;
    border-radius: 8px;
    width: 400px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

#closeModal {
    background-color: #f44336; /* Rouge pour fermer */
}

/* Réactions aux boutons */
#closeModal:hover {
    background-color: #d32f2f;
}

/* Liens */
a {
    color: #4CAF50;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Responsive */
@media (max-width: 600px) {
    main {
        width: 90%;
        padding: 15px;
    }
}
</Style>
<body>
    <header>
        <h1>Détails du répétiteur</h1>
    </header>
    <main>
        <?php if ($repetiteur): ?>
            <h2><?php echo htmlspecialchars($repetiteur['name']); ?></h2>
            <p><strong>Matière :</strong> <?php echo htmlspecialchars($repetiteur['subject']); ?></p>
            <p><strong>Localisation :</strong> <?php echo htmlspecialchars($repetiteur['location']); ?></p>
        <?php else: ?>
            <p>Répétiteur non trouvé.</p>
        <?php endif; ?>
        <a href="index.php">Retour à la recherche</a>
    </main>
    <script src="script.js"></script>
</body>
</html>

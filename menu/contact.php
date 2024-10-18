<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Destock</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f7f9;
    color: #333;
    margin: 0;
    padding: 0;
}

header {
    background-color: #4CAF50;
    color: white;
    text-align: center;
    padding: 20px 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

h1 {
    margin: 0;
}

main {
    max-width: 800px;
    margin: 20px auto;
    padding: 30px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
}

section {
    margin-bottom: 30px;
}

h2, h3 {
    color: #4CAF50;
    border-bottom: 2px solid #4CAF50;
    padding-bottom: 10px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s;
}

input[type="text"]:focus,
input[type="email"]:focus,
textarea:focus {
    border-color: #4CAF50;
    outline: none;
}

button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #45a049;
}

#response {
    margin-top: 20px;
}

footer {
    text-align: center;
    padding: 20px 0;
    background-color: #f1f1f1;
    border-top: 1px solid #ccc;
    margin-top: 20px;
}

a {
    color: #4CAF50;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>
<body>
    <header>
        <h1>Contactez-nous</h1>
    </header>
    
    <main>
        <section>
            <h2>Nous sommes là pour vous aider !</h2>
            <p>Si vous avez des questions, des suggestions ou des préoccupations, n’hésitez pas à nous contacter.</p>
        </section>

        <section>
            <h3>Formulaire de contact</h3>
            <form id="contactForm" action="contact.php" method="POST">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Envoyer</button>
            </form>
            <div id="response"></div>
        </section>

        <section>
            <h3>Informations de contact</h3>
            <p>Email : <a href="mailto:baniabdousalam@gmail.com">support@destock.com</a></p>
            <p>Téléphone : 95267038 et 41969540</p>
            <p>Adresse : 123 Rue de l'Éducation, Afrique, Bénin</p>
        </section>

        <footer>
            <p>&copy; 2024 Destock. Tous droits réservés.</p>
        </footer>
    </main>

    <script>
        $(document).ready(function() {
            $('#contactForm').on('submit', function(e) {
                e.preventDefault(); // Empêche l'envoi normal du formulaire

                $.ajax({
                    type: 'POST',
                    url: 'contact.php',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#response').html(response);
                        $('#contactForm')[0].reset(); // Réinitialise le formulaire
                    },
                    error: function() {
                        $('#response').html('<p style="color:red;">Une erreur s\'est produite. Veuillez réessayer.</p>');
                    }
                });
            });
        });
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Vous pouvez ici envoyer l'e-mail ou enregistrer les données
        // mail($to, $subject, $message, "From: $email");

        echo "<p style='color:green;'>Merci, $name ! Votre message a été envoyé.</p>";
        exit; // Évite de rediriger après l'envoi
    }
    ?>
    <script src="script.js"></script>
</body>
</html>

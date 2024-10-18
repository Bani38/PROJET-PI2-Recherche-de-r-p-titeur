<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>devenir repetiteur</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #5b9bd5;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #5b9bd5;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #4a8cc7;
        }

        #responseMessage {
            margin-top: 20px;
            text-align: center;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>

<h1>Devenir Répétiteur</h1>
<form id="repetiteurForm" method="POST" action="submit_repetiteur.php">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>

    <label for="telephone">Téléphone :</label>
    <input type="text" id="telephone" name="telephone">

    <label for="matiere">Matière :</label>
    <input type="text" id="matiere" name="matiere" required>

    <label for="localisation">Localisation :</label>
    <input type="text" id="localisation" name="localisation" required>

    <button type="submit">Soumettre</button>
</form>


<div id="responseMessage"></div>

<script>
$(document).ready(function() {
    $('#repetiteurForm').on('submit', function(event) {
        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'submit_repetiteur.php',
            data: $(this).serialize(),
            success: function(response) {
                $('#responseMessage').html(response);
                $('#repetiteurForm')[0].reset();
            },
            error: function() {
                $('#responseMessage').html('Une erreur est survenue. Veuillez réessayer.');
            }
        });
    });
});
</script>
<script src="script.js"></script>
</body>
</html>

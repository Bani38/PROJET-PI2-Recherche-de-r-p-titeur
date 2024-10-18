<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue sur Destock Répétiteurs</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
			body {
				font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
				margin: 0;
				padding: 0;
				background-color: #f0f4f8;
				color: #333;
			}
	
			header {
				background-color: #007bff;
				color: white;
				padding: 20px 0;
				text-align: center;
				box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
			}
	
			nav ul {
				list-style: none;
				padding: 0;
			}
	
			nav ul li {
				display: inline;
				margin: 0 15px;
			}
	
			nav ul li a {
				color: white;
				text-decoration: none;
				font-weight: bold;
				transition: color 0.3s;
			}
	
			nav ul li a:hover {
				color: #ffcc00;
			}
	
			main {
				padding: 20px;
			}
	
			.search, .about {
				background: white;
				border-radius: 8px;
				padding: 20px;
				margin: 20px auto;
				max-width: 600px;
				box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			}
	
			.search h2, .about h2 {
				color: #007bff;
				margin-bottom: 15px;
			}
	
			input[type="text"] {
				width: calc(50% - 10px);
				padding: 10px;
				margin: 10px 5px 20px 0;
				border: 1px solid #ddd;
				border-radius: 5px;
				box-sizing: border-box;
				transition: border-color 0.3s;
			}
	
			input[type="text"]:focus {
				border-color: #007bff;
				outline: none;
			}
	
			button {
				padding: 10px 20px;
				background-color: #007bff;
				color: white;
				border: none;
				border-radius: 5px;
				cursor: pointer;
				font-size: 16px;
				transition: background-color 0.3s;
			}
	
			button:hover {
				background-color: #0056b3;
			}
	
			footer {
				text-align: center;
				padding: 20px 0;
				background-color: #333;
				color: white;
				position: relative;
				bottom: 0;
				width: 100%;
			}
			body, html {
    margin: 0;
    padding: 0;
    height: 100%;
	
}

		</style>
<body>
<div class="background-t.jfif">
    <header>
        <h1>Bienvenue sur Destock Répétiteurs</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="recherche.php">Rechercher</a></li>
                <li><a href="devenir_repetiteur.php">Devenir répétiteur</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="search">
            <h2>Trouver un répétiteur</h2>
            <form action="recherche.php" method="GET">
                <input type="text" name="subject" placeholder="Matière" required>
                <input type="text" name="location" placeholder="Localisation" required>
                <button type="submit">Rechercher</button>
            </form>
			<div id="searchResults"></div>
        </section>

        <section class="about">
            <h2>À propos de nous</h2>
            <p>Destock Répétiteurs vous aide à trouver le répétiteur idéal pour vous ou votre enfant, dans toutes les matières et à proximité de chez vous.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Destock Répétiteurs. Tous droits réservés.</p>
    </footer>
	 <!-- Modal -->
	 <div id="modal" style="display:none;">
            <div id="modalContent"></div>
            <button id="closeModal">Fermer</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

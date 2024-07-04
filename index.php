<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Jeu</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Bienvenue sur le site de Mon Jeu</h1>
        <nav>
            <ul>
                <li><a href="#features">Caractéristiques</a></li>
                <li><a href="#screenshots">Captures d'écran</a></li>
                <li><a href="#download">Téléchargement</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="features">
        <h2>Caractéristiques</h2>
        <p>Présentation des caractéristiques du jeu.</p>
    </section>

    <section id="screenshots">
        <h2>Captures d'écran</h2>
        <img src="images/bscreen.png" alt="Screenshot 1">
        <img src="images/sad.jpg" alt="Screenshot 2">
    </section>

    <section id="download">
        <h2>Téléchargement</h2>
        <p>Informations sur le téléchargement ou l'achat du jeu.</p>
    </section>

    <section id="contact">
        <h2>Contact</h2>
        <form action="includes/contact.php" method="post">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Mon Jeu. Tous droits réservés.</p>
    </footer>

    <script src="js/scripts.js"></script>
</body>
</html>

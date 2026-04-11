<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Devinette Dinosaures</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1>🦖 Devinette Dinosaure</h1>
</header>

<main>

<p>
    🧠 Devinette :  
    Je suis le dinosaure le plus célèbre, un grand carnivore avec de petites bras… Qui suis-je ?
</p>

<form method="POST" action="devinette-resultat.php">

    <label>Ta réponse :</label>
    <input type="text" name="reponse" placeholder="Ex: T-Rex" required>

    <button type="submit">Valider</button>

</form>

</main>

<footer>
    <a href="index.html">🏠 Retour à l'accueil</a>
</footer>

</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Résultat Devinette</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1>🦖 Résultat</h1>
</header>

<main>

<?php

$reponse = strtolower(trim($_POST["reponse"]));

if ($reponse == "t-rex" || $reponse == "trex" || $reponse == "tyrannosaurus rex") {

    echo "<p>✅ Bravo ! C'était bien le Tyrannosaurus Rex !</p>";

    echo '<a href="trex.html">🦖 Voir la page du T-Rex</a><br><br>';

    echo '<form action="devinette.php">
            <button type="submit">Nouvelle tentative</button>
          </form>';

} else {

    echo "<p>❌ Mauvaise réponse !</p>";

    echo "<p>Indice : je suis un grand carnivore très connu...</p>";

    echo '<form action="devinette.php">
            <button type="submit">Réessayer</button>
          </form>';
}

?>

</main>

<footer>
    <a href="index.html">🏠 Retour à l'accueil</a>
</footer>

</body>
</html>
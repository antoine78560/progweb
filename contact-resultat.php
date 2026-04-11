<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Résultat</title>
</head>

<body>

<h1>📩 Résultat du formulaire</h1>

<?php
echo "Pseudo : " . $_GET["pseudo"] . "<br>";
echo "Email : " . $_GET["email"] . "<br>";

echo "Newsletter : " . $_GET["newsletter"] . "<br>";

if (!empty($_GET["frequence"])) {
    echo "Fréquence : " . $_GET["frequence"] . "<br>";
}

echo "<h3>Catégories choisies :</h3>";

if (!empty($_GET["cat"])) {
    foreach ($_GET["cat"] as $cat) {
        echo "➡️ " . $cat . "<br>";

        if ($cat == "carnivores") {
            echo '<a href="trex.html">Voir les carnivores</a><br>';
        }

        if ($cat == "herbivores") {
            echo '<a href="triceratops.html">Voir les herbivores</a><br>';
        }

        if ($cat == "volants") {
            echo '<a href="pteranodon.html">Voir les dinosaures volants</a><br>';
        }
    }
}
?>

</body>
</html>
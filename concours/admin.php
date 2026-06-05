<?php require_once 'outils.php'; ?>
<?php $stmt = $db->query("SELECT * FROM question");

foreach ($stmt as $q) {
    echo $q['id']." - ".$q['texte']." - ".$q['points']." pts<br>";
} ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration du concours</title>
</head>
<body>

    <h1>Administration du concours</h1>

    <p>Cette page permet de gérer les questions du concours.</p>

    <a href="index.php">Retour à l'accueil</a>

</body>
</html>
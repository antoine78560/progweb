<?php include "outils.php"; $db = connexionBdd();

$stmt = $db->query("SELECT *, RAND() AS hasard FROM question ORDER BY hasard LIMIT 1");
$q = $stmt->fetch();
?>

<h1>Question au hasard</h1>

<form method="POST" action="hasard-resultat.php">
    <p><?= $q['texte'] ?></p>

    <input type="hidden" name="id" value="<?= $q['id'] ?>">

    <button type="submit" name="choix" value="Oui">Oui</button>
    <button type="submit" name="choix" value="Non">Non</button>
</form>

<a href="index.php">Accueil</a>
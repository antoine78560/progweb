<?php include "outils.php"; $db = connexionBdd();

$id = $_POST['id'];
$choix = $_POST['choix'];

$stmt = $db->prepare("SELECT * FROM question WHERE id = ?");
$stmt->execute([$id]);
$q = $stmt->fetch();

if ($q['reponse'] == $choix) {
    echo "Bonne réponse !<br>";
    echo "Points gagnés : ".$q['points'];
} else {
    echo "Mauvaise réponse";
}
?>
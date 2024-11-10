<?php
// j'appelle le fichier 'Notes.php' dans 'calcul_moyenne_1.php'
require 'Notes.php';

// je crée une instance, et je base mon nouvel objet '$notes' sur la classe 'Notes()'
$notes = new Notes();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul Moyenne 1</title>
</head>
<body>
    <!-- j'affiche les résultats de la methode 'affichageMoyennes()' -->
    <p><?php $notes->affichageMoyennes(); ?></p>
    <!-- j'affiche le resultat de la méthode 'affichageMoyenneG()' -->
    <p>La moyenne générale de l'élève est de : <?php $notes->affichageMoyenneG(); ?>/20.</p>
</body>
</html>
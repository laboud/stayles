<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de commande</title>
</head>
<body>
  
    <?php
// Vérifie si des données ont été envoyées via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère le nom et la commande depuis le formulaire
    $nom = $_POST['nom'];
    $commande = $_POST['commande'];
    
    // Chemin du fichier de commande spécifique pour chaque personne
    $chemin_fichier = "commandes/$nom.txt";

    // Écrit la commande dans le fichier
    file_put_contents($chemin_fichier, $commande);

    // Redirige vers une page de confirmation
    header("Location: confirmation.php");
    exit();
}
?>
<?php
// Vérifie si des données ont été envoyées via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère le nom et la commande depuis le formulaire
    $nom = $_POST['nom'];
    $commande = $_POST['commande'];
    
    // Chemin du fichier de commande
    $chemin_fichier = "/chemin/absolu/vers/le/fichier/commande_$nom.txt";

    // Écrit la commande dans le fichier
    file_put_contents($chemin_fichier, $commande);

    // Redirige vers une page de confirmation
    header("Location: confirmation.php");
    exit();
}
?>
</body>
</html>
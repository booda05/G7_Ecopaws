<?php

// Démarrez la session
session_start();

// Inclure le fichier de connexion à la base de données
require("connexion.php");

// Récupérer les données du formulaire de connexion
$username = $_POST["username"];
$password = $_POST["mdp"];

// Requête pour vérifier les informations d'identification
$user = $bdd->prepare("SELECT * FROM user WHERE username = ? AND mdp = ?");
$user->execute([$username, $password]);

// Vérifier si l'utilisateur existe
if ($user->rowCount() > 0) {
    // Récupérer les données de l'utilisateur
    $userData = $user->fetch();

    // Stocker l'ID de l'utilisateur dans la session
    $_SESSION["idCli"] = $userData["id"];

    // Utilisateur trouvé, définir les informations de session
    $_SESSION["connected"] = true;
    $_SESSION["username"] = $username;

    // Redirection vers la page d'accueil
    header("Location: index2.php");
    exit();
} else {
    // Utilisateur non trouvé, redirection avec erreur
    header("Location: identification.php?erreur");
    exit();
}

?>

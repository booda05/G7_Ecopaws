<?php 
session_start(); // Assurez-vous que session_start() est appelé au début

require("connexion.php");

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['connected']) || $_SESSION['connected'] !== true) {
    // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
    header('Location: identification.php');
    exit; // Empêche l'exécution du reste du script
}

// Récupère l'ID du client à partir des données de session ou POST
$idCli = $_SESSION['idCli']; // Supposons que vous stockez l'ID client dans $_SESSION['idCli'] lors de la connexion

// Prépare une requête pour vérifier si l'ID client existe dans la table `user`
$stmt = $bdd->prepare("SELECT id FROM user WHERE id = :idCli");
$stmt->execute(['idCli' => $idCli]);

// Vérifie si l'ID client existe
if ($stmt->rowCount() > 0) {
    // L'ID client existe, procéder à l'insertion dans `panier`
    try {
        $insertStmt = $bdd->prepare("INSERT INTO panier (nom, qte, idCli) VALUES (:nom, :qte, :idCli)");
        $insertStmt->execute([
            'nom' => $_POST['prodt'],
            'qte' => $_POST['nombre'],
            'idCli' => $idCli
        ]);
        header("Location: index2.php"); // Redirection après l'ajout réussi
    } catch (Exception $e) {
        echo "Echec ajout: " . $e->getMessage(); // Gestion des erreurs d'insertion
    }
} else {
    // L'ID client n'existe pas, afficher un message d'erreur
    echo "Echec de l'ajout: l'ID client spécifié n'existe pas.";
}
?>

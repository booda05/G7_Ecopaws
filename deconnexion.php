<?php
session_start(); // Démarre la gestion de session

// Détruit toutes les données de session
$_SESSION = array();

// Si vous voulez détruire complètement la session, effacez également le cookie de session.
// Note : Cela détruira la session, et pas seulement les données de session !
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy(); // Détruit la session

header('Location: index.php'); // Redirige vers la page d'accueil
exit();
?>
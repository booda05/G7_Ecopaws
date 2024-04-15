<?php 
session_start(); // Démarrer la session
include 'navigation.php';

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['connected']) || $_SESSION['connected'] !== true) {
    // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
    header('Location: identification.php');
    exit; // Assurez-vous qu'aucun code supplémentaire n'est exécuté après la redirection
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Produit1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style_produit.css">
    <meta charset="utf-8">
</head>

<body>
    <div class="container-1">
        <!-- La partie Nav BAR -->
        <!-- La partie titre -->

        <div class="divproduit">
            <div style="grid-area: titre; text-align: center;">
                <h2 class="prodf">Arbre a chat Josefa</h2>
            </div>

            <div style="grid-area: image;">
                <img src="image/produits/chat1.jpg">
            </div>

            <div style="grid-area: description;line-height: 1.5;">
                <p class="desc1">Arbre à chat Josefa</p>
                <p class="desc2">45 CAD</p>
                <p class="desc3">
                    <ul>
                        <li>particulièrement adapté aux grands félins</li>
                        <li>avec couverture en peluche de très haute qualité</li>
                        <li>Malles enveloppées dans du sisal et une peluche</li>
                        <li>naturels très épais</li>
                        <li>plateau de canapé rembourré et échelle extra solide</li>
                        <li>Cave équipée de peluche / toison</li>
                        <li>avec coussin réversible : lavage à la main</li>
                        <li>plaque de base épaisse et lourde</li>
                        <li>avec une corde de sisal</li>
                        <li>Couleur: beige</li>
                    </ul>
                </p>

                <form action="traitajout.php" method="POST">
                    <input type="hidden" name="prodt" value="Arbre a chat Josefa">
                    <input type="number" name="nombre" id="nombre" class="nombre" min="1" max="10" value="1">
                    <input type="hidden" name="idCli" value="<?php echo $_SESSION['idCli']; ?>">
                    <input type="submit" value="Ajouter au panier">
                </form>
            </div>
        </div>

        <!-- LE FOOTER -->
        <?php include 'footer.php'; ?>
    </div>
</body>
<script type="text/javascript" src="ajout.js"></script>
</html>

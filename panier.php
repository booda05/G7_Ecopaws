<?php session_start();
include 'navigation.php' ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Panier</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>


	<?php 
	require("connexion.php");
	$tabpanier = $bdd->query("SELECT * FROM panier WHERE idCli = '".$_SESSION['idCli']."'");

	?>

	<!-- La partie PANIER -->
	<div class="panier">
		<!-- <p style="font-size: 60px;text-align: center;">Le panier est vide</p>
			<img src="image/panier-vide.png" style="max-width: 200px; margin-left: 540px;"> -->

			<?php 
                $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if (strpos($fullUrl, "delete") == true) {
                    echo "<p style='color:red;'>Produit supprimé du panier</p>";
                }
                if (strpos($fullUrl, "ajoute") == true) {
                    echo "<p style='color:green;'>Commande passée avec succés !</p>";
                }
                ?>

			<?php 
			while ($tuple = $tabpanier->fetch()) {
				echo '<div style="background-color:grey;">
				<p>Nom produit : </p>
				<p>'.$tuple["nom"].'</p>

				<p>quantite produit : </p>
				<p>'.$tuple["qte"].'</p>

				<form action="delete.php" method="POST">
				<input type="text" name="id" value="'.$tuple["id"].'" style="display:none;">
				<input type="submit" name="" value="Supprimer">
				</form>

				</div>
				
				';
			}

			?>


			<form action="commande.php" method="POST">
				<input type="submit" name="" value="Passer la commande">
			</form>

		</div>
		<!-- La partie Footer -->
		<?php  include'footer.php'; ?>
			</body>
			</html>
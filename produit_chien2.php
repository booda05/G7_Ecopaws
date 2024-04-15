<?php 
session_start();
include 'navigation.php';
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
		

		<!-- La partie titre -->


		<div class="divproduit">
			<div style="grid-area: titre; text-align: center;">
				<h2>Royal canin Berger Allemand 16KG</h2>
			</div>

			<div style="grid-area: image;">
				<img src="image/produits/chien2.jpg" style="max-width: 40vw;">
			</div>

			<div style="grid-area: description;line-height: 1.5;">
				<p class="desc1 prodf">Royal canin Berger Allemand 16KG</p>
				<p class="desc2">129 CAD</p>
				<p class="desc3">
					Les croquettes Royal Canin Berger Allemand Adult répondent aux besoins nutritionnels spécifiques et au mode de vie de votre chien. Tous les produits Royal Canin sont soumis à un contrôle de qualité exhaustif afin de garantir une qualité optimale des aliments.
					<ul>
						<li>aliment complet pour berger allemand adulte dès 15 mois</li>
						<li>spécialement adaptées aux besoins de cette race</li>
						<li>riches en nutriments : peuvent favoriser la santé des os et des articulations et aider votre chien à atteindre un poids sain</li>  
					</ul>
				</p>
				<p class="idclif" style="display: none;"><?php echo $_SESSION['idCli']; ?></p>

				<form action="traitajout.php" method="POST">
					<input type="text" name="prodt" class="prodt" style="display: none;">
					<input type="number" name="nombre" id="nombre" class="nombre" min="0" max="10">

					<input type="text" name="idclit" class="idclit" style="display: none;">

					<input type="submit" name="" value="Ajouter au panier">
				</form>
			</div>
		</div>


		<!-- LE FOOTER -->
		<?php  include 'footer.php'; ?>
			</div>


		</body>
		<script type="text/javascript" src="ajout.js"></script>
		</html>
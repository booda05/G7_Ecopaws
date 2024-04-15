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
				<h2>Meradog croquettes pour chien Adult 15 Kg</h2>
			</div>

			<div style="grid-area: image;">
				<img src="image/produits/chien5.png">
			</div>

			<div style="grid-area: description;line-height: 1.5;">
				<p class="desc1 prodf">Meradog croquettes pour chien Adult 15 Kg</p>
				<p class="desc2">55 CAD</p>
				<p class="desc3">
					Un repas délicieux et complet pour les chiens adultes de toute taille, cette recette de nourriture sèche pour chiens hautement digestible est faite d’ingrédients de haute qualité qui donnent à votre meilleur ami à quatre pattes la nutrition 100% complète dont il a besoin pour vivre longtemps et en bonne santé. Avec des protéines denses pour soutenir des muscles forts, un puissant apport de vitamines et de minéraux pour un style de vie actif et énergique, ainsi qu’un croustillant croustillant pour aider à garder les dents de votre chien propres et son haleine fraîche.
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
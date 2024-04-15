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
				<h2>Niche en plastique pour chiens IMAC</h2>
			</div>

			<div style="grid-area: image;">
				<img src="image/produits/chien4.jpg" style="max-width: 40vw;">
			</div>

			<div style="grid-area: description;line-height: 1.5;">
				<p class="desc1 prodf">Niche en plastique pour chiens IMAC</p>
				<p class="desc2">80 CAD</p>
				<p class="desc3">
					Un produit de qualité , la niche Imac vous séduira par son design et son confort. Son plancher est surélevé avec des pieds antidérapants pour une parfaite isolation du sol , Disponible en 3 différentes tailles .
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
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
				<h2>Cachette Timothy Bungalow</h2>
			</div>

			<div style="grid-area: image;">
				<img src="image/produits/r1.jpg" style="min-width: 40vw;">
			</div>

			<div style="grid-area: description;line-height: 1.5;">
				<p class="desc1 prodf">Cachette Timothy Bungalow</p>
				<p class="desc2">64 CAD</p>
				<p class="desc3">
					Voici un jeu comestible qui plaira à votre rongeur : un abri 100% naturel tressé à la main à base de foin de phléole des près.
					En plus d'être une cachette pour votre rongeur, le Bungalow Timothy favorisera la consommation de fibres indispensables à son équilibre alimentaire.
					Ce jouet sera très apprécié par votre petit animal et éveillera sa curiosité.
					Disponible en deux tailles, il s'adaptera parfaitement à votre rongeur et à sa cage.
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
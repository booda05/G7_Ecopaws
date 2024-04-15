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
				<h2>Purina One Delicate 1.5 Kg Saumon</h2>
			</div>

			<div style="grid-area: image;">
				<img src="image/produits/chat4.jpg">
			</div>

			<div style="grid-area: description;line-height: 1.5;">
				<p class="desc1 prodf">Purina One Delicate 1.5 Kg Saumon</p>
				<p class="desc2">22 CAD</p>
				<p class="desc3">
					Développée par les vétérinaires et les nutritionnistes PURINA, PURINA ONE BIFENSIS® contient, en plus des bactéries fonctionnelles bénéfiques, tous les nutriments essentiels dont votre chat a besoin, tels que des acides gras Oméga 6. Cette formule double défense contribue à la fois, à l’intérieur, à soutenir la production naturelle d’anticorps de votre chat et, à l’extérieur, à maintenir sa peau saine et son pelage brillant.

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
		<?php include 'footer.php'; ?>



			</div>


		</body>
		<script type="text/javascript" src="ajout.js"></script>
		</html>
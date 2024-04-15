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
				<h2>Maisonette pour rongeur</h2>
			</div>

			<div style="grid-area: image;">
				<img src="image/produits/r2.jpg" style="min-width: 40vw;">
			</div>

			<div style="grid-area: description;line-height: 1.5;">
				<p class="desc1 prodf">Maisonette pour rongeur</p>
				<p class="desc2">18 CAD</p>
				<p class="desc3">
					Craquez pour cette petite maison en bois qui peut accueillir les petits rongeurs comme les hamsters, souris et gerbilles.
					Votre animal pourra se cacher et se mettre à l'abri dans cette maisonnette.
					En bois naturel avec son toit reconvert d'écorces, elle sera du plus bel effet dans la cage de votre petit rongeur.
					Pour plus de confort, vous pouvez la remplir de "lit douillet" ou de paille et votre rongeur aura son nouveau nid bien chaud !
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
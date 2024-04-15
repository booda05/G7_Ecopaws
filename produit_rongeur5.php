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
				<h2>Tunnel Carotte</h2>
			</div>

			<div style="grid-area: image;">
				<img src="image/produits/r5.jpg" style="min-width: 40vw;">
			</div>

			<div style="grid-area: description;line-height: 1.5;">
				<p class="desc1 prodf">Tunnel Carotte</p>
				<p class="desc2">25 CAD</p>
				<p class="desc3">
					Ce tunnel de jeu saura se distinguer par son design avec ses carottes imprimées mais également par sa qualité de fabrication en polyester dur et durable.
					Convient aux cochons d'inde, furets, rats et lapins nains.
					Grâce à ces languettes en velcro, ce tunnel peut se raccorder à un ou plusieurs tunnels ensemble.
					Lavage à la main.
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
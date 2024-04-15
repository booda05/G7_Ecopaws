<?php 
session_start(); 
include 'navigation';
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
				<h2>Royal Canin maxi puppy 15 Kg</h2>
			</div>

			<div style="grid-area: image;">
				<img src="image/produits/chien3.jpg">
			</div>

			<div style="grid-area: description;line-height: 1.5;">
				<p class="desc1 prodf">Royal Canin maxi puppy 15 Kg</p>
				<p class="desc2">12,99 CAD</p>
				<p class="desc3">
					Même les grands chiens ont été petits une fois dans leur vie ! Pour que votre chiot devienne grand et beau, il est essentiel de lui offrir une alimentation équilibrée et complète. C’est pendant la première phase de croissance que la plus grande partie du squelette est formée. Durant cette période, il est primordial de fournir à votre chiot tous les nutriments dont il a besoin pour être en parfaite santé tout au long de sa vie.
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
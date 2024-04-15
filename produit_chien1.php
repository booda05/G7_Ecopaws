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
				<h2>NEKTON Dog Natural plus 100 g</h2>
			</div>

			<div style="grid-area: image;">
				<img src="image/produits/chien1.jpg" style="min-width: 40vw; ">
			</div>

			<div style="grid-area: description;line-height: 1.5;">
				<p class="desc1 prodf">NEKTON Dog Natural plus 100 g</p>
				<p class="desc2">24 CAD</p>
				<p class="desc3">Nekton dog natural plus est un complément alimentaire pour chiens à base d'ingrédients naturels et de L cardinite.
					La préparation complémentaire Nekton dog natural plus est utile et totalement nouvelle, elle contient exclusivement des substances naturelles.
					<ul>
						<li>Ces substances vitales d’origine végétale ont des effets positifs en ce qui concerne le bien-être ou la forme générale et aident également à la digestion et à l’assimilation dans l’organisme.</li>
						<li>Corriger les irrégularités dans la digestion, telles que la diarrhée ou la constipation, améliore l’assimilation de la nourriture quotidienne ou d’aliments préparés.</li>
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
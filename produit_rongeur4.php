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
				<h2>Selective Lapin Adulte</h2>
			</div>

			<div style="grid-area: image;">
				<img src="image/produits/r4.jpg" style="min-width: 40vw;">
			</div>

			<div style="grid-area: description;line-height: 1.5;">
				<p class="desc1 prodf">Selective Lapin Adulte</p>
				<p class="desc2">25 CAD</p>
				<p class="desc3">
					L'aliment Selective pour lapins adultes est nutritif, complet et équilibré.
					Enrichi en fibres à base de luzerne, cet aliment contient les teneurs et les types idéaux de fibres dans les proportions correctes, pour faciliter la motilité intestinale et favoriser la santé dentaire.
					Par ailleurs, il a une faible teneur en sucres, ce qui permet d’éviter l’obésité, et il est enrichi en graines de lin, une excellente source d’acides gras oméga 3 et 6. Il contient des prébiotiques et de l'extrait de Yucca.
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
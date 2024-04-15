<?php session_start();
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
				<h2>Croquette Whiskas 1.4 Kg Poulet</h2>
			</div>

			<div style="grid-area: image;">
				<img src="image/produits/chat3.jpg">
			</div>

			<div style="grid-area: description;line-height: 1.5;">
				<p class="desc1 prodf">Croquette Whiskas 1.4 Kg Poulet</p>
				<p class="desc2">15 CAD</p>
				<p class="desc3">
					Contient de savoureuses croquettes fourrées, croquantes à l'extérieur et délicieusement tendres à l'intérieur, sans arôme artificiel ajouté.
					Apport en minéraux contrôlé pour aider au maintien d'un système urinaire sain
					Des recettes optimisées avec moins de calories par portion*, ce qui est particulièrement bénéfique pour les chats stérilisés moins actifs,			avec des fibres végétales sélectionnées pour favoriser une bonne digestion
					Aide à nettoyer les dents grâce à un effet légèrement abrasif
					Avec des acides gras oméga-6 et du zinc pour favoriser une peau saine et un pelage brillant
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
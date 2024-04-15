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

	

		
		<!-- La partie titre -->


		<div class="divproduit">
			<div style="grid-area: titre; text-align: center;">
				<h2>Friskies croquette chat adulte 7.5Kg</h2>
			</div>

			<div style="grid-area: image;">
				<img src="image/produits/chat2.png" style="max-width: 400px;">
			</div>

			<div style="grid-area: description;line-height: 1.5;">
				<p class="desc1 prodf">Friskies croquette chat adulte 7.5Kg</p>
				<p class="desc2">64 CAD</p>
				<p>
					Une gamme de produits savoureux, pour que votre chat se régale chaque jour. Une nutrition 100% complète et équilibrée avec des protéines de haute qualité, des acides gras, des vitamines et des minéraux pour aider à maintenir votre chat en bonne santé, plein de vitalité et heureux.
					<ul>
						<li>Aliment complet pour chats adultes</li>
						<li>Avec des fibres d’origine naturelle pour favoriser une bonne digestion</li>
						<li>Dents et os sains grâce aux minéraux essentiels et à la vitamine D</li> 
						<li>Muscles toniques grâce aux protéines de haute qualité</li>
						<li>Peau saine et pelage brillant grâce aux acides gras essentiels</li>
						
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
		<?php include 'footer.php' ?>



			</div>


		</body>
		<script type="text/javascript" src="ajout.js"></script>
		</html>
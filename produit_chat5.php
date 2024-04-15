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
				<h2 class="prodf">Cage de transport italienne pour chat – IMAC</h2>
			</div>

			<div style="grid-area: image;">
				<img src="image/produits/chat5.jpg" style="max-width: 40vw;">
			</div>

			<div style="grid-area: description;line-height: 1.5;">
				<p class="desc1">Cage de transport italienne pour chat – IMAC</p>
				<p class="desc2">38 CAD</p>
				<p class="desc3">
					Cette caisse de transport au look super fun et mode accueillera à bras ouverts votre félin qui ne pourra y être qu'à son aise. Elles est adaptée aux chats de toute taille.
					Une cage de transport ou une caisse de transport sont indispensables pour les trajets en voiture ou en avion de votre chat.DZ SHOP a choisi pour vous ce produits fiable, sûr et bon marché pour la sécurité de votre chat !
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
			<?php include 'footer.php';?>
			</div>


		</body>
		<script type="text/javascript" src="ajout.js"></script>
		</html>
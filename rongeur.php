<?php 
include 'navigation.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>catégorie rongeur</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_categ.css">
	<meta charset="utf-8">
</head>
<body>
	<header>
	</header>

	<!-- La PARTIE DES PRODUITS -->
	<div>
		<p class="meuilleur">Nous Sélectionnons le meilleur pour votre Rongeur</p>

		<div class="divproduits">

			<div style="grid-area: produit1;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;">
				<a href="produit_rongeur1.php">
					<div style="text-align:center;">
						<img src="image/Produits/r1.jpg" style="max-width: 200px; max-height: 200px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> RONGEUR </span> <br>
							<span class="txt2"><a href="" class="txt2">Cachette Timothy Bungalow</a></span>
						</p>
						<p class="txt3">64 CAD</p>
					</div>
				</a>
			</div>

			<div style="grid-area: produit2;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;width:35vw;">
				<a href="produit_rongeur2.php">
					<div style="text-align:center;">
						<img src="image/Produits/r2.jpg" style="max-width: 200px; max-height: 200px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> RONGEUR </span> <br>
							<span class="txt2"><a href="" class="txt2">Maisonette pour rongeur</a></span>
						</p>
						<p class="txt3">18 CAD</p>
					</div>
				</a>
			</div>


			<div style="grid-area: produit3;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;">
				<a href="produit_rongeur3.php">
					<div style="text-align: center;">
						<img src="image/Produits/r3.jpg" style="max-width: 200px; max-height:2100px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> RONGEUR </span> <br>
							<span class="txt2"><a href="" class="txt2">Naturaliss Lapin adulte</a></span>
						</p>
						<p class="txt3">22 CAD</p>
					</div>
				</a>
			</div>


			<div style=" grid-area: produit4;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;width:35vw;">
				<a href="produit_rongeur4.php">									
					<div style="text-align:center;">
						<img src="image/Produits/r4.jpg" style="max-width: 200px; max-height: 200px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> RONGEUR </span> <br>
							<span class="txt2"><a href="" class="txt2">Selective Lapin Adulte </a></span>
						</p>
						<p class="txt3">25 CAD</p>
					</div>
				</a>
			</div>


			<div style=" grid-area: produit5;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;position: relative;right: 75%; width: 35vw;">
				<a href="produit_rongeur5.php">	
					<div style="text-align:center;">
						<img src="image/Produits/r5.jpg" style="max-width: 200px; max-height: 180px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> RONGEUR </span> <br>
							<span class="txt2"><a href="" class="txt2">Tunnel Carotte</a></span>
						</p>
						<p class="txt3">2,99 CAD</p>
					</div>
				</a>
			</div>



		</div>
	</div>


	<?php include 'footer.php'; ?>

		</nav>
	</body>
	</html>
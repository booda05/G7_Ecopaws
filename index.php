<?php 
session_start();
session_destroy();
include 'navigation.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Titre</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>


	<div class="container-1">
		

		<!-- La partie image -->
		<div class="image">
			<p style="font-size: 70px;color:white;width: 30%; font-family: cursive;margin-left: 100px;top:15%;position: absolute;">
				Le meilleur pour vos animaux domestiques <br> </p> 
			</div>


			<!-- La partie MAIN qui contient les produits -->
			
			<div class="main" id="produits">
				<div class="top_produits" style="grid-area: top_produits;">
					<h4> TOP PRODUITS </h4>
				</div>
				<a href="#">
					<div class="produit1" style="display:flex; flex-direction: column; grid-area: produit1; border: black 1px;">
						<div class="flex1">
							<img src="image/Produits/chat1.jpg" style="max-width: 100px; max-height: 100px;">
						</div>

						<div class="flex2">
							<p> <span class="txt1"> CHATS </span> <br>
								<span class="txt2"><a href="" class="txt2">Arbre à chat Josefa</a></span>
							</p>
							<p class="txt3">45 CAD</p>
						</div>
					</div>
				</a>

				<a href="#">
					<div class="produit2" style="display:flex; flex-direction: column; grid-area: produit2; border: black 1px;">

						<div class="flex1">					
							<img src="image/Produits/chat3.jpg" style="max-width: 100px; max-height: 100px;">

						</div>
						<div class="flex2">
							<p> <span class="txt1">CHATS</span> <br>
								<a href="" class="txt2">Croquette Whiskas 3 lbs Poulet</p>
									<p class="txt3">15 CAD</p>
								</div>
							</div>
						</a>

						<a href="#">
							<div class="produit3" style="display:flex; flex-direction: column; grid-area: produit3; border: black 1px  ;">

								<div class="flex1">	
									<img src="image/Produits/chat5.jpg" style="max-width: 100px; max-height: 100px;">

								</div>

								<div class="flex2">
									<p> <span class="txt1"> CHIENS </span> <br>
										<a href="" class="txt2">Cage de transport italienne pour chat – IMAC</a><br> </p>
										<p class="txt3">38 CAD</p>
									</div>

								</div>
							</a>

							<a href="#">

								<div class="produit4" style="display:flex; flex-direction: column; grid-area: produit4; border: black 1px  ;">

									<div class="flex1">					
										<img src="image/Produits/chien2.jpg" style="max-width: 100px; max-height: 100px;">

									</div>
									<div class="flex2">
										<p> <span class="txt1"> CHIENS </span> <br>
											<a href="" class="txt2">Royal canin Berger Allemand 16KG</a><br> </p>
											<p class="txt3">14,99 CAD</p>
										</div>
									</div>
								</a>

								<a href="#">
									<div class="produit5" style="display:flex; flex-direction: column; grid-area: produit5; border: black 1px  ;">

										<div class="flex1"><img src="image/Produits/chien4.jpg" style="max-width: 100px; max-height: 100px;">

										</div>
										<div class="flex2"><p> <span class="txt1"> CHIENS </span> <br>
											<a href="" class="txt2">Niche en plastique pour chiens IMAC</a><br> </p>
											<p class="txt3">80 CAD</p>
										</div>
									</div>

								</a>
								<a href="#">
									<div class="produit6"style="display:flex; flex-direction: column; grid-area: produit6; border: black 1px  ;">

										<div class="flex1"><img src="image/Produits/r1.jpg" style="max-width: 100px; max-height: 100px;">

										</div>
										<div class="flex2"><p> <span class="txt1"> RONGEURS </span> <br>
											<a href="" class="txt2">Cachette Timothy Bungalow</a><br> </p>
											<p class="txt3">64 CAD</p>
										</div>
									</div>
								</a>

								<a href="#">
									<div class="produit7"style="display:flex; flex-direction: column; grid-area: produit7; border: black 1px  ;">

										<div class="flex1">					<img src="image/Produits/r3.jpg" style="max-width: 100px; max-height: 100px;">

										</div>
										<div class="flex2"><p> <span class="txt1"> RONGEURS </span> <br>
											<a href="" class="txt2">Naturaliss Lapin adulte</a><br> </p>
											<p class="txt3">22 CAD</p>
										</div>
									</div>
								</a>
								<a href="#">

									<div class="produit8"style="display:flex; flex-direction: column; grid-area: produit8; border: black 1px  ;">

										<div class="flex1">					<img src="image/Produits/r5.jpg" style="max-width: 100px; max-height: 100px;">

										</div>
										<div class="flex2"><p> <span class="txt1"> RONGEURS </span> <br>
											<a href="" class="txt2">Tunnel Carotte</a><br> </p>
											<p class="txt3">25,99 CAD</p>
										</div>
									</div>
								</a>

								<a href="#">
									<div class="produit9"style="display:flex; flex-direction: column; grid-area: produit9; border: black 1px  ;">

										<div class="flex1">					<img src="image/Produits/chien3.jpg" style="max-width: 100px; max-height: 100px;">

										</div>
										<div class="flex2"><p> <span class="txt1"> CHIENS </span> <br>
											<a href="" class="txt2">Royal Canin maxi puppy 15 Kg</a><br> </p>
											<p class="txt3">12,99 CAD</p>
										</div>
									</div>
								</a>

								<a href="#">
									<div class="produit10"style="display:flex; flex-direction: column; grid-area: produit10; border: black 1px  ;">
										<div class="flex1">
											<img src="image/Produits/chien5.png" style="max-width: 100px; max-height: 100px;">
										</div>
										<div class="flex2">
											<p> <span class="txt1"> CHIENS </span> <br>
												<a href="" class="txt2">Meradog croquettes pour chien Adult 15 Kg</a><br> </p>
												<p class="txt3">5,99 CAD</p>
											</div>
										</div>
									</a>

								</div>
								<!-- LESPACE ENTRE NOS DIV -->

								<div style="grid-area: espace; line-height: 4;">
									<br>
								</div>

								<!-- Notre phrase PUB -->

								<div  style="grid-area: pub1; text-align: center; box-shadow: 1px 0px 1px grey; ">
									<img src="image/cart.png" class="image-pub"> <br>
									<p> <span class="titre-pub">Livraison Express</span> <br>
										<span class="paragraphe-pub">Livraison gratuite à partir de <strong>100 CAD</strong> <br> d’achats sur <strong>Gatineau</strong>.</span></p>

									</div>

									<div  style="grid-area: pub2; text-align: center;
									box-shadow: 1px 0px 1px grey;">
									<img src="image/return.png" class="image-pub">
									<p><span class="titre-pub">Produit garantie </span><br>
										<span class="paragraphe-pub">Découvrez les marques et un <br> assortiment de produits essentiels pour <br> animaux de compagnie</span></p>

									</div>

									<div  style="grid-area: pub3; text-align: center; box-shadow: 0px 0px 0px grey;">
										<img src="image/living-room.png" class="image-pub">
										<p><span class="titre-pub">E-Boutique</span> <br>
											<span class="paragraphe-pub">Les meilleurs prix et promotions sur les <br>produits et fournitures pour animaux <br> domestiques</span></p>
										</div>



										<!-- Notre phrase Catégorie -->
										<div class="phrase" style="grid-area: phrase">
											<h2 style="text-align:center; color:#455054;">RETROUVEZ NOS 3 CATEGORIES</h2>
										</div>


										<!-- La partie des catégories -->

										<div id="categ" class="content1"><a href="chat.php">
											<span class="span1" style="left: 40%;bottom: 10%; color:white;">Chat</span>
											<img src="image/chat.png" class="chat" >
										</a></div>

										<div class="content2"><a href="rongeur.php">
											<img src="image/lapins.png" class="lapins" >
											<span class="span1" style="left: -20%; color:black;">Rongeur</span></a></div>

											<div class="content3"><a href="chien.php">
												<span class="span1" style="left: 40%;bottom: 3%; color:white;">Chiens</span>
												<img src="image/chien.png" class="chien" ></a></div>

												<!-- ESPACE 2 ENTRE LES DIV -->

												<div style="grid-area: espace2;line-height: 8;">
													<br>

												</div>



												


												<!-- ESPACE3 ENTRE LES DIV -->





												<!-- Le FOOTER -->


												<?php include 'footer.php'; ?>
													</div>


												</body>
												</html>
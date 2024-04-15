<?php 
session_start();
include 'navigation.php';
?>  
<!DOCTYPE html>
<html>
<head>
<title>À propos d'EcoPaws</title>
    <link rel="stylesheet" type="text/css" href="presentation.css">
    <link rel="stylesheet" type="text/css" href="magasin.css">
 
   
    <meta charset="utf-8">
</head>
<body>

    <div class="container-1">
        <!-- La partie Nav BAR -->


        <!-- La partie principale -->
        <div class="main">
                <div class="header-content">
            <img src="./image/chaton.jpg" alt="Chaton" class="chat-image">
            <h1>Bienvenue chez EcoPaws</h1>
             </div>

            <h2 style="text-align:center;">Boutique Éco-Responsable pour Animaux</h2>
            <p>Bienvenue dans EcoPaws, votre boutique éco-responsable dédiée aux accessoires pour animaux. Chez EcoPaws, nous croyons en une coexistence harmonieuse entre le confort de nos compagnons et le respect de notre planète. Notre mission est de fournir une expérience d'achat durable et de qualité pour vos animaux de compagnie, en vous offrant une gamme d'accessoires respectueux de l'environnement, conçus pour leur bien-être et le vôtre.</p>
            <h3>Notre Engagement</h3>
            <ul>
                <li><strong>Durabilité:</strong> Choisir des matériaux écologiques et des processus de fabrication respectueux de l'environnement pour minimiser notre empreinte carbone.</li>
                <li><strong>Qualité:</strong> Assurer la durabilité et le confort à travers des produits conçus pour résister à l'épreuve du temps et à l'usage quotidien.</li>
                <li><strong>Innovation:</strong> Rechercher continuellement des solutions innovantes pour améliorer l'expérience de nos clients et le bien-être de leurs animaux.</li>
            </ul>
            <p>Nous vous invitons à découvrir notre gamme d'accessoires et à nous rejoindre dans cette aventure éco-responsable pour le bien-être de nos compagnons à quatre pattes.</p>
        </div>
            
          	<div id="categ">
                <div class="content1"><a href="chat.php">
				<span class="span1" >Chat</span>
				<img src="image/chat.png" class="animal-image" >
				</a></div>

				<div class="content2"><a href="./rongeur.php">
				<img src="image/lapins.png" class="animal-image" >
				<span class="span1" >Rongeur</span></a></div>

				<div class="content3"><a href="./chien.php">
			    <span class="span1" >Chiens</span>
				<img src="image/chien.png" class="animal-image" ></a></div>
            </div>

        <!-- Le FOOTER -->
        <?php include 'footer.php'; ?>

    </div>

</body>
</html>

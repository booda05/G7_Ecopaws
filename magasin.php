<?php 
session_start();
include 'navigation.php';
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="presentation.css">
    <link rel="stylesheet" type="text/css" href="magasin.css">
   <h1>Magasin </h1>
   <h3>Choisissez une categorie</h3>
</head>
<body>
<div id="categ" >
  <div class="content1"><a href="chat.php">
        <span class="span1" >Chat</span>
        <img src="image/chat.png" class="chat" >
    </a></div>

    <div class="content2"><a href="./rongeur.php">
        <img src="image/lapins.png" class="lapins" >
        <span class="span1" >Rongeur</span></a></div>

        <div class="content3"><a href="./chien.php">
            <span class="span1" >Chiens</span>
            <img src="image/chien.png" class="chien" ></a></div>
</div>         

</body>

<?php 
include 'footer.php';
?>  
</html>
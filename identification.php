<?php
include 'navigation.php';
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style_identification.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"> </script>
	<script src="script.js" defer></script>
	<title>Mon site - Connexion</title>
</head>


<body>
	<!-- LA PARTIE D'INSCRIPTION -->

	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" style="color:white;">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab" style="color:white;">Sign Up</label>
			<div class="login-form">

				

				<!-- Connexion -->
				<form action="traiteconnexion.php" method="POST">
					<div class="sign-in-htm">
						<div class="group">
							<?php 
							$fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
							if (strpos($fullUrl, "erreur") == true) {
								echo "<p style='color:red;'>Email ou MDP incorrect</p>";
							}
							?>
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input" name="username">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="mdp">
						</div>
						<div class="group">
							<input id="check" type="checkbox" class="check" checked>
							<label for="check"><span class="icon"></span> Keep me Signed in</label>
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign In">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="#forgot" style="color:white;">Forgot Password?</a>
						</div>
					</div>
				</form>

				<!-- Inscription -->
				<form action="traiteinscription.php" method="POST">
					<div class="sign-up-htm">
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input" name="username">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="mdp">
						</div>
						<div class="group">
							<label for="pass" class="label">Repeat Password</label>
							<input id="pass" type="password" class="input" data-type="password">
						</div>
						<div class="group">
							<label for="pass" class="label">Email Address</label>
							<input id="pass" type="text" class="input" name="email">
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign Up">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<label for="tab-1">Already Member?</a>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>


<!-- LA PARTIE FOOTER -->
							<?php include 'footer.php';?>
		</html>
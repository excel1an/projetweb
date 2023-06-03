<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Accueil ECE In</title>
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<?php include "header.php";?>
		<div class="container2">
			<form>
				<div>
					<label for="nom">Nom d'utilisateur:</label>
					<input type="text" id="username" name="username"><br><br>
					<label for="bio">Informations:</label>
					<textarea id="informations" name="informations" rows="5" cols="10"></textarea>
					<br>
					<input type="submit" formaction="compte.php" value="Confirmer">
					<input type="submit" formaction="compte.php" value="Annuler">
				</div>
			</form>
		</div>
		<div id="footer">
			<div style="display: flex; align-items: center;">
				<img src="img/logo grand.png">
				<span style="text-align: center;">Tous droits réservés © 2023 - ECE in 
				<br>
				Contact :   
				<a href="https://www.google.com/maps/place/37+Quai+de+Grenelle,+75015+Paris/@48.8515004,2.2872324,17z/data=!3m1!4b1!4m6!3m5!1s0x47e6700497ee3ec5:0xdd60f514adcdb346!8m2!3d48.8515004!4d2.2872324!16s%2Fg%2F11bw3y1mf8?entry=ttu" target="_blank" style="text-decoration: none;">   37 Quai de Grenelle 75015 Paris</a> - +33 6 79 22 99 79 <br>   
 celian.guillaume@edu.ece.fr - julien.smatt@edu.ece.fr -  Célian Guillaume & Julien Smatt</span>
			</div>
		</div>	</body>
</html>

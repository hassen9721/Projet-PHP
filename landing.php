<?php
require_once "header.php";
require_once "session.php";
Verifier_session();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>site web de vente</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
	<link rel="stylesheet" href="css/landing.css">
</head>

<body class="">
	<br><br><br><br><br><br><br><br>
	<section>
		<div class="container">
			<div class="card">
				<div class="content">
					<div class="imgBx">
						<img src="images/vetements.jpg">
					</div>
					<div class="contentBx">
						<h3>Vêtements<br></h3>
					</div>


				</div>
				<ul class="sci">
					<li>
						<a href="pulls.php">Pull</a>
					</li>
					<li>
						<a href="pants.php">Pantalon</a>
					</li>

				</ul>
			</div>
			<div class="card">
				<div class="content">
					<div class="imgBx">
						<img src="images/accessoires.jpg">
					</div>
					<div class="contentBx">
						<h3>Accessoires<br></h3>
					</div>
				</div>
				<ul class="sci">
					<li>
						<a href="watchs.php">Montre</a>
					</li>

					<li>
						<a href="necklace.php">Collier</a>
					</li>
				</ul>
			</div>
			<div class="card">
				<div class="content">
					<div class="imgBx">
						<img src="images/chaussures.jpg">
					</div>
					<div class="contentBx">
						<h3>chaussures<br></h3>
					</div>
				</div>
				<ul class="sci">
					<li>
						<a href="boots.php">Chaussures</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
</body>


</html>
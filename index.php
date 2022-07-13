<!DOCTYPE HTML>
<!--
	Multiverse by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<?php
session_start(); // Démarrage de la session
require_once 'admin/model/connect-bdd.php'; // On inclut la connexion à la base de données
?>

<head>
	<title>Multiverse by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="shortcut icon" href="https://img.icons8.com/ios/50/000000/connectdevelop.png" type="image/x-con">
	<link rel="stylesheet" href="assets/css/main.css" />
	<script type="text/javascript" src="assets/js/script.js"></script>
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<h1><a href="index.php"><strong>Wedid Ben Hamidane</strong> Réalisateur</a></h1>
			<?php
			if (isset($_SESSION['user']['id'])) {
				if ($_SESSION['user']['id'] == 1) {
					echo '<h1><a class="btn btn-secondary" href="admin.php">Dashboard</a></h1>';
				}
			}
			?>
			<nav><?php
					if (isset($_SESSION['user']['id'])) {
						if ($_SESSION['user']['id'] == 1) {
							echo '<h1><a class="btn btn-secondary" href="admin/controller/deconnexion.php">Deconnexion</a></h1>';
						}
					}
					?>
				<ul>
					<li><a href="#footer" class="icon solid fa-info-circle">About</a></li>
				</ul>
			</nav>
		</header>
		<!-- Main -->
		<div id="main">
			<article class="thumb">
				<!-- Remplacer les (href="images/fulls/) par les iframe vimeo -->
				<a href="https://vimeo.com/724071791?login=true#_=_" class="image"><img src="images/thumbs/01.jpg" alt="" /></a>
				<h2>Magna feugiat lorem</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="https://vimeo.com/724069122" class="image"><img src="images/thumbs/02.jpg" alt="" /></a>
				<h2>Nisl adipiscing</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="https://vimeo.com/724077963" class="image"><img src="images/thumbs/03.jpg" alt="" /></a>
				<h2>Tempus aliquam veroeros</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/04.jpg" class="image"><img src="images/thumbs/04.jpg" alt="" /></a>
				<h2>Aliquam ipsum sed dolore</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/05.jpg" class="image"><img src="images/thumbs/05.jpg" alt="" /></a>
				<h2>Cursis aliquam nisl</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/06.jpg" class="image"><img src="images/thumbs/06.jpg" alt="" /></a>
				<h2>Sed consequat phasellus</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/07.jpg" class="image"><img src="images/thumbs/07.jpg" alt="" /></a>
				<h2>Mauris id tellus arcu</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/08.jpg" class="image"><img src="images/thumbs/08.jpg" alt="" /></a>
				<h2>Nunc vehicula id nulla</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/09.jpg" class="image"><img src="images/thumbs/09.jpg" alt="" /></a>
				<h2>Neque et faucibus viverra</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/10.jpg" class="image"><img src="images/thumbs/10.jpg" alt="" /></a>
				<h2>Mattis ante fermentum</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/11.jpg" class="image"><img src="images/thumbs/11.jpg" alt="" /></a>
				<h2>Sed ac elementum arcu</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
			<article class="thumb">
				<a href="images/fulls/12.jpg" class="image"><img src="images/thumbs/12.jpg" alt="" /></a>
				<h2>Vehicula id nulla dignissim</h2>
				<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
			</article>
		</div>

		<!-- Footer -->
		<footer id="footer" class="panel">
			<div class="inner split">
				<div>
					<section>
						<h2>Description</h2>
						<p>Vidéaste basé sur Genève et ses alentours.Spécialisé en montage. Maîtrise de DaVinci Resolve, Avid, Final cut, Première. Du clip au documentaire, en passant par le cinéma direct au court et long métrage, polyvalence et surtout passionné de cinéma.</p>
					</section>
					<section>
						<h2>Follow me on ...</h2>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-vimeo"><span class="label">Vimeo</span></a></li>
							<li><a href="#" class="icon brands fa-youtube"><span class="label">Youtube</span></a></li>
						</ul>
					</section>
					<p class="copyright">
						&copy; Unttled. Design: HTML5 UP.
					</p>
				</div>
				<div>
					<section>
						<h2>Me contacter</h2>
						<form method="post">
							<div class="fields">
								<div class="field half">
									<input type="text" name="name" id="name" placeholder="Name" />
								</div>
								<div class="field half">
									<input type="text" name="email" id="email" placeholder="Email" />
								</div>
								<div class="field">
									<textarea name="message" id="message" rows="4" placeholder="Message"></textarea>
								</div>
							</div>
							<ul class="actions">
								<li><input type="submit" value="Send" class="primary" /></li>
							</ul>
						</form>
						<?php
						if (isset($_POST['message'])) {
							$message = "Ce message vous a été envoyer depuis la pages du site sofiane.fr
							Nom : " . $_POST["name"] . " 
							Email : " . $_POST["email"] . "
							Message : " . $_POST["message"];

							$retour = mail(
								"sofiane1ziri@gmail.fr",
								"Ce message vous a été envoyer depuis la pages du site sofiane.fr",
								$_POST["message"],
								"From:contact@monsite.fr" . "\r\n" . "Reply-to:" . $_POST["email"]
							);

							if ($retour) {
								echo "<p>L'email a bien été envoyé.<p>";
							}
						}
						?>
					</section>
				</div>
			</div>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.poptrox.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
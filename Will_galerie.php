<?php session_start();
require('function.php');
$donnees=display(); ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" href="assets/font_awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="assets/style.css" rel="stylesheet">
	<script src="assets/bootstrap/js/jquery.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
		<header>
			<div class="row">	
				<div class="artisan col-md-2">
					<a href="http://www.cma-cahors.fr/"><img class="artisanat" src="assets/image/artisanat.png" alt="logo_artisanat"></div></a>
					<div class="artisan offset-md-8 col-md-2">
						<a href="http://www.cma-cahors.fr/"><img class="artisanat" src="assets/image/artisan_logo.jpg" alt="logo_artisanat"></a>
					</div>
					<h1 class="col-md-12" ><span class="red">Artisan</span> <span class="green">Peintre</span> <span class="blue">Figeac</span></h1>	
					<p class="description col-md-12">Peinture- Décoration -Rénovation - Isolation extérieur</p>
				</div>
			</header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-item nav-link active" href="Will_accueil.php" id="navigation">Accueil <span class="sr-only">(current)</span></a>
						<a class="nav-item nav-link active" href="Will_services.php" id="navigation">Mes services </a>
						<a class="nav-item nav-link active" href="Will_galerie.php" id="navigation">Galerie Photo</a>
						<a class="nav-item nav-link active" href="Will_form.php" id="navigation">Contact</a>
					</div>
				</div>
			</nav>

			<section class="galerie">
				<div class="containerService">
					<div class="row">
						<div class="offset-lg-3 service col-lg-6">
							<h1>Ma galerie <br />
								<span class="cliquer">(Cliquez sur les photos pour lancer le diaporama)</span></h1>
						</div>
					</div>
					<!-- Images used to open the lightbox -->
					<div class="row">
						<div class="column offset-lg-1  col-lg-2 ">
							<img src="assets/image/salle_mini.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow"></a>
							<p>Hôtel TOLOSAN</p>

						</div>
						<div class="column col-lg-2 ">
							<img src="assets/image/salle1_mini.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow"></a>
							<p>Hôtel TOLOSAN</p>
						</div>
						<div class="column col-lg-2 offset-lg-2">
							<img src="assets/image/manuloc_mini.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow"></a>
							<p>MANULOC</p>	
						</div>
						<div class="column col-lg-2 ">
							<img src="assets/image/devanture_mini.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow"></a>
							<p>Devanture</p>
						</div>
						<div class="column offset-lg-1  col-lg-2 ">
							<img src="assets/image/avant_mini.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow"></a>
							<p>Salon-Avant </p>
						</div>
						<div class="column col-lg-2 ">
							<img src="assets/image/apres_mini.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow"></a>
							<p>Salon-Aprés </p>
						</div>
						<div class="column col-lg-2 offset-lg-2">
							<img src="assets/image/chambreG_mini.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow"></a>
							<p>Chambre Garçon</p>
						</div>
						<div class="column col-lg-2 ">
							<img src="assets/image/chambreF_mini.jpg" onclick="openModal();currentSlide(8)" class="hover-shadow"></a>
							<p>Chambre Fille</p>
						</div>
						<div class=" column offset-lg-1  col-lg-2 ">
							<img src="assets/image/lancel_mini.jpg" onclick="openModal();currentSlide(9)" class="hover-shadow"></a>
							<p>Magasin LANCEL </p>				
						</div>
						<div class="column col-lg-2 ">
							<img src="assets/image/salleDeBain_mini.jpg" onclick="openModal();currentSlide(10)" class="hover-shadow"></a>
							<p>Salle de Bain </p>
						</div>
						<div class="columnn offset-lg-2 col-lg-2 ">
							<img src="assets/image/salon_avant_mini.jpg" onclick="openModal();currentSlide(11)" class="hover-shadow"></a>
							<p>Salon-Avant </p>
						</div>	
						<div class="column col-lg-2 ">
							<img src="assets/image/salon_apres_mini.jpg" onclick="openModal();currentSlide(12)" class="hover-shadow"></a>
							<p>Salon-Aprés </p>
						</div>

						<?php 
						// connection bdd
						connection();

						// insertion image
						foreach ($donnees as $key => $image):
						'<div class="columnn offset-lg-2 col-lg-2 ">
							<img src="assets/image/'.$image['nom_image'].'" onclick="openModal();currentSlide(11)" class="hover-shadow"></a>';
							endforeach; ?>

						 

						<div id="myModal" class="modal">
							<span class="close cursor" onclick="closeModal()">&times;</span>
							<div class="modal-content">

								<div class="mySlides">
									<div class="numbertext">1 / 12</div>
									<img src="assets/image/salle.jpg" style="width:100%">
									<div class="caption-container">
										<p id="caption">Hôtel tolosan</p>
									</div>
								</div>

								<div class="mySlides">
									<div class="numbertext">2 / 12</div>
									<img src="assets/image/salle1.jpg" style="width:100%">
									<div class="caption-container">
										<p id="caption">Hôtel tolosan</p>
									</div>
								</div>

								<div class="mySlides">
									<div class="numbertext">3 / 12</div>
									<img src="assets/image/manuloc.jpg" style="width:100%">
									<div class="caption-container">
										<p id="caption">Manuloc</p>
									</div>
								</div>

								<div class="mySlides">
									<div class="numbertext">4 / 12</div>
									<img src="assets/image/devanture.jpg" style="width:100%">
									<div class="caption-container">
										<p id="caption">Ravalement façade</p>
									</div>
								</div>
								<div class="mySlides">
									<div class="numbertext">5 / 12</div>
									<img src="assets/image/avant.jpg" style="width:80%, height:80%">
									<div class="caption-container">
										<p id="caption">Avant</p>
									</div>
								</div>
								<div class="mySlides">
									<div class="numbertext">6 / 12</div>
									<img src="assets/image/apres.jpg" style="width:80%, height:80%">
									<div class="caption-container">
										<p id="caption">Aprés</p>
									</div>
								</div>
								<div class="mySlides">
									<div class="numbertext">7 / 12</div>
									<img src="assets/image/chambreG.jpg" style="wwidth:80%, height:80%">
									<div class="caption-container">
										<p id="caption">Chambre garçcon</p>
									</div>
								</div>
								<div class="mySlides">
									<div class="numbertext">8 / 12</div>
									<img src="assets/image/chambreF.jpg" style="width:80%, height:80%">
									<div class="caption-container">
										<p id="caption">Chambre fille</p>
									</div>
								</div>
								<div class="mySlides">
									<div class="numbertext">9 / 12</div>
									<img src="assets/image/lancel.jpg" style="width:80%, height:80%">
									<div class="caption-container">
										<p id="caption">Magasin Lancel</p>
									</div>
								</div>
								<div class="mySlides">
									<div class="numbertext">10 / 12</div>
									<img src="assets/image/salleDeBain.jpg" style="width:80%, height:80%">
									<div class="caption-container">
										<p id="caption">Salle de bain</p>
									</div>
								</div>
								<div class="mySlides">
									<div class="numbertext">11 / 12</div>
									<img src="assets/image/salon_avant.jpg" style="width:80%, height:80%">
									<div class="caption-container">
										<p id="caption">Salon Avant travaux</p>
									</div>
								</div>
								<div class="mySlides">
									<div class="numbertext">12 / 12</div>
									<img src="assets/image/salon_apres.jpg" style="width:80%, height:80%">
									<div class="caption-container">
										<p id="caption">Salon aprés travaux</p>
									</div>
								</div>

								<!-- Next/previous controls -->
								<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
								<a class="next" onclick="plusSlides(1)">&#10095;</a>
							</div>
						</div>											
					</div>
				</section>

				<?php require('footer.php'); ?>

				<script>
							// Open the Modal
							function openModal() {
								document.getElementById('myModal').style.display = "block";
							}

							// Close the Modal
							function closeModal() {
								document.getElementById('myModal').style.display = "none";
							}

							var slideIndex = 1;
							showSlides(slideIndex);

							// Next/previous controls
							function plusSlides(n) {
								showSlides(slideIndex += n);
							}

							// Thumbnail image controls
							function currentSlide(n) {
								showSlides(slideIndex = n);
							}

							function showSlides(n) {
								var i;
								var slides = document.getElementsByClassName("mySlides");
								var dots = document.getElementsByClassName("demo");
								var captionText = document.getElementById("caption");
								if (n > slides.length) {slideIndex = 1}
									if (n < 1) {slideIndex = slides.length}
										for (i = 0; i < slides.length; i++) {
											slides[i].style.display = "none";
										}
										for (i = 0; i < dots.length; i++) {
											dots[i].className = dots[i].className.replace(" active", "");
										}
										slides[slideIndex-1].style.display = "block";
										dots[slideIndex-1].className += " active";
										captionText.innerHTML = dots[slideIndex-1].alt;
									}
				</script>




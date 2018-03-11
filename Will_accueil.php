<?php
require('header.php');
?>

			<section class="row">
				<div class="caroussel col-md-12">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="assets/image/salle.jpg" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<h5>Hôtel TOLOSAN</h5>
									<p>Avant-travaux</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="assets/image/salle1.jpg" alt="Second slide">
								<div class="carousel-caption d-none d-md-block">
									<h5>Hôtel TOLOSAN</h5>
									<p>En chantier</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="assets/image/devanture.jpg" alt="Second slide">
								<div class="carousel-caption d-none d-md-block">
									<h5>Ravalement</h5>
									<p>En chantier</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="assets/image/manuloc.jpg" alt="Third slide">
								<div class="carousel-caption d-none d-md-block">
									<h5>Devanture MANULOC</h5>
									<p>Ravalement-Pose enseigne</p>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</section>
				
<?php 
require('footer.php');
 ?>

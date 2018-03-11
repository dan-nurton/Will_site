<?php
require('formulaire.php');
?>
<?php 
require('header.php');
 ?>

<section class="formulaire">
	<div class="containerService">
		<div class="row">
			<div class="offset-lg-3 col-lg-6 offset-sm-3 col-sm-6 col-centered">
				<div class="panel panel-default">
					<div class="panel-heading" >
						<h1 class ="contact">Me contacter</h1>
					</div>
						<?php
							if($success==true) : ?>
								<p class="success">Message envoyé</p>
						<?php
							elseif ($erreurTel==true) : ?>
								<p class="fail">Echec envoi: Numéro de Telephone non valide!</p>
						<?php
							elseif ($erreurMail==true) : ?>
								<p class="fail">Echec envoi: Adresse mail non valide!</p> 
						<?php
							endif;
						?>
					<form action="Will_form.php" method="POST">
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user blue"></i></span>
									<input type="text" name="nom" placeholder="Nom" class="form-control" autofocus="autofocus" required>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope blue"></i></span>
									<input type="text" name="prenom" placeholder="Prénom" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope blue"></i></span>
									<input type="email" name="email" placeholder="Email" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-phone blue"></i></span>
									<input type="tel" name="tel" placeholder="Tél" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-comment blue"></i></span>
									<textarea name="message" placeholder="Votre message"rows="6" class="form-control" type="text" required></textarea>
								</div>
							</div>
							<div class="">
								<button type="submit" name="envoyer" class="btn btn-info pull-right">Envoyer<span class="glyphicon glyphicon-send"></span></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
require('footer.php');
 ?>

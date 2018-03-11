<?php

session_start();
require('header.php');
?>
<body>
	<section class="formulaire">
	<div class="containerService">
		<div class="row">
			<div class="offset-lg-3 col-lg-6 offset-sm-3 col-sm-6 col-centered">
				<form action="admin_form.php" method="post"> 
					<p> Votre nom : <input type="text"  name="nom"></p>
					<p> Votre prénom : <input type="text" name="prenom"></p>
					<p> Mot de passe : <input type="password" name="password"></p>
					<button type="submit"  name="envoyer">Envoyer </button>
				</form>
			</div>
		</div>
	</div>
	</section>
</body>
</html>



<?php

// cas erreur post vide
if(!isset($_POST['prenom']) || !isset($_POST['nom']) || !isset($_POST['password']) ) :
	?> <p>Veuillez remplir les information demandés</p> <?php 

	elseif(empty($_POST['prenom']) || empty($_POST['nom']) || empty($_POST['password']) ) :
	?> <p>Remplir toutes les informations</p>
	<?php endif; ?>

<?php
// cas erreur mauvaise personne
if(isset($_POST['prenom']) and isset($_POST['nom']) and isset($_POST['password'])) {
	if($_POST['prenom']!= 'WILL' && $_POST['nom']!='NGOMBO' || $_POST['password']!='1234'){
		echo "Mauvais utilisateur";
		}
// sinon on remplit la session et on entre dans la base de donnée
	else{

		$_SESSION['prenom']= $_POST['prenom'];
		$_SESSION['nom'] = $_POST['nom'];
		$_SESSION['password']=$_POST['password'];
		header('Location: admin.php');
		
	}
}

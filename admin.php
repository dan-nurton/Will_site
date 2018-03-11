<?php
session_start();
require('function.php');

// si non loggé
if($_SESSION['prenom']!= 'WILL' && $_SESSION['nom']!='NGOMBO' || $_SESSION['password']!='1234'){
	header('Location: admin_form.php');
	exit();
	
}
// si image téléchargée
	if(isset($_FILES['monFichier'])){
		if($_FILES['monFichier']['error']==UPLOAD_ERR_OK){
		     $dossier = 'assets/image_upload/';
		     $fichier = basename($_FILES['monFichier']['name']);
		     if(move_uploaded_file($_FILES['monFichier']['tmp_name'], $dossier . $fichier)) 
		     {
		          $photo='assets/image_upload/';
		          $_SESSION['photo']= $_FILES['monFichier']['name'];
		     }
		}
	    else
	    {
	          echo 'Echec upload !';
	    }
	}

// connection bdd
connection();

// si photo téléchargé, insertion base de donnée
if(isset($_SESSION['photo'])){
	$req = connection()->prepare('INSERT INTO image(nom_image,id_admin) VALUES(:nom,:admin)');
	$req->execute(array(
		'nom'=>$_SESSION['photo'],
		'admin'=>'1',
	));

}

require('header.php');
?>

<section>
	<h1>Bienvenue <?php echo $_SESSION['prenom'] ?></h1>
	<p>Uploadez les fichiers necessaires</p>
	<form action="admin.php" method="post" enctype="multipart/form-data">
			<p>
				<strong>Formulaire d'envoi de fichier</strong> <br />
				<label for="file">Icône du fichier (JPG, PNG ou GIF max. 4Mo) :</label><br />
				<input type="file" name="monFichier"> <br />
				<input type="hidden" name="MAX_FILE_SIZE" value="4000000" /> <br />
				<input type="submit" name="envoyer" value="Envoyer fichier">
			</p>		
		</form>
</section>

<?php
require('footer.php');
?>


hello
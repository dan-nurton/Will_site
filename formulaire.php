<?php
$success=false;
$erreurTel=false;
$erreurMail=false;

// vérification
// Si des données sont postées

if (isset($_POST['envoyer'])){

	$erreur=0;

// Verif email

	if(!isset($_POST['email'])){
		$erreur++;
	}
	if(empty($_POST['email'])){
		$erreur++;
	}
	else{
		if(!preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#',$_POST['email'])){
			$erreur++;
			$erreurMail=true;
		}
	}

// verif nom

	if(!isset($_POST['nom'])){
		$erreur++;
	}
	else{
		if(empty($_POST['nom'])){
			$erreur++;
		}
	}

// verif prenom

	if(!isset($_POST['prenom'])){
		$erreur++;
	}
	else{
		if(empty($_POST['prenom'])){
			$erreur++;
		}
	}

// verif tel

	if(!isset($_POST['tel'])){
		$erreur++;
	}
	if(empty($_POST['tel'])){
		$erreur++;
	}
	else{
		if(!preg_match('#^0[1-678]([-. ]?[0-9]{2}){4}$#',$_POST['tel'])){
			$erreur++;
			$erreurTel= true;
		}
	}

// Verif message

	if(!isset($_POST['message'])){
		$erreur++;
	}
	else{
		if(empty($_POST['message'])){
			$erreur++;
		}
	}

	if($erreur==0){
		//Recuperation des variables
		$nom= $_POST['nom'];
		$prenom=$_POST['prenom'];
		$mail=$_POST['email'];
		$tel=$_POST['tel'];
		$message=$_POST['message'];


		// Variables concernant l'email
		$destinataire = 'da.peyrat@gmail.com'; // 
		$sujet = 'E-mail de votre Site Web'; // Titre de l'email
		$contenu = 'Demande Information ';
		$contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
		$contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
		$contenu .= '<p><strong>Prénom</strong>: '.$prenom.'</p>';
		$contenu .= '<p><strong>Email</strong>: '.$mail.'</p>';
		$contenu .= '<p><strong>Tel</strong>: '.$tel.'</p>';
		$contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
		$contenu .= '</body></html>';


		// Pour envoyer un email HTML, l'en-tête Content-type doit être défini
		$headers = 'MIME-Version: 1.0'."\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";

		// Envoyer l'email
		$envoi=mail($destinataire, $sujet, $contenu, $headers);
		$success=true; // Fonction principale qui envoi l'email
	}

}



?>
<?php 


// Fonction connection
function connection(){
	try{
		$bdd =new PDO('mysql:host=localhost;dbname=site_will;charset=utf8','root','',
			[PDO:: ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION]);
	}

	catch (PDOException $e){
		die('Erreur :' .$e->getMessage());
	}
	return $bdd;
}





// fonction afficher image
function display(){
	try{
		$req = connection()->prepare('SELECT * FROM image');
		$req->execute();

		while($donnees=$req->fetchAll()){
		return $donnees;
		}
	}
	catch (PDOException $e){
		die('Erreur :' .$e->getMessage());
	}
}
 ?>
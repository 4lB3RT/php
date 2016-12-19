<?php
include_once "conexio.php";


if(!empty($_POST)){
	
	ini_set('display_errors', 1);
	$email_usuari = trim($_POST["email"]);
	$nom_usuari = trim($_POST["nom"]);
	$Contrasenya = trim($_POST["Contrasenya"]);
	$cognom = trim($_POST["cognom"]);

	if(isset($_POST["nom"]) && isset($_POST["Contrasenya"]) && isset($_POST["cognom"])){

		
		$sql = "INSERT INTO Usuaris(email,Nom, Cognoms, Contrasenya)
				VALUES('$email_usuari','$nom_usuari', '$cognom', '$Contrasenya')";

		$resultat = mysqli_query($conect,$sql);


		if($resultat == true){
			header("Location:/php.dev/public_html/prova_sessio/");
		}

	}
}
?>
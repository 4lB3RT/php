<?php
session_start();
include_once "conexio.php";

	if(isset($_COOKIE['nom'])){

			echo'<h1>'.$_COOKIE['nom'].'</h1>';
		}else{

			echo'<h1>usuari...</h1>'
		}
if(!empty($_POST)){
ini_set('display_errors', 1);
	$titol = trim($_POST["Titol"]);
	$descripcio = trim($_POST["descripcio"]);
	
	
	/*if(isset($_POST["Titol"]) && isset($_POST["descripcio"])){

		$sql="INSERT INTO Todo(Usuari,Nom,Title,Todo)
			  VALUES('$registre['id']','$_COOKIE['nom']','$titol','$descripcio')";

		$resultat = mysqli_query($conect,$sql);


		if($resultat == true){
			header("Location:/php.dev/public_html/prova_sessio/");
		}

	}
*/

}


?>

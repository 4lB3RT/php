<?php
include_once "conexio.php";
ini_set('display_errors', 1);
$email = $_POST["email"];
$contrasenya = $_POST["pass"];

$sql = "SELECT * FROM Usuaris WHERE email = '$email' AND Contrasenya = '$contrasenya'";


$resultat = mysqli_query($conect, $sql);
$afectat = mysqli_num_rows($resultat);


if( $afectat ==1){
	
	
		$registre = mysqli_fetch_array($resultat);
		
		$_SESSION["usuario"] = $registre["id"];

		setcookie("nom",$registre["Nom"],time()+1800,"/prova_sessio/php/login.php","",0);
		
		header("Location:/php.dev/public_html/prova_sessio/TODO.html");	
		exit;
		
}else{
	header("Location:/php.dev/public_html/prova_sessio/login.html");
}


?>


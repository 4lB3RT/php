<?php
include_once "conexio.php";
ini_set('display_errors', 1);
$email = $_POST["email"];
$contrasenya = $_POST["pass"];

$sql = "SELECT id FROM Usuaris WHERE email = '$email' AND Contrasenya = '$contrasenya'";


$resultat = mysqli_query($conect, $sql);
$afectat = mysqli_num_rows($resultat);


if( $afectat ==1){
	
	
		$registre = mysqli_fetch_array($resultat);
		
		$_SESSION["usuario"] = $registre["id"];
		echo$_SESSION["usuario"] ;
		setcookie("nom","albert",time()+1800,"/prova_sessio/php/login.php","",0);
		
		header("Location:index.html?status=yes");	
		exit;
		
}else{
	header("Location:/php.dev/public_html/prova_sessio/login.html");
}


?>


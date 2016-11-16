<?php
include_once "conexio.php";

$email = $_POST["email"];
$contrasenya = $_POST["pass"];

$sql = "SELECT id FROM Usuaris WHERE email = '$email' AND Contrasenya = '$contrasenya'";

$resultat = mysqli_query($conect, $sql);
$afectat = mysqli_num_rows($resultat);


if($resultat == true && $afectat ==1){

		$registre = mysqli_fetch_array($resultat);
		
		$_SESSION["usuario"] = $registre["id"]);
		
		//setcookie("nom",$registre["Nom"],time()+1800,"/prova_sessio/php/login_user.php","",0);

		header("Location:index.html?status=yes");
		

}else{
	header("Location:/php.dev/public_html/prova_sessio/login.html");
}

mysqli_close($conect);

?>

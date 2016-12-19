<?php

session_destroy();

header("Location:/php.dev/public_html/prova_sessio");

		setcookie("nom",$registre["Nom"],time()-1800,"/prova_sessio/php/login.php","",0);
		unset($_COOKIE['nom']);
?>
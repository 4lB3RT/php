<?php

		define('DBHOST','localhost');
		define('DBUSER','root');
		define('DBPASS','linuxlinux');
		define('DBNAME','sessio_db');


		$conect= mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

		if(!$conect){
			die("No funciona la conexio". mysql_error());
		}

?>
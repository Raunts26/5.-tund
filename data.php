<?php
    require_once("functions.php");
	
	//Kui kasutaja ei ole sisse logitud, suuna teisele lehele
	//Kontrollin kas sessiooni muutuja on olemas
	
	if(!isset($_SESSION['logged_in_user_id'])) {
		header("Location: login.php");
	}

	//aadressireale tekkis ?logout=1
	if(isset($_GET["logout"])) {
		//kustutame sessiooni muutujad
		session_destroy();
		header("Location: login.php");
	}


?>

Tere, <?=$_SESSION['logged_in_user_email']?>
<a href="?logout=1">Logi välja</a>
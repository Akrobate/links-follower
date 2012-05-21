<?php
	
	// Script de connection //

	$login = request::get("login");
	$password = request::get("password");
	
	if (($login != "") && ($password != "")) {
		if (users::connect($login, $password)) {
			header("Location: index.php?controller=sites&action=index");
		} else {
			$error_msg = "Connection impossible, erreur de mot de passe ou de login";
		}
	}
	

?>
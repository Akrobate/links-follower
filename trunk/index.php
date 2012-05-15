<?php

	// Define des chemins du projet
	define ("PATH_CURRENT", "./" );
	define ("PATH_CONFIGS", PATH_CURRENT. "configs/");
	define ("PATH_LIBS", PATH_CURRENT . "libs/" );
	define ("PATH_TEMPLATES", PATH_CURRENT."templates/");
	
	
	// inclusion des configs
	require_once(PATH_CONFIGS."db.php");
	
	require_once(PATH_LIBS."request.class.php");
	
	$controller = request::get("controller");
	$action = request::get("action");
	
	
	// test de l'existance du ficheir script
	// test de lesixtance du fichier template
	
	// redirection vers template 404 // error si not found
	
	// include du bon script
	
	
	// ob_start
	
	// include du bon template
	
	// obflush
	
	
	// layout display
	
	
	


?>

<?php
	session_start();
	error_reporting(15);
	// Define des chemins du projet
	define ("PATH_CURRENT", "./" );
	define ("PATH_CONFIGS", PATH_CURRENT. "configs/");
	define ("PATH_LIBS", PATH_CURRENT . "libs/" );
	define ("PATH_SCRIPTS", PATH_CURRENT . "scripts/" );
	define ("PATH_TEMPLATES", PATH_CURRENT."templates/");
	
	// inclusion des configs
	require_once(PATH_CONFIGS."db.php");
	require_once(PATH_CONFIGS."user.php");
	
	// inclusion des libs
	require_once(PATH_LIBS."request.class.php");
	require_once(PATH_LIBS."sql.class.php");
	require_once(PATH_LIBS."users.class.php");
	require_once(PATH_LIBS."checker.class.php");
	require_once(PATH_LIBS."flux.class.php");	
	
	$controller = request::get("controller");
	$action = request::get("action");
	
	if ($controller == "") {
		$controller = "sites";
	}
	
	if($action == "") {
		$action = "index";
	}
	
	

	
	if (users::isConnected()) {
		if ((file_exists(PATH_SCRIPTS . $controller . "/" . $action . ".php")) && ((PATH_TEMPLATES . $controller . "/" . $action . ".php"))) {
			require_once (PATH_SCRIPTS . $controller . "/" . $action . ".php");
			ob_start();
				require_once (PATH_TEMPLATES . $controller . "/" . $action . ".php");
			//$template_content = ob_get_contents();
			$template_content = ob_get_flush();
			ob_end_clean();
			
			require_once( PATH_TEMPLATES . "layouts/main.php");	
		} else {
			echo("ERROR::Template or script missing");
		}
		// redirection vers template 404 // error si not found
	} else {
		$controller = "users";
		$action = "login";
		require_once (PATH_SCRIPTS . $controller . "/" . $action . ".php");
		ob_start();
			require_once (PATH_TEMPLATES . $controller . "/" . $action . ".php");
		$template_content = ob_get_contents();
		ob_end_clean();
		require_once( PATH_TEMPLATES . "layouts/connect.php");	
	}
?>



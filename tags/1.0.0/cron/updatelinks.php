<?php

	// Define des chemins du projet

	define ("PATH_CURRENT", "/var/www/links-follower/" );
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
	
	
	
	sql::query("SELECT * FROM links WHERE 1");
	$links = sql::fetchArray();
	
	foreach($links as $link) {
		echo($link['id']);
		if (checker::checkDiffs($link['id'])) {
			echo(' - modif');
			flux::newFlux($link['id']);
		} else {
			echo(' - pas de modif');
		}
		echo("\n");
	}










	
	
	
	
	
	
?>

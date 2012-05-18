<?php
	// Script add pages
	$url = request::get("url");

	if ($url != "") {
		
		// Obtenir le title de la page		
		$urlContents = file_get_contents($url);
		preg_match("/<title>(.*)<\/title>/i", $urlContents, $matches);
		$title = $matches[1];

		sql::query('INSERT INTO sites (url, title) VALUES ("'.$url.'","'.$title.'")');
		
		header("Location: index.php?controller=sites&action=index");
	
	} else {
		$error_msg = "Vous n'avez pas renseigne le champ url";
		
	}

?>

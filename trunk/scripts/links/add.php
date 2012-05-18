<?php
	// Script links/add

	$url = request::get("url");
	$id_site = request::get("id_site");
	$id_page = request::get("id_page");

	if ($url != "") {

		// Obtenir le title de la page		
		$urlContents = file_get_contents($url);
		preg_match("/<title>(.*)<\/title>/i", $urlContents, $matches);
		$title = $matches[1];


		sql::query('INSERT INTO links (url, title, id_page) VALUES ("'.$url.'","'.$title.'","'.$id_page.'")');
		
		header("Location: index.php?controller=links&action=index&id_site=".$id_site."&id_page=".$id_page);
	
	} else {
		$error_msg = "Vous n'avez pas renseigne le champ url";
		
	}

?>

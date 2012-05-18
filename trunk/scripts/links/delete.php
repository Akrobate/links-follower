<?php

	// script links/delete

	$id = request::get("id");
	$id_site = request::get("id_site");
	$id_page = request::get("id_page");
	
	sql::query("DELETE FROM links WHERE id=".$id);
	sql::query("DELETE FROM flux WHERE id_link=".$id);
	
	
	
	if ($id_page == "") {
		header("Location: index.php?controller=pages&action=index&id_site=".$id_site);
	} else {
		header("Location: index.php?controller=links&action=index&id_site=".$id_site."&id_page=".$id_page);
	}
	



?>

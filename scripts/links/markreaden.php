<?php

	$id_site = request::get('id_site');
	$id_page = request::get('id_page');
	
	$id = request::get('id');
	
	
	flux::markReaden($id);

	if ($id_page == "") {
		header("Location: index.php?controller=pages&action=index&id_site=".$id_site);
	} else {
		header("Location: index.php?controller=links&action=index&id_site=".$id_site."&id_page=".$id_page);
	}
	





?>

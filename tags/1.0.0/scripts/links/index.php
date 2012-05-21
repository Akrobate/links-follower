<?php
	// script links/index
	
	// TODO: Security check!
	// TODO: Pagination script sites index
	
	$id_site = request::get('id_site');
	$id_page = request::get('id_page');
	
	
	$data = array();
	
	if ($id_page != "") {
		sql::query("SELECT * FROM links WHERE id_page={$id_page} ORDER BY title ASC");
		$data = sql::fetchArray();
	}
	
	
?>

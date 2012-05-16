<?php
	// Script Sites/index
	
	// TODO: Security check!
	// TODO: Pagination script sites index
	
	$id = request::get('id');
	
	$data = array();
	
	if ($id != "") {
		sql::query("SELECT * FROM pages WHERE id_site={$id} ORDER BY title ASC");
		$data = sql::fetchArray();
	}
	
	
?>

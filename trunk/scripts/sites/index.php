<?php
	// Script Sites/index
	
	// TODO: Security check!
	// TODO: Pagination script sites index
	
	sql::query("SELECT * FROM sites WHERE 1 ORDER BY title ASC");
	$data = sql::fetchArray();
	
	
	
?>

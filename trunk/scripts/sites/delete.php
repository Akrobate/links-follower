<?php

	$id = request::get("id");
	
	


	sql::query("DELETE FROM sites WHERE id=".$id);
	header("Location: index.php?controller=sites&action=index");
	



?>

<?php

class checker {

	/* renvoi true si changement trouvé, sinon false */

	public static function levenhm($str1, $str2) {
		$result = 0;
	
		while (strlen($str1) > 254) {
		
		
		}
		
		return $result;
	}


	public static function checkDiffs($id_link) {
	
		$result = null;
	
		sql::query("SELECT * FROM links WHERE id=".$id_link);
		$data = sql::fetchArray();
		$url = $data[0]['url'];
		$str_source = stripslashes($data[0] ['source']);
		
		

		
		$str_url = file_get_contents($url);
		$str_url = strip_tags($str_url);


//		echo($str_url);

		//$score = levenshtein($str_url, $str_source);
		$score = abs(strlen($str_url) - strlen($str_source));
		
		
		if ($score > 10) {
			// Changement repere
			$result = true;
			sql::query('UPDATE links SET source="'.addslashes($str_url).'", checked_date=NOW() WHERE id='.$id_link);
			
		} else {
			// Pas de changement
			$result = false;
			if ($score > 0) {
				sql::query('UPDATE links SET source="'.addslashes($str_url).'", checked_date=NOW() WHERE id='.$id_link);			
			}		
			
			sql::query('UPDATE links SET checked_date=NOW() WHERE id='.$id_link);			
		}
			
		return $result;		
		
	
	
	}







}







?>

<?php

class request {

	public static function get($str) {
		if (isset($_GET[$str])) {
			return $_GET[$str];
		} else {
			return null;
		}
	}

}

?>

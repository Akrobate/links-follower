<?php

class flux {

	public static function newFlux($id_link, $information='CHANGE') {
		if ($information == 'CHANGE') {
			sql::query("INSERT INTO flux (id_link, created_date, status, information) VALUES (".$id_link.", NOW(), 'NEW', 'CHANGE') ");
		}
	}


	public static function markReaden($id_link) {
		sql::query("UPDATE flux SET readen_date = NOW(), status = 'ARCHIVE' WHERE id_link=".$id_link." AND status='NEW' ");
	}


	public static function linkCheckNew($id_link) {
		sql::query("SELECT * FROM flux WHERE id_link = ".$id_link." AND status='NEW' ");
		$result = sql::fetchArray();
		if (count($result) == 0) {
			return false;
		} else {
			return true;
		}
	}

	public static function pageCheckNew($id_page) {
		sql::query("SELECT * FROM links LEFT JOIN flux ON links.id = flux.id_link  WHERE links.id_page = ".$id_page." AND flux.status='NEW' ");
		$result = sql::fetchArray();
		if (count($result) == 0) {
			return false;
		} else {
			return true;
		}
	}

	public static function siteCheckNew($id_site) {
		sql::query("SELECT * FROM pages LEFT JOIN links ON pages.id = links.id_page LEFT JOIN flux ON links.id=flux.id_link  WHERE pages.id_site = ".$id_site." AND flux.status='NEW' ");
		$result = sql::fetchArray();
		if (count($result) == 0) {
			return false;
		} else {
			return true;
		}
	}


}

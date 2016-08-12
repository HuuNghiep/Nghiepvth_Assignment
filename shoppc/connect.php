<?php
	$HOST = "nghiepvthps02961.esy.es";
	$USER = "u697851858_hn";
	$PASS = "N18071996";
	$DB = "database_nghiepvth";
	$ERROR1 = "Loi mysql";
	$ERROR2 = "Loi DB";
@mysql_connect($HOST, $USER, $PASS) or die($ERROR1);
@mysql_select_db($DB) or die($ERROR2);
mysql_query("SET NAMES 'utf8'");

?>
<?php
function config() {
	$db_host="localhost";
	$db_name="cl40-wp_asign1";
	$username="cl40-wp_asign1";
	$password="ianbarnes";
	$db_con=mysql_connect($db_host, $username, $password);
	$connection_string=mysql_select_db($db_name);
	mysql_connect($db_host, $username, $password);
	mysql_select_db($db_name)or die("cannot select db");
}
?>
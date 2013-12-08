<?php
function config() {
	$db_host="localhost";
	$db_name="cl40-wp-assign1";
	$username="root";
	$password="russell";
	$db_con=mysql_connect($db_host, $username, $password);
	$connection_string=mysql_select_db($db_name);
	mysql_connect($db_host, $username, $password);
	mysql_select_db($db_name);
}
?>
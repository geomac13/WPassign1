<?php
function get_data(){
	include('config.php');	
	config();
	
	$get_data = mysql_query("SELECT * FROM Sites");
	$get_data_array = array();
	
	$i = 0;
	
	while($row_get_data = mysql_fetch_array($get_data)) 
	{
		$get_data_array['feed_id'][$i] = $row_get_data['feed_id'];
		$get_data_array['feed_name'][$i] = $row_get_data['feed_name'];
		$get_data_array['feed_review'][$i] = $row_get_data['feed_review'];
		$i++;
	}
	//echo count($get_data_array['class_id']);
	echo json_encode($get_data_array);
}

get_data();
?>
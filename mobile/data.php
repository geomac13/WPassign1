<?php
function get_data(){
	include('config.php');	
	config();
	
	$get_data = mysql_query("SELECT * FROM Sites");
	$get_data_array = array();
	
	$i = 0;
	
	while($row_get_data = mysql_fetch_array($get_data)) 
	{
		$get_data_array['college'][$i] = $row_get_data['college'];
		$get_data_array['add1'][$i] = $row_get_data['add1'];
		$get_data_array['town'][$i] = $row_get_data['town'];
		$get_data_array['county'][$i] = $row_get_data['county'];
		$get_data_array['postcode'][$i] = $row_get_data['postcode'];
		$i++;
	}
	//echo count($get_data_array['class_id']);
	echo json_encode($get_data_array);
}

get_data();
?>
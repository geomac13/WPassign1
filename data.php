<?php
function get_data(){
	include('config.php');	
	config();
	
	$get_data = mysql_query("SELECT * FROM Lectures");
	$get_data_array = array();
	
	$i = 0;
	
	while($row_get_data = mysql_fetch_array($get_data,MYSQL_ASSOC)) 
	{
		$get_data_array['Talk_ID'][$i] = $row_get_data['Talk_ID'];
		$get_data_array['Location'][$i] = $row_get_data['Location'];
		$get_data_array['Time'][$i] = $row_get_data['Time'];
		$get_data_array['Title'][$i] = $row_get_data['Title'];
		$get_data_array['Presenter'][$i] = $row_get_data['Presenter'];
		$get_data_array['Description'][$i] = $row_get_data['Description'];
		$i++;
	}
	
	$test=$get_data_array;
	echo json_encode($test);
	
}

get_data();
?>
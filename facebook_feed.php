<?php
	
function fetchUrl($url) {
	

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 20);
	
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	
	if(curl_errno($ch)){
		//echo 'Curl error: ' . curl_error($ch);
	}
	
	$feedData = curl_exec($ch);
	curl_close($ch);
	
	return $feedData;
}	


$profile_id = "184668248223207"; //This is the id for uhi

//App info, needed for Auth
$app_id = "212687712242088";   //You get these from your facebook app
$app_secret = "e8d80f7420d82e6df4b361d2e61c9743";

//Retreive auth token
$authToken = fetchUrl("https://graph.facebook.com/oauth/access_token?type=client_cred&client_id={$app_id}&client_secret={$app_secret}");

$json_object = fetchUrl("https://graph.facebook.com/{$profile_id}/feed?limit=5&{$authToken}");

echo $json_object;
	
?>

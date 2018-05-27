<?php

try{
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
	$geo = array();
	$geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?latlng='.$latitude.','.$longitude.'&sensor=false');
	$output = json_decode($geocode);

	foreach ($output->results as $key => $value){
	    if (isset($value->formatted_address)) {
	      $address = $value->formatted_address;
	      break;
	    }
	}
	echo $address;
} catch (\Exception $err ){
    echo $err->getMessage();
    die();
}
$success = array (
    "success" => true,
    "address" => $address
);
return json_encode($success);
?>
<?php 

namespace App\Controller;

require_once '../Model/PlaceDB.php';

$return_data = [];

$placedb = new \App\Model\PlaceDB();
/*
$return_data["Description"] = $placedb->getDescriptionPlace();

$return_data["Latitude"] = $placedb->getLatitude();
$return_data["Longitude"] = $placedb->getLongitude();

$return_data["id_icon"] = $placedb->getId_Icon();

$return_data["image_icon"] = $placedb->getImage_Icon();
*/
$return_data["Locations"] = $placedb->getPlaceData();

$return_data["image_icon"] = $placedb->getImage_Icon();

echo json_encode($return_data);
?>
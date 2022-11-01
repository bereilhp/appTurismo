<?php 

namespace App\Controller;

require_once '../Model/PlaceDB.php';

$placedb = new \App\Model\PlaceDB();
$result = $placedb->getDescriptionPlace();

echo json_encode($result);
?>
<?php

include '../../class/include.php';

$LOCATION = new Location(NULL);

$LOCATION->full_name = $_POST['full_name'];
$LOCATION->nic = $_POST['nic'];
$LOCATION->age = $_POST['age'];
$LOCATION->date_of_birth = $_POST['date_of_birth'];
$LOCATION->city = $_POST['city'];
$LOCATION->address = $_POST['address'];
$LOCATION->description = $_POST['description'];
$LOCATION->contact_number = $_POST['contact_number'];
$LOCATION->gender = $_POST['gender'];
$LOCATION->contact_number = $_POST['contact_number'];
$LOCATION->email = $_POST['email'];

//$LOCATION->longitude = $_POST['longitude'];
//$LOCATION->latitude = $_POST['latitude'];

$res = $LOCATION->create();

if ($res) {
    $response['status'] = 'success';
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'error';
    echo json_encode($response);
    exit();
}

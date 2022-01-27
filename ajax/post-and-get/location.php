<?php

include '../../class/include.php';

$CENTER = new Center(NULL);

$CENTER->full_name = $_POST['full_name'];
$CENTER->nic = $_POST['nic'];
$CENTER->age = $_POST['age'];
$CENTER->date_of_birth = $_POST['date_of_birth'];
$CENTER->city = $_POST['city'];
$CENTER->address = $_POST['address'];
$CENTER->description = $_POST['description'];
$CENTER->contact_number = $_POST['contact_number'];
$CENTER->gender = $_POST['gender'];
$CENTER->email = $_POST['email'];
 

$CENTER->longitude = $_POST['longitude'];
$CENTER->latitude = $_POST['latitude'];

$res = $CENTER->create();

if ($res) {
    $response['status'] = 'success';
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'error';
    echo json_encode($response);
    exit();
}

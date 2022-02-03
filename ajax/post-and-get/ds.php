<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

header('Content-type: application/json');

if ($_POST['action'] == 'GETDSBYDISTRICT') {

    $DS = new Ds(NULL);
    $result = $DS->GetDsByDistrict($_POST["district"]);
    echo json_encode($result);
    exit();
}

<?php
include_once(dirname(__FILE__) . '/class/include.php');

$CENTRES = new Center(NULL);
echo json_encode($CENTRES->all());


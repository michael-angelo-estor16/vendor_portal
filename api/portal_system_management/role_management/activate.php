<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Allow-Control-Allow-Methods: POST');
header('Allow-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');



require_once ($_SERVER['DOCUMENT_ROOT'].'/core/init.php');

$userRole = new UserRoleManagement($db);

//get raw posted data
$data = json_decode(file_get_contents("php://input"));

echo $userRole->findRoleCode($data->code)->activateRole() ? json_encode(['message'=>'Role Activated']) : json_encode(['error'=>'Something went wrong.']);



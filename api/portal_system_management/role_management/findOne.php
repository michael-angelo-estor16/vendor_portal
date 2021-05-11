<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Allow-Control-Allow-Methods: GET');
header('Allow-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');



require_once ($_SERVER['DOCUMENT_ROOT'].'/core/init.php');

$userRole = new UserRoleManagement($db);

//get raw posted data
$data = json_decode(file_get_contents("php://input"));

if($userRole->findRoleCode($data->code)){
    $role_array = [
        'id' => $userRole->role_id,
        'role_code'=>$userRole->role_code,
        'role_name'=>$userRole->role_name,
        'status' => $userRole->role_status
    ];

    echo json_encode(['data'=> $role_array]);
}else{
    echo json_encode(['message'=>'Role not found.']);
}
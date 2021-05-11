<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Allow-Control-Allow-Methods: GET');
header('Allow-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');



require_once ($_SERVER['DOCUMENT_ROOT'].'/core/init.php');

$userRole = new UserRoleManagement($db);

$stmt = $userRole->findAll();

$data = [];
if($stmt->rowCount() > 0){
    while ($RoleResult = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($RoleResult);
        $role_data = [
            'id' => $id,
            'role_code'=> $role_code,
            'role_name'=> $role_name,
            'status'=> $status
        ];
        array_push($data , $role_data);
    }
    echo json_encode(['data'=> $data]);
}else{
    echo json_encode(['message'=>'No roles found']);
}

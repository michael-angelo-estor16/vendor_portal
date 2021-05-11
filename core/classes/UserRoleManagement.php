<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/core/init.php');


class UserRoleManagement{

    private $conn;
    private $table = 'tbl_roles';

    public $role_id;
    public $role_code;
    public $role_name;
    public $role_status;

    //Connect to the db upon instantiated
    public function __construct($db){
        $this->conn = $db;
    }
    //Save Role
    public function saveRole(){

        //Create query
        $query = 'INSERT INTO '.$this->table.' SET role_code = :code , role_name = :name , status = :status';
        $stmt = $this->conn->prepare($query);

        $this->role_name = htmlspecialchars(strip_tags($this->role_name));
        $this->role_code = htmlspecialchars(strip_tags($this->role_code));
        $status = 1;
        //Bind values
        $stmt->bindParam(':code',$this->role_code);
        $stmt->bindParam(':name',$this->role_name);
        $stmt->bindParam(':status', $status);
        //Execute query
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }
    //Role validation by ID
    public function isValidRoleId($role_id){
        //Create query
        $query = "SELECT id,role_code,role_name,status FROM $this->table WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        //Bind values
        $stmt->bindParam('id', $role_id);
        //Execute Query
        $stmt->execute();

        if($stmt->rowCount() != 0 ){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->role_id = $row['id'];
            $this->role_code = $row['role_code'];
            $this->role_name = $row['role_name'];
            $this->role_status = $row['status'];
            return true;
        }else{
            return false;
        }

    }
    //Role validation by Code
    public function isValidRoleCode($role_code){
        //Create query
        $query = "SELECT id,role_code,role_name,status FROM $this->table WHERE role_code = :code LIMIT 1";
        $stmt = $this->conn->prepare($query);
        //Bind values
        $stmt->bindParam(':code', $role_code);
        //Execute Query
        $stmt->execute();

        if($stmt->rowCount() != 0 ){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->role_id = $row['id'];
            $this->role_code = $row['role_code'];
            $this->role_name = $row['role_name'];
            $this->role_status = $row['status'];
            return true;
        }else{
            return false;
        }

    }
    //Activate Role
    public function activateRole(){
        $query = "UPDATE $this->table SET status = :status WHERE role_code = :code";
        $stmt = $this->conn->prepare($query);
        $status = 1;
        //Bind values
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':code', $this->role_code);
        //Execute Query
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }
    //Deactivate Role
    public function deactivateRole(){

        $query = "UPDATE $this->table SET status = :status WHERE role_code = :code";
        $stmt = $this->conn->prepare($query);
        $status = 0;
        //Bind values
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':code', $this->role_code);
        //Execute Query
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }
    //Find by Code
     public function findRoleCode($code){
        if($this->isValidRoleCode($code)){
            return $this;
        }
    }
    //Find all Role
    public function findAll(){
        //Create query
        $query = "SELECT id,role_code,role_name,status FROM $this->table";
        $stmt = $this->conn->prepare($query);
        //Execute Query
        $stmt->execute();
        if($stmt->rowCount() != 0 ){
            return $stmt;
        }else{
            return false;
        }

    }

}
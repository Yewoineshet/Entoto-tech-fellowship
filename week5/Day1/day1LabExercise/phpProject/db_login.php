<?php


class db_login {
    private $conn;
    function __construct(){
        include_once 'db_connect.php';
        $db = new db_connect();
        $this->conn=$db->connect();
        
    }
    public function userlogin($user,$pass){
        $stm=  $this->conn->prepare("select * from login where username=? and password=?");
        $stm->bind_param("ss",$user,$pass);
        $stm->execute();
        $stm->store_result();
        if($stm ->num_rows>0){
            return 1;
             
        }else{
            return 2;
        }
        
    }
}

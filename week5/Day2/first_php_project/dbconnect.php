<?php


class dbconnect {
    private $conn;
    function __construct(){
        
    }
    function connect(){
        $host='localhost';
        $user='root';
        $pass='';
        $dbname='phpfirst';
        
        
        $this->conn=new mysqli($host,$user, $pass, $dbname);
        return $this->conn;
    }
}

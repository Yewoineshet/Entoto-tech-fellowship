<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db_connect
 *
 * @author woinua
 */
class db_connect {
    private  $conn;
    function __construct() {
        }
        
        function connect(){
            
            $host ='localhost';
            $user='root';
            $password ='';
            $dbname='phpfirst';
            
            $this->conn=new mysqli($host, $user, $password, $dbname); 
            
            return $this->conn;
            
        }






        //put your code here
}

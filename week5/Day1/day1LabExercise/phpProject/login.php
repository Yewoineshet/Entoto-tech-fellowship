<?php
include_once'db_login.php';
if(isset($_POST['user']) and isset($_POST['pass'])){

     $user =$_POST ['user'];
    $pass = $_POST ['pass'];
    $db = new db_login();
    $result = $db->userlogin($user, $pass);
    if($result=='1')
    {
        echo 'successfuly loged in';
    }
    else{
        echo 'incorrect username or password';
        
    }    
    
}



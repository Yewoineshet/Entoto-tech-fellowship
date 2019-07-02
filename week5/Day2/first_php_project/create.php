<?php
include_once 'dblogin.php';
if(isset($_POST['full_name'])and isset($_POST['age'])and isset($_POST['phone'])and isset($_POST['email'])){
  $full_name=$_POST['full_name']; 
  $age=$_POST['age'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $db =new dblogin();
  $result =$db->signup($full_name, $age, $phone, $email);
          if($result=='1'){
              echo 'sucessfuly loged in';
          }
          else{
              echo 'error';
          }
  
}


<?php
   $con = mysqli_connect('127.0.0.1','root','');
   if(!$con){
       echo 'not connected to server';
   }
   if(!mysqli_select_db($con,'tutorial')){
       echo 'db not selected';
   }
    $Name =$_POST['username'];
    $Email=$_POST['email'];

    $sql ="INSERT into person(Name,Email ) VALUES('Name','Email')";

    if(!mysqli_query($con, $sql)){
        echo 'Not inserted';
    }
    else{

        echo 'inserted';
    }

    header("refresh:2; url=index.html");
?>
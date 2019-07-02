<?php
$uname = $_POST['uname'];
$pass =$_POST['pass'];
$error = "";
$success ="";
if(isset($_POST['submit'])){
    if($uname== "admin"){
      if($pass=="password"){
          $error =="";
          $success=="welcome admin!!!";
           //redirect to another page on successful login
          
           
          }
    
          else{
            $error =="invalid password!";
          $success=="";  
            
          }
    }
    else{
        $error =="invalid username!";
          $success=="";  
     }

}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"  href="style.css"
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <title>Login Form</title>
    </head>
    <body>
        <div class ="container">
            <img src="Avatar.png" alt="Avatar">
            <p class ="error"><?php echo $error; ?></p><p class ="success"><?php echo $success; ?></p>
            <form method ="post">
                <div class ="form-input">
                    <i class ="fa fa-user fa-2x cust" aria hidden="true"></i>
                    <input type="text" name="uname" value="" placeholder="enter username" required><br/>
                    <i class ="fa fa-lock fa-2x cust" aria hidden="true"></i>
                    <input type="password" name="pass" value="" placeholder="enter password" required><br/>
                    <input type="submit" name="submit" value="Login"><br/>
                    <a href="#">Forget Password</a>
                </div>
            </form>
          
        </div>
    </body>
</html>

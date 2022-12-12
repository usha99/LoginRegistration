<?php
 session_start();
 require 'dbconfig/dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login Page</title>
</head>
<body>
    <div id="wrapper">
        <h2>Login Form</h2>
        <img src="loginicon.png" class="loginAvtar">
        <form class="loginForm" action="index.php" method="post">
            
                <label for="Login"> <b>User Name :<input id="userName" name="username" type="text" required class="detail" placeholder="Enter Your User Name" /></label><br>
                <label for="pass"><b> Password :<input id="Password" name="password" type="password" required class="detail" placeholder="Enter Your Password"/></label><br>
            
                <input type="submit" value="Login" name="login" id="login"><br>
            <a href="register.php"><input type="button" value="Register" name="register" id="reg"></a><br>
        </form>
             
        <?php
         if(isset($_POST['login']))
         // Check weather user name and password exists.....
         {
           $username = $_POST['username'];
           $password = $_POST['password'];

           $query = "select * from UserInfo WHERE username='$username' AND password='$password'";
           $query_run = mysqli_query($con,$query);
           if(mysqli_num_rows($query_run)>0)
           {
            // For the valid users....
            $_SESSION['username'] = $username;
            header('location:HomePage.php');
           }
           else
           {
            // For un registered users....
            echo '<script type="text/javascript"> alert("Invalid Credentials....")</script>';
           }
         }
         else
         {
            
         }
       ?>
    </div>
</body>
</html>
<?php

require 'dbconfig/dbconfig.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>registation Page</title>
</head>
<body>
    <div id="wrapper">
        <h2>Registration Form</h2>
        <img src="registation.png" class="regisAvtar">
        <form class="loginForm" action="register.php" method="post" autocomplete="off">
            
                <label for="Login"> <b>User Name :<input id="userName" name="username" type="text" required class="detail" placeholder="Enter Your User Name" /></label><br>
                <label for="Login"> <b>User Name :<input id="" name="username" type="text" required class="detail" placeholder="Enter Your User Name" /></label><br>
                <label for="Login"> <b>User Name :<input id="userName" name="username" type="text" required class="detail" placeholder="Enter Your User Name" /></label><br>
                <label for="Login"> <b>User Name :<input id="userName" name="username" type="text" required class="detail" placeholder="Enter Your User Name" /></label><br>
                <label for="pass"><b> Password :<input id="Password" name="password" type="password" required class="detail" placeholder="Enter Your Password" /></label><br>
                <label for="pass"><b>Confirm Password :<input id="Password" name="cpassword" type="password" required class="detail" placeholder="Enter Your Password"/></label><br>
            
            <input type="submit" value="Sign up" name="submit" id="sign_up"><br>
            <a href="index.php"><input type="button" value="Back to login" name="register" id="back_btn"></a><br>
        </form>
        <?php
         
         if(isset($_POST['submit']))
         {
            //echo '<script type="text/javascript"> alert("Sign Up Button Clicked....")</script>';
            $username = $_POST['username'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];

            if($password == $cpassword)
            {
                $query = "select * from UserInfo WHERE username='$username'";

                $query_run = mysqli_query($con,$query);
                if(mysqli_num_rows($query_run)>0)
                {
                    // There is already a user with the same username :
                    echo '<script type="text/javascript"> alert("This user already exist...Please select another user name")</script>';
                }
                else 
                {
                    $query = "insert into UserInfo value('$username',$password) ";
                    $query_run= mysqli_query($con,$query); // Check weather query run successfully...
                    if($query_run)
                    {
                        echo '<script type="text/javascript"> alert("User Registered... Go to login page ")</script>';
                    }
                    else
                    {
                        echo '<script type="text/javascript"> alert("Error...")</script>';
                    }
                }
            }
            else{
                echo '<script type="text/javascript"> alert("Password and confirm password does not match...")</script>';
            }
         }
        
        ?>
    </div>
</body>
</html>
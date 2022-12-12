<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Home Page</title>
</head>
<body>
    <div id="wrapper">
        <h2>Home Page</h2>
        <h3>Welcome to our Page 
        <?php
          echo $_SESSION['username'];
        ?></h3>
        <img src="HomePage.jpg" class="HomePage"> 
        <form class="loginForm" action="Homepage.php" method="post">
            <input type="submit" value="Log Out" name="logout" id="logout"><br>
        </form>
        <?php
        if(isset($_POST['logout'])){
         session_destroy();
         header('location:index.php');
        }
        ?>
    </div>
</body>
</html>
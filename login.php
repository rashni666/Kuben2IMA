<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" .md5($password) . "'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: main.php");
        } else {
            echo "<section>
            <div class='color'></div>
    <div class='color'></div>
    <div class='color'></div>
    <div class='box'>
            <div class='square2' style='--i:0'></div>
        <div class='square' style='--i:1'></div>
        <div class='square2' style='--i:2'></div>
        <div class='square2' style='--i:3'></div>
        <div class='square2' style='--i:4'></div>   
        <div class='square' style='--i:5'></div>  
        <div class='square' style='--i:6'></div>  
        <div class='square' style='--i:7'></div> 
        <div class='square' style='--i:8'></div> 
        <div class='square' style='--i:9'></div> 
        <div class='square' style='--i:10'></div>
        <div class='square' style='--i:11'></div>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </section>";
        }
    } else {
?>
<section>
    <div class="color"></div>
    <div class="color"></div>
    <div class="color"></div>
    <div class="box">
        <div class="square" style="--i:0"></div>
        <div class="square" style="--i:1"></div>
        <div class="square" style="--i:2"></div>
        <div class="square" style="--i:3"></div>
        <div class="square" style="--i:4"></div>   
        <div class="square" style="--i:5"></div>  
        <div class="square" style="--i:6"></div>  
        <div class="square" style="--i:7"></div> 
        <div class="square" style="--i:8"></div> 
        <div class="square" style="--i:9"></div> 
        <div class="square" style="--i:10"></div>
        <div class="square" style="--i:11"></div>         
        <div class="container">
            <div class="form">
                <h2>Log in to your account</h2>
                <form class="form" method="post" name="login">
        <div class="inputBox">
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Login">
                    </div>
                    <p class="forget">Don't have an account? <a href="registration.php">Sign up!</a></p>
  </form>
            </div>
        </div>
    </div>
</section>
<?php
    }
?>
</body>
</html>
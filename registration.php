<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css"></head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
                     $SELECT = "SELECT email From loginsystem Where email = ? Limit 1";
        $result   = mysqli_query($con, $query);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);

if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
  // tell the user something went wrong
}
        if ($result) {
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
            <div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>
                  </section>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form action="" method="post">
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
                <h2>Register a new account</h2>
                <form action="insert.php" method="POST">
                    <div class="inputBox">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="username" placeholder="Username" required maxlength="25" minlength="5" >
                    </div>
                    <div class="inputBox">
                        <input type="password" name="password" placeholder="Password" required minlength="8">
                        
                    </div>
                    <div class="inputBox">
                        <input type="reset" value="Reset" style="background: rgb(218, 33, 255);
    color: #fff;
    max-width: 88px;
    cursor: pointer;
    font-weight: 600;">
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Register">
                    </div>

                    <p class="forget">Already have an account? <a href="login.php">Login here!</a></p>
                    </form>
<?php
    }
?>
</body>
</html>
<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="stylelogin.css" />
</head>
<body>
    
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
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You have succesfully logged in and an user!</p>
        <p><a href="index.html">To the main page</a></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</section>
</body>
</html>
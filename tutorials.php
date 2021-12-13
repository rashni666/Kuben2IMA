<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="tutorialsstyle.css" />
    <title>Gallery</title>
  </head>
  <body>
    <section>
      <ul>
        <li class="list" data-filter="All">Show all</li>
        <li class="list" data-filter="avatars">Photoshop Tutorials</li>
        
        <a href="galleryPS.php" style="margin-left: 18.5%; background-color:rgb(0, 174, 255); color:black;"><li class="list">Portofolio</li></a>
        <a href="main.php" style="background-color:rgb(0, 174, 255); color:black"><li class="list">Back to Home</li></a>
        
        
      </ul>
    </section>
  </body>
</html>
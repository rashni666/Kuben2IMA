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
    <title>n.z.Video Edits</title>
  </head>
  <body>
    <section>
      <ul>
        <li class="list" data-filter="All">Show all</li>
        <li class="list" data-filter="csgo">CS Edits</li>
        <li class="list" data-filter="funnym">Funny Moments</li>
        <li class="list" data-filter="logos"></li>
        <li class="list" data-filter="artworks"></li>
        <li class="list" data-filter="covers"></li>

        <a href="galleryPS.php" style="margin-left: 17.2%; background-color:rgb(0, 174, 255); color:black;"><li class="list">Portofolio</li></a>
        <a href="tutorials.php" style="background-color:rgb(0, 174, 255); color:black;"><li class="list">Tutorials</li></a>
        <a href="main.php" style="background-color:rgb(0, 174, 255); color:black;"><li class="list">Back to Home</li></a>
      </ul>
        
          <div class="work">
        
          <div class="itembox csgo"><iframe style="position:relative; margin:5px;" width="610" height="390" src="https://youtube.com/embed/Mse4yKVRZhw"></iframe></div>
            <div class="itembox csgo"><iframe style="position:relative; margin:5px;"  width="610" height="390" src="https://youtube.com/embed/WSP2vq5DkGk"></iframe></div>
                <div class="itembox funnym"><iframe style="position:relative; margin:5px;"  width="610" height="390" src="https://youtube.com/embed/s9mKezEkL00"></iframe></div>
            <div class="itembox csgo"><iframe style="position:relative; margin:5px;"  width="610" height="390" src="https://youtube.com/embed/nPGGPHjJekE"></iframe> </div>
            <div class="itembox csgo"><iframe style="position:relative; margin:5px;"  width="610" height="390" src="https://youtube.com/embed/9vnvI_Ijey8"></iframe></div>
            <div class="itembox csgo"> <iframe style="position:relative; margin:5px;"  width="610" height="390" src="https://youtube.com/embed/jp-a8F25Q9U"></iframe>  </div>
        </div>
       
        <p style="opacity: 10%; color:white; margin:100px">All rights reserved by @n.z.daNNy</p>
    </section>
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.list').click(function(){
        const value = $(this).attr('data-filter');
        if (value == 'All'){
          $('.itembox').show('1000');
        }
        else{
          $('.itembox').not('.'+value).hide('1000');
          $('.itembox').filter('.'+value).show('1000');
        }
      })
        $('.list').click(function(){
          $(this).addClass('active').siblings().removeClass('active');
        })
      })
  </script>
  </body>
</html>
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
    <link rel="stylesheet" type="text/css" href="gallerystyle.css" />
    <title>n.z.Gallery</title>
  </head>
  <body>
    <section>
      <ul>
        <li class="list" data-filter="All">Show all</li>
        <li class="list" data-filter="avatars">Avatars</li>
        <li class="list" data-filter="banners">Banners</li>
        <li class="list" data-filter="logos">Logos</li>
        <li class="list" data-filter="artworks">Artworks</li>
        <li class="list" data-filter="covers">Covers</li>
        
        <a href="tutorials.php" style="margin-left: 6.6%; background-color:rgb(0, 174, 255); color:black;"><li class="list">Tutorials</li></a>
        <a href="aftereffects.php" style="background-color:rgb(0, 174, 255); color:black;"><li class="list">Video Edits</li></a>
        <a href="main.php" style="background-color:rgb(0, 174, 255); color:black"><li class="list">Back to Home</li></a>
        
      
      </ul>

      <div class="work">
        <div class="itembox avatars"><img src="gallery img\Photoshop\av (1).png"></div>
        <div class="itembox avatars"><img src="gallery img\Photoshop\av (3).png"></div>
        <div class="itembox avatars"><img src="gallery img\Photoshop\av (2).png"></div>
        <div class="itembox avatars"><img src="gallery img\Photoshop\av (4).png"></div>
        <div class="itembox avatars"><img src="gallery img\Photoshop\avciler1.png.fa729cf903c6e458022f5a29c268658f.png"></div>
        <div class="itembox avatars"><img src="gallery img\Photoshop\avciler2.png.17a56a71fb7aa2cecff2147fc707e07a.png"></div>
        
        <div class="itembox logos"><img src="gallery img\Photoshop\logo (1).png"></div>
        <div class="itembox logos"><img src="gallery img\Photoshop\logo (2).png"></div>
        <div class="itembox logos"><img src="gallery img\Illustrator\basket.png"></div>
        <div class="itembox logos"><img src="gallery img\Illustrator\wUV2D79.png"></div>

        <div class="itembox banners"><img src="gallery img\Photoshop\cilerb1.png.8cce7bc8d50d3553cebc8dc8320c948a.png"></div>
        <div class="itembox banners"><img src="gallery img\Photoshop\banner (2).png"></div>
        <div class="itembox banners"><img src="gallery img\Photoshop\banner (4).png"></div>
        <div class="itembox banners"><img src="gallery img\Photoshop\banner (3).png"></div>
        <div class="itembox banners"><img src="gallery img\Photoshop\banner (1).png"></div>

        <div class="itembox covers"><img src="gallery img\Illustrator\golden-roses.png"></div>
        <div class="itembox covers"><img src="gallery img\Illustrator\artworks (1).png"></div>
        <div class="itembox covers"><img src="gallery img\Illustrator\Sw-inging-by-a-thread.png"></div>
        <div class="itembox covers"><img src="gallery img\Illustrator\artworks (3).png"></div>

        <div class="itembox artworks"><img src="gallery img\Photoshop\artwork (2).png"></div>
        <div class="itembox artworks"><img src="gallery img\Photoshop\artwork (3).png"></div>
        <div class="itembox artworks"><img src="gallery img\Photoshop\artwork (4).png"></div>
        <div class="itembox artworks"><img src="gallery img\Photoshop\artwork (1).png"></div>
        <div class="itembox artworks"><img src="gallery img\Illustrator\Nanelien-8.png"></div>
        <div class="itembox artworks"><img src="gallery img\Illustrator\artworks (2).png"></div>
        <div class="itembox artworks"><img src="gallery img\Illustrator\artworks (4).png"></div>
        <div class="itembox artworks"><img src="gallery img\Illustrator\artworks (5).png"></div>
        <div class="itembox artworks"><img src="gallery img\Illustrator\artworks (6).png"></div>
        <div class="itembox artworks"><img src="gallery img\Illustrator\1.png"></div>
        <div class="itembox artworks"><img src="gallery img\Illustrator\norsksad1.png"></div>
        <p style="opacity: 10%; color:white; margin:100px">All rights reserved by @n.z.daNNy</p>
      </div>
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
<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>n.z.Home Page</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" type="text/css" href="styleindex.css">

</head>
<body>
    
<!-- header section starts  -->
<a href="logout.php"><button class="btn" style="margin-top: 0px;">Logout</button></a>
<header>

    <div class="user">
        <img src="images/119561052_994849064275853_7948568950037828399_n.jpg" alt="">
        <h3 class="name">n.z.danny</h3>
        <p class="post">Graphic Designer</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#service">Artgallery</a></li>
            <li><a href="#education">education</a></li>
            <li><a href="#faq">#FAQ</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<!-- content section starts  -->
<?php include "container.php"
?>


<!-- content section ends -->

<!-- theme toggler  -->

<div class="theme-toggler">
<span></span>
<span style="background:linear-gradient(blueviolet, deeppink)"></span>
<span style="background: linear-gradient(rgb(0, 225, 255) ,rgb(31, 0, 168));"></span>
<span style="background:linear-gradient(#999, #111)"></span>
</div>


<!-- script link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

<script>

    var type = new Typed('.typing-text',{
        strings : [ 'web designer', 'graphic designer', 'video editor' ],
        typeSpeed: 120,
        loop:true
    });

    let themeColor = document.querySelectorAll('.theme-toggler span');
    themeColor.forEach(color => color.addEventListener('click', () =>{
        let background = color.style.background;
        document.querySelector('body').style.background = background;
    }));

</script>

</body>
</html>
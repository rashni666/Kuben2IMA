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
    <title>n.z.danny / Main Page</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" type="text/css" href="styleindex.css">

</head>
<body>
    
<!-- header section starts  -->
<a href="logout.php"><button class="btn">Logout</button></a>
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
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<!-- content section starts  -->

<div class="container">

    <section class="home" id="home">

        <h3>hi there,</h3>
        <h3 class="name">my name is <span>Danny</span></h3>
        <h3 class="post">i am a <span class="typing-text"></span></h3>

        <a href="#service"><button class="btn">view my work</button></a>

        <div class="share">
            <a href="https://www.facebook.com/daniel.nz2" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/n.z.danny/" class="fab fa-instagram"></a>
            <a href="https://ro.pinterest.com/alexutum/" class="fab fa-pinterest"></a>
            <a href="https://www.youtube.com/c/RashaNN" class="fab fa-youtube"></a>
        </div>

    </section>

    <!-- about section  -->

    <section class="about" id="about">

        <h1 class="heading">about me</h1>

        <div class="content">
            <h3 class="name">my name is <span>Danny</span></h3>
            <p></p>
            <p></p>
        </div>

        <div class="skills">
            <div class="progress">
                <h3>Programming <span>50%</span></h3>
                <div class="bar"><span></span></div>
            </div>
            <div class="progress">
                <h3>After Effects <span>75%</span></h3>
                <div class="bar"><span></span></div>
            </div>
            <div class="progress">
                <h3>Illustrator <span>75%</span></h3>
                <div class="bar"><span></span></div>
            </div>
            <div class="progress">
                <h3>photoshop <span>95%</span></h3>
                <div class="bar"><span></span></div>
            </div>
        </div>

    </section>

    <!-- gallery section  -->
    <section class="service" id="service">

        <h1 class="heading" style="margin: 50px;">Artgallery</h1>

        <div class="box-container">

            <div class="box">
            <a href="#service"><button class="btn"><img src="images\adobe-illustrator-2522532-2132720.webp" width="40px" height="40px">
                <p>Adobe Illustrator</p></button></a>
            </div>

            <div class="box">
            <a href="#service"><button class="btn"> <img src="images\Adobe_After_Effects_CC_icon.svg.png" width="40px" height="40px">
                <p>Adobe After Effects</p></button></a>
            </div>

            <div class="box">
            <a href="galleryPS.php"><button class="btn"><img src="images\1051px-Adobe_Photoshop_CC_icon.svg.png" width="40px" height="40px">
                <p>Adobe Photoshop</p></button></a>
            </div>

            <div class="box">
            <a href="#service"><button class="btn"><img src="images\835066-200.png" width="45px" height="45px">
                <p>Tutorials</p></button></a>
            </div>

        </div>

    </section>


    <!-- education section  -->

    <section class="education" id="education">

        <h1 class="heading">my education</h1>

        <div class="box-container">

            <div class="box">
                <div class="year">2021 – Today's Date</div>
                <h3>Kuben VGS, Oslo VG2</h3>
                <p>IT</p>
            </div>
            
            <div class="box">
                <div class="year">2015 - 2016</div>
                <h3>Nøklevann barneskole, Oslo Barneskole</h3>
                <p>Primary school</p>
            </div>
            
            <div class="box">
                <div class="year">2019 – 2020</div>
                <h3>Kuben VGS, Oslo VG1</h3>
                <p>IT and Media Design</p>
            </div>
            
            <div class="box">
                <div class="year">2009 - 2015</div>
                <h3>School in Romania</h3>
                <p>Primary school in Romania</p>
            </div>
            <div class="box">
                <div class="year">2016 - 2019</div>
                <h3>Skullerud Ungdomskole, Oslo Ungdomskole</h3>
                <p>Highschool</p>
            </div>
        </div>

    </section>

    <!-- contact section  -->
    <section class="contact" id="contact">

        <h1 class="heading">contact me</h1>

        <div class="row">

            <form action="https:/formsubmit.co/alexutu.m@yahoo.com" method="post">
                <input type="hidden" name="_subject" value="You recieved a new email from n.z.d Gallery!">
                <input type="text" class="box" name="name" placeholder="your name" required>
                <input type="text" class="box" name="username" placeholder="Username" required>
                <input type="email" class="box" name="email" placeholder="your email" required>
                <input type="text" class="box" name="subject" placeholder="subject" required>
                <input class="box message" cols="30" rows="10" type="text" name="message" placeholder="Your message here" required>
                <input type="submit" value="send" class="btn">
            </form>

            <div class="content">
                <div class="icons">
                    <h3><i class="fas fa-map-marker-alt"></i> address </h3>
                    <p>Bølerlia 153, 0689, OSLO</p>
                </div>
                <div class="icons">
                    <h3><i class="fas fa-envelope"></i> email </h3>
                    <p>alexutu.m@yahoo.com</p>
                </div>
                <div class="icons">
                    <h3><i class="fas fa-phone"></i> phone </h3>
                    <p>+47 939 89 685</p>
                </div>
            </div>

        </div>

    </section>

</div>

<!-- content section ends -->

<!-- theme toggler  -->

<div class="theme-toggler">
    <span style="background: linear-gradient(rgb(0, 225, 255) ,rgb(31, 0, 168));"></span>
    <span style="background:linear-gradient(blueviolet, deeppink)"></span>
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
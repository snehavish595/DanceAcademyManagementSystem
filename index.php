<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css");
    </style>

    <title></title>
</head>

<body>


    <div class="navbar">
        <div class="left ">
        <a href="index.php" ><i class="bi bi-bullseye "></i><i class="bi bi-disc "></i> <a href="index.php" ></a>
        
        </div>
        <div class="middle">
            <ul>
            <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="classes.php">Classes</a></li>
                <li><a href="styles.php">Styles</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="right">
            <ul>
            <li>
                <?php
            
                if(isset($_SESSION['user'])){
                    echo "<a href='logout.php'>Logout</a>";
                }
                    else{
                
                echo '<li><a href="login.php">Login</a></li>';
                echo '<li><a href="signup.php">Signup</a></li>';
                    }
                ?>
            </li>

            </ul>
        </div>
    </div>





 <div class="welcome text-white bg-black ps-3">

  <?php

  if(isset($_SESSION['user'])){
      echo "<b>Welcome to Dance+ Academy</b>";
  }
  ?>
 </div>
 
    <div class="background">
        <img src="images/bgimage4.jpg">
    </div>


    <div class="shopbycategory">
        <h2
            style="border: 2px solid #ddd; border-radius:23px;width:1186px; margin-left:98px; color: aliceblue; padding: 3px; font-family: 'Roboto', sans-serif; background-color: #3a3c3f;">
            Dance Styles</h2>

        <div class="items">
            <a href="#">
                <img src="images/ballet.jpg" alt="" class="thumbnail">
            </a>
            <div class="caption">
                <h2>Ballet</h2>
            </div>

        </div>

        <div class="items">
            <a href="#">
                <img src="images/folk.jpg" alt="" class="thumbnail">
            </a>
            <div class="caption">
                <h2>Folk</h2>
            </div>

        </div>

        <div class="items">
            <a href="#">
                <img src="images/kathak.jpg" alt="" class="thumbnail">
            </a>
            <div class="caption">
                <h2>Kathak</h2>
            </div>

        </div>

        <div class="items">
            <a href="#">
                <img src="images/hiphop.jpg" alt="" class="thumbnail">
            </a>
            <div class="caption">
                <h2>Hip Hop</h2>
            </div>

        </div>

        <div class="items">
            <a href="#">
                <img src="images/contemporary.jpg" alt="" class="thumbnail">
            </a>
            <div class="caption">
                <h2>Contemporary</h2>
            </div>

        </div>

        <div class="items">
            <a href="#">
                <img src="images/bharatanatyam.jpg" alt="" class="thumbnail">
            </a>
            <div class="caption">
                <h2>Bharatanatyam</h2>
            </div>

        </div>

    </div>

    <div class="about">
        <img src="images/levels-content.jpg">
        <div class="content">
            <h1 style="padding-top:51px;">Dance Classes for Everyone</h1>
            <p style="padding-top: 23px;">Whether you're just learning how to dance or looking <br> to add to your
                in-studio training, our ever-updating <br> library includes classes at every dance level that will <br>
                keep you inspired, moving, and learning.</p>
        </div>

        <div class="level">
            <i class="bi bi-arrow-right fa-2x"></i>
            <h1 class="ps-2" style="display:inline; "><b>BEGINNER</b></h1>
            <br><i class="bi bi-arrow-right fa-2x"></i>
            <h1 class="ps-2" style="display:inline; "><b>INTERMEDIATE</b></h1>
            <br><i class="bi bi-arrow-right fa-2x"></i>
            <h1 class="ps-2" style="display:inline; "><b>ADVANCED</b></h1>

        </div>
            </div>


        <div class="followus">
            <div class="address">
                <h3>Contact us</h3><br>
                <i class="bi bi-house-door"></i>       <b class="ps-2">Address:</b> 2 / A Green Field J V <br>Link Road Andheri , <br>Mumbai, Maharashtra, 400093, India
            </div>

            <div class="socialmedia">
                <h3>Follow us</h3>
                <br> <i class="bi bi-instagram "></i><a href="instagram.com"
                    class="text-decoration-none ps-2">Instagram</a>
                <br> <i class="bi bi-youtube"></i><a href="instagram.com" class="text-decoration-none ps-2">Youtube</a>
                <br> <i class="bi bi-facebook"></i><a href="instagram.com"
                    class="text-decoration-none ps-2">Facebook</a>
            </div>
        </div>



        <?php
    echo "<footer>";
        echo '<div class="footer">';
           echo" Copyright ©".$date=date('Y')."  - www.dance+.com. All Rights Reserved.";
        echo "</div>";
    echo "</footer>";
    ?>


</body>

</html>
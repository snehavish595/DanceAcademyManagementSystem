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

    .about {
        background-color: #161e1e;
        height:300px;
    }

    .items{width: 23%;
    display: block;
    padding: 3px;
    margin-top: 70px;
    line-height: 1.42857143;
    background-color: #f8f8f8;
    border: 1px solid #ddd;
    border-radius: 4px;
    float: left;
    margin-left: 8%;
    }
    </style>

    <title>Dance Academy</title>
</head>

<body>


    <div class="navbar">
        <div class="left ">
            <a href="index.php"><i class="bi bi-bullseye "></i><i class="bi bi-disc "></i> <a href="index.php"></a>
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


    <div class="welcome bg-black text-white ps-3" >
    <?php
    
        if(isset($_SESSION['user'])){
                    echo "<b>Welcome to Dance+ Academy</b> ";
                }
                
                ?>
            
 </div>


    <div class="about " >
        <div class="content">
            <h1 style="padding-top:51px;">Learn any dance style</h1>
            <p style="padding-top: 23px;" >With a Dance+ Academy membership, you get access <br>to live and on-demand dance
                classes in all major dance <br>styles, taught by the world's best choreographers.</p>
        </div>
      

    </div>







    <div class="shopbycategory">
        <h2
            style="border: 2px solid #ece6e6; border-radius: 16px; width: 800px; margin-left: 307px; color: #fffefe; padding: 10px; font-family: 'Roboto Mono'; background-color: #383b3f; height: 66px;;">
            Pick Your Plan</h2>
        <p style="margin-top:70px" ;>Sign up for a premium plan to get unlimited access to 1500+ classes and our full
            range of instructors.</p>

        <div class="items" style="width:500px; height:250px;">
            <h2 class="mt-4">MONTHLY PLAN </h2>

            <div class="caption">
                $20/month
            </div>
            <div class="tagline">
                <p>START FREE 7 DAY TRIAL</p>
            </div>
        </div>

        <div class="items" style="width:500px; height:250px;">
            <h2 class="mt-4">ANNUAL PLAN </h2>

            <div class="caption">
                $6.67/month
            </div>
            <div class="tagline">
                <p>START FREE 7 DAY TRIAL</p>
            </div>
        </div>



    </div>



    

    <div class="shopbycategory h-50" style="margin-top:-250px;">

        <h2
            style="border: 2px solid #ddd; border-radius:2px;width:1186px; margin-left:98px; color: aliceblue; padding: 3px; font-family: 'Roboto', sans-serif; background-color: #3a3c3f;">
            Dance Styles</h2>

        <div class="items">
            <a href="#">
                <img src="images/ballet.jpg" alt="" class="thumbnail">
            </a>
            <div class="caption">
                <h2>Ballet </h2>

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

        
        <div class="items">
            <a href="#">
                <img src="images/bhangra.jpg" alt="" class="thumbnail">
            </a>
            <div class="caption">
                <h2>Bhangra</h2>
            </div>

        </div>

        
        <div class="items">
            <a href="#">
                <img src="images/popping.jpg" alt="" class="thumbnail">
            </a>
            <div class="caption">
                <h2>Popping</h2>
            </div>

        </div>

        
        <div class="items">
            <a href="#">
                <img src="images/footwork.jpg" alt="" class="thumbnail">
            </a>
            <div class="caption">
                <h2>Footwork</h2>
            </div>

        </div>

        <div class="items">
            <a href="#">
                <img src="images/ballroom.jpg" alt="" class="thumbnail">
            </a>
            <div class="caption">
                <h2>Ballroom</h2>
            </div>

        </div>


        <div class="items">
            <a href="#">
                <img src="images/tap.jpg" alt="" class="thumbnail">
            </a>
            <div class="caption">
                <h2>Tap</h2>
            </div>

        </div>

    </div>

    <div class="about d-flex" style="margin-top: 128px; height: 455px; background-color: #f8eff7; color: black;">


        <div class="content " style="text-align: center; font-family: cursive; margin-left: 337px; margin-top: 45px;">
            <h1 style="padding-top:51px; font-size:25px;  text-align:center; "> On-demand classes at your pace<br>and on your schedule
            </h1>
            
            <p style="padding-top: 23px; text-align:center; ">Through our on-demand library, you can explore classes in multiple styles
                and
                levels to find what's right for you. <br>Choose from a variety of class types, including warmups,
                technique
                exercises, across-the-floor progressions, and <br>choreography. No matter your level, our dance classes and
                world-class instructors will keep you inspired and <br>learning throughout the year.</p>
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
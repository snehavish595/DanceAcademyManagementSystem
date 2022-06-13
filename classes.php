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

    }

    .items {
        width: 574px;
    height: 400px;
    }

     .images{
    width: 300px;
    margin-top: 138px;
    margin-left: 90px;
    } 

    
    </style>

    <title>Dance Academy</title>
    <script>
    function display() {
        alert("Please Login To Play Video!!!");
    }
    </script>

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


    <div class="welcome bg-black text-white ps-3">
        <?php
    
        if(isset($_SESSION['user'])){
                    echo "<b>Welcome to Dance+ Academy</b> ";
                }
                
                ?>

    </div>





    <div class="about">
        <div class="content">
            <h1 style="padding-top:51px;"> On-demand dance classes</h1>
            <p style="padding-top: 23px;">Whether you are new to dance or preparing for your <br>next audition, a dance+
                academy
                membership will help <br>you achieve your dance goals. We offer live and on-<br>demand dance classes in
                all
                styles and levels, with <br>24/7 access to fit into your busy schedule.</p>
        </div>

    </div>

    <div class="about d-flex" style="margin-top:150px; height:500px; background-color:#f0f0f0; color:black;">


        <div class="content">
            <h1 style="padding-top:60px; margin-left:100px; font-size:20px; "> On-demand<br> classes at your pace<br>and
                on your schedule</h1>
            <hr>
            <p style="padding-top: 23px; margin-left:120px;">Through our on-demand library, you can explore classes<br>
                in multiple styles and
                levels to find whats right for you. <br>Choose from a variety of class types, including warmups,<br>
                technique
                exercises, across-the-floor progressions, and <br>choreography. No matter your level, our dance classes
                <br>and
                world-class instructors will keep you inspired and <br>learning throughout the year.
            </p>
        </div>
        <div class="level " style="padding-top:150px; margin-left:200px;">
            <i class="bi bi-arrow-right fa-2x"></i>
            <h1 class="ps-2" style="display:inline; "><b>BEGINNER</b></h1>
            <br><i class="bi bi-arrow-right fa-2x"></i>
            <h1 class="ps-2" style="display:inline; "><b>INTERMEDIATE</b></h1>
            <br><i class="bi bi-arrow-right fa-2x"></i>
            <h1 class="ps-2" style="display:inline; "><b>ADVANCED</b></h1>
        </div>
    </div>






    <?php

if(isset($_SESSION['user'])){
    echo '<div class="shopbycategory h-50">
<h2 style="border: 2px solid #ddd; border-radius:2px;width:1186px; margin-left:98px; color: aliceblue; padding: 3px; background-color: #3a3c3f;">
             Latest Videos </h2>

        <div class="items">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tJUgXIreW8w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="caption ">
                <h2>Folk</h2>
            </div>
        </div>

        <div class="items">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/z-3V6tdlvhY"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="caption">
                <h2>Kathak</h2>
            </div>

        </div>

        <div class="items">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ta21GJsoa1I"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="caption">
                <h2>Hip Hop</h2>
            </div>

        </div>

        <div class="items">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/XlNSFgSMGZA"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="caption">
                <h2>Contemporary</h2>
            </div>

        </div>

        <div class="items">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/JWhA3ldZcyY"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="caption">
                <h2>Bharatanatyam</h2>
            </div>

        </div>


        <div class="items">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/_G121a_3zGQ"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="caption">
                <h2>Bhangra</h2>
            </div>

        </div>


        <div class="items">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/F-5Pg8D2abI"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="caption">
                <h2>Popping</h2>
            </div>

        </div>


        <div class="items">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/xFu_bS4xfCY"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="caption">
                <h2>Footwork</h2>
            </div>

        </div>

        <!-- <div class="items">
            <a href="#">
                <img src="images/ballroom.jpg" alt="" class="thumbnail">
            </a>
            <div class="caption">
                <h2>Ballroom</h2>
            </div>

        </div> -->


        <div class="items">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/cGdTx15wbUY"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="caption">
                <h2>Tap</h2>
            </div>

        </div>

    </div>';
    }


    else{
        echo '<h2 style="    border: 2px solid #ddd; border-radius: 2px; width: 1186px;
        margin-left: 144px; color: aliceblue; padding: 3px; background-color: #3a3c3f; margin-top: 81px;">Latest Videos </h2>
        
        <div class="items" style="width: 568px;
        height: 381px;">
        <img src="images/folkimg.jpg" style="height:315px; width:560px;" onclick="display();">
            <div class="caption">
                <h2></h2>
            </div>
         </div>

         <div class="items" style="width: 568px;
        height: 381px;">
        <img src="images/kathakimg.png" style="height:315px; width:560px;" onclick="display();">
            <div class="caption">
                <h2>Kathak</h2>
            </div>
         </div>

         <div class="items" style="width: 568px;
        height: 381px;">
        <img src="images/bharatnatyamimg.png" style="height:315px; width:560px;" onclick="display();">
            <div class="caption">
                <h2>Bharatnatyam</h2>
            </div>
         </div>

         <div class="items" style="width: 568px;
        height: 381px;">
        <img src="images/poppingimg.png" style="height:315px; width:560px;" onclick="display();">
            <div class="caption">
                <h2>Popping</h2>
            </div>
         </div>';
    }
?>






<?php
     echo "<footer style='margin-top:150vh;'>";
         echo '<div class="footer">';
            echo" Copyright ©".$date=date('Y')."  - www.dance+.com. All Rights Reserved.";
        echo "</div>";
     echo "</footer>";
    ?>

</body>

</html>
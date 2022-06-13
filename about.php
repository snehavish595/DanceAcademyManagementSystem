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


    <div class="about">
        <img src="images/levels-content.jpg">
        <div class="content">
            <h1 style="padding-top:51px;">About us</h1>
            <p style="padding-top: 23px; margin-top: 0; margin-bottom: 1rem; margin: 30px; margin-left: 511px; margin-right: 111px;"> Dance is one of the most expressive crafts known to mankind. People of all
                ages and preferences admire dance and, people in India are no different. In our country, there is a song
                and dance for virtually every season and reason. Despite so much love towards this art, people are
                averse to the idea of taking up dancing as a profession.</p>
            <p style="margin-top: 0; margin-bottom: 1rem; margin-right: 88px; margin-left: 517px;"> We work together, towards professional excellence in exploring dance in
                various forms such as educational, research, artistic and commercial ventures. We constantly strive for
                efficiency and customer satisfaction.</p>
        </div>

    </div>



    <div class="followus">
    <div class="address">
                <h3>Contact us</h3><br>
                <i class="bi bi-house-door"></i>       <b class="ps-2">Address:</b> 2 / A Green Field J V <br>Link Road Andheri , <br>Mumbai, Maharashtra, 400093, India
            </div>

        <div class="socialmedia">
            <h3>Follow us</h3>
            <br> <i class="bi bi-instagram "></i><a href="instagram.com" class="text-decoration-none ps-2">Instagram</a>
            <br> <i class="bi bi-youtube"></i><a href="instagram.com" class="text-decoration-none ps-2">Youtube</a>
            <br> <i class="bi bi-facebook"></i><a href="instagram.com" class="text-decoration-none ps-2">Facebook</a>
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
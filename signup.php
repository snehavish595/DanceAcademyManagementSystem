<?php
session_start();

if (isset($_POST['submit'])){
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
}
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

    <style>
    .container {
        margin-top: 25px;
        background-color: #e2f4e3;
        height: 600px;
        width: 700px;
    }


    .form-control {
        width: 50%;
    }
    </style>

    <title>Dance Academy</title>

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

    <div class="welcome bg-black text-white ps-3" >
    <?php
    
        if(isset($_SESSION['user'])){
                    echo "<b>Welcome to Dance+ Academy</b> ";
                }
                
                ?>
            
 </div>



    <!-- contact form -->

    <?php
  if (isset($_POST['submit'])){
  $conn = mysqli_connect("localhost", "root", "", "dance");
  $sql = "insert into users (firstname, lastname, email, password) values ('$firstname', '$lastname', '$email', '$password')";

  mysqli_query($conn, $sql);
  echo '<div class="alert alert-primary text-center" role="alert">
 Your account was created!. <p>Congratulations! You just created an account. Now you can <a href="login.php">Login</a></p>
</div>';

}
  ?>
    <div class="container" style="margin-top:122px;">
        <h3 style="padding-top:30px; margin-left:90px; margin-bottom:35px;">Register to continue to Dance+ Academy.</h3>


        <form method="post" action="signup.php"  >
            <div class="form-group ps-5" style="margin-left:110px;">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" name="fname" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter First Name" style="width:370px;">
            </div>

            <div class=" form-group ps-5" style="margin-left:110px;">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" name="lname" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter Last Name" style="width:370px;">
            </div>

            <div class="form-group ps-5" style="margin-left:110px;">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email" style="width:370px;">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group ps-5" style="margin-left:110px;">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Password" style="width:370px;">
            </div>
            <div class="form-group ps-5" style="margin-left:110px;">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1"
                    placeholder="Confirm Password" style="width:370px;">
            </div>
            <div class="form-check ps-5" style="margin-left:110px;">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" style="margin-left:300px;" name="submit">Submit</button>

            <br><br>
            <p class="text-center">I have an account ? <a href="login.php">Login</a></p>
        </form>
</div>




<?php 
 if(isset($_GET['log']))
 {
  echo "<script>";
  echo "alert('Invalid Login Detaill!!!')";
  echo "</script>";
 }
?>


    <?php
    echo "<footer style='margin-top:300px;'>";
        echo '<div class="footer">';
           echo" Copyright ©".$date=date('Y')."  - www.dance+.com. All Rights Reserved.";
        echo "</div>";
    echo "</footer>";
    ?>

</body>

</html>
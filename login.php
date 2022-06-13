<?php
    session_start();
if (isset($_POST['submit'])){
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
        height: 450px;
        width: 500px;
    }


    .form-control {
        width: 50%;
    }
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
$sql="select *  from users where email='$email' and password='$password'  ";
$result= mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);

if($num>=1)
{
	$_SESSION['user']=$email;
header("location: index.php");
}
else 
{
    echo '<div class="alert alert-warning d-flex align-items-center" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </svg>
    <div>
      Invalid email or password
    </div>
  </div>';
  }
}

 
   ?>

    <div class="container" style="margin-top:122px;">
        <h3 style="padding-top:30px; text-align:center; margin-bottom:35px;">Welcome to Dance+ Academy</h3>


        <form action="login.php" method="post" >

            <div class="form-group ps-5" style="margin-left:25px;">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"
                    placeholder="Enter email" style="width:370px;">
            </div>
            <div class="form-group ps-5" style="margin-left:25px;">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password"
                    style="width:370px;">
            </div>
            <br>
            <p style="text-align:center;"><a href="#">Forgot your password?</a></p>
            <br>
            <button type="submit" class="btn btn-primary" style="margin-left:200px;" name="submit">Login</button>
        </form>

    </div>

    <?php
        if(isset($_GET['log']))
        {
         echo "<script>";
         echo "alert('Invalid Login Detail!')";
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
<?php
include('connection.php');
if(isset($_POST['loginbtn'])){
    $useremail = $_POST['uname'];
    $userpassword = $_POST['upass'];
    $resultant = mysqli_query($con , "SELECT * FROM `tbl_user` WHERE uname = '$useremail' OR email = '$useremail'");
    $row = mysqli_fetch_assoc($resultant);

    if(mysqli_num_rows($resultant) > 0){


        if($userpassword == $row["password"]){
            $_SESSION['check'] = true;
            $_SESSION["id"] = $row['id'];
            $_SESSION["email"] = $row["email"];
            $_SESSION["uname"] = $row['uname'];
            $_SESSION["lastname"] = $row["lastname"];

            $_SESSION["login"] = true;

            header('location:index.php');
        }
        else{
        echo "<script> alert('Wrong Password')</script>";
        }
    }
    else{
        echo "<script> alert('User not Registered')</script>";
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">



	<link rel="icon" type="image/png" href="images/icons/favicon.png" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">

	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">

	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="bg-gradient-primary">
    <div class="container col-lg-8">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form method="POST">
                                        <div class="form-group">
                                            <input type="text" name="uname" class="form-control form-control-user"
                                                placeholder="Enter Email Address" required>
                                        </div><br>
                                        <div class="form-group">
                                            <input type="password" name="upass" class="form-control form-control-user"
                                                 placeholder="Password" required>
                                        </div><br>
                                        <input value="Login" type="submit" name="loginbtn"  class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="signup.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
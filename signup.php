<?php
include('connection.php');
if(isset($_POST["submitbtn"])){
    $name = $_POST['Name'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $rep_password = $_POST['rep_pass'];
    $query = mysqli_query($con , "SELECT * FROM `tbl_user` WHERE uname = '$name' OR email = '$email'");
    if(mysqli_num_rows($query) > 0){
        echo "<script> alert('Username or Email has already been taken')</script>";
    }
    else{
        if($password == $rep_password){
            $queryinsert = "INSERT INTO `tbl_user` VALUES ('','$name','$lname','$email','$password')";
            mysqli_query($con , $queryinsert);
            
          header("location:login.php");

        }
        else{           
            echo" <script>alert('Password doesn't match!');</script>";
        }
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign up</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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

<body class="bg-gradient-primary ">
    <!-- <div class="card o-hidden border-0 shadow-lg my-5"> -->
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form method="post">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="First Name" name="Name" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" name="lastname"
                                                placeholder="Last Name" required>
                                        </div>
                                    </div><br>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" required name="email"
                                            placeholder="Email Address">
                                    </div><br>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" name="pass"
                                                required placeholder="Password">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                name="rep_pass" required placeholder="Repeat Password">
                                        </div>
                                    </div><br>
                                    <input type="submit" name="submitbtn"
                                        class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4"
                                        value="Register Account">
                                    <div class="text-center">
                                        <a class="small" href="login.php">Already have an account? Login!</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- </div> -->


</body>

</html>
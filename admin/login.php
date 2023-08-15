<?php 
 include("../connection.php");

 $select_query = "SELECT * FROM `tbl_admin`";
 $select_query_run = mysqli_query($con,$select_query);       
 $fetch = mysqli_fetch_array($select_query_run);
 
 if(isset($_POST['login_btn'])){
 $username = $_POST['u_name'];
 $password = $_POST['pass'];

   if(($fetch['username'] == $username) && ($fetch['password'] == $password)){
    $_SESSION['admin_loggedin'] = True; 
     header('location:index.php');
   }
   else{
     echo"<script>alert('username and password is not correct plz Try again')</script>";
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Log In | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</head>

<body>

    <div class="container w-50">
        <h1 class="mt-5 mb-5 text-center">Login</h1>

        <form action="" method="post">
            <div class="mb-3 ">
                <label for="">Admin User Name </label>
                <input type="text" name="u_name" class="form-control">
            </div>
            <div class="mb-3 ">
                <label>Admin Password</label>
                <input type="text" name="pass" class="form-control ">
                <div>
                    <div class="mb-3">
                        <input type="submit" value="Login" name="login_btn" class="btn btn-success mt-3">
                    </div>
        </form>



    </div>



</body>

</html>
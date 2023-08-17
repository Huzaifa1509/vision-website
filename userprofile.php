<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Profile</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.png" />

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">

	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body class="animsition">

	<?php include("nav.php");?>

	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/other.jpg);">
		<h2 class="l-text2 t-center">
		<?php echo $_SESSION["uname"].'&nbsp;'.$_SESSION["lastname"] ;?>
		</h2>

	</section>

    <div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class=" p-3 py-4">
                
                <div class="text-center">
                    <img src="images/<?php echo $_SESSION["upic"]; ?>" width="100" class="rounded-circle">
                </div>
                
                <div class="text-center mt-3">
                    <!-- <span class="bg-secondary p-1 px-4 rounded text-white">Pro</span> -->
                    <h4 class="mt-2 mb-2"><?php echo $_SESSION["uname"].'&nbsp;'.$_SESSION["lastname"] ;?></h4>
                    <span><?php echo $_SESSION["email"] ;?></span>
                    
                    <div class="px-4 mt-2 mb-3">
                        <p class="fonts">Welcome <?php echo $_SESSION["uname"].'&nbsp;'.$_SESSION["lastname"] ;?>, hope you are enjoying our services. You can also update your Profile and take further Actions.  </p>
                    
                    </div>
                    <div class="buttons">
                        
                        <a href="updateprofile.php?id=<?php echo $_SESSION["id"] ;?>"><button class="btn btn-primary px-4">Update</button></a>
                        <a href="logout.php" onclick="return confirm('Are you sure you want to logout?')"><button class="btn btn-danger px-4 ms-3">LOG OUT</button></a>
                    </div>
                    
                    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>
    
</div>



    
	<?php include("footer.php");?>

	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/9e29d9e7e1.js" crossorigin="anonymous"></script>
	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>

	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>

	<script src="js/main.js"></script>
	<script defer
		src="https://static.cloudflareinsights.com/beacon.min.js/v2cb3a2ab87c5498db5ce7e6608cf55231689030342039"
		integrity="sha512-DI3rPuZDcpH/mSGyN22erN5QFnhl760f50/te7FTIYxodEF8jJnSFnfnmG/c+osmIQemvUrnBtxnMpNdzvx1/g=="
		data-cf-beacon='{"rayId":"7ec613504d73896e","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
		crossorigin="anonymous"></script>
</body>

</html>
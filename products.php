<?php 
include("connection.php");
$get_id = $_GET['id'];
$select_query = "SELECT * FROM `tbl_products` WHERE `p_cat` = $get_id ";
$query_run = mysqli_query($con , $select_query);
if(isset($_POST['btn_cart'])){
    if(isset($_SESSION['check'])){
	 if(isset($_SESSION['products'])){
		$abc = array_column($_SESSION['products'],"productname");

	   if(in_array($_POST['p_name'] , $abc)){
		   echo "<script>alert('product already added')</script>";
	   }
	   else{
	   $count = count($_SESSION['products']);
	   $_SESSION['products'][$count] = array( "productname" => $_POST['p_name'],
	   "productprice" => $_POST['p_price'],
	   "productimage" => $_POST['p_image'],
	   "productdes" => $_POST['p_description'],
	   "productquantity" => 1  );
       

	   }
	}
	else{
	   $_SESSION['products'][0]  = array( "productname" => $_POST['p_name'],
					  "productprice" => $_POST['p_price'],
					  "productimage" => $_POST['p_image'],
					  "productdes" => $_POST['p_description'] );
				   }

                }
                else{
                    header('location:login.php');
                }
} 
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<title>Motherboard</title>
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

	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body class="animsition">

	<?php include("nav.php");?>

	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/m_board.jpg);">
		<h2 class="l-text2 t-center">
			Motherboard
		</h2>
		<p class="m-text13 t-center">
			Find out the most affordable board for your PC
		</p>
	</section>
	
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>
						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="#" class="s-text13 active1">
									All
								</a>
							</li>
							<li class="p-t-4">
								<a href="#" class="s-text13">
									Women
								</a>
							</li>
							<li class="p-t-4">
								<a href="#" class="s-text13">
									Men
								</a>
							</li>
							<li class="p-t-4">
								<a href="#" class="s-text13">
									Kids
								</a>
							</li>
							<li class="p-t-4">
								<a href="#" class="s-text13">
									Accesories
								</a>
							</li>
						</ul>


					</div>
				</div>
				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					
					<div class="flex p-b-35">
						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product"
								placeholder="Search Products...">
							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>

<!-- 
						<span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span> -->
					</div>
					<div class="row">
						<?php while($data = mysqli_fetch_array($query_run)){?>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="<?php echo 'admin/img/' . $data['p_img'];?>" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>
										<div class="block2-btn-addcart w-size1 trans-0-4">

											<form method="post">

												<input type="hidden" name="p_price"
													value="<?php echo $data['p_price'];?>">

												<input type="hidden" name="p_image"
													value="<?php echo 'admin/img/'. $data['p_img'];?>">

												<input type="hidden" name="p_description"
													value="<?php echo $data['p_description'];?>">

												<input type="hidden" name="p_name"
													value="<?php echo $data['p_name'];?>">

												<input type="hidden" name="p_brand"
													value="<?php echo $data['p_brand'];?>">

												<input type="hidden" name="p_cat" value="<?php echo $data['p_cat'];?>">

												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"
													name="btn_cart" type="submit">
													Add to Cart
												</button>
											</form>
										</div>
									</div>
								</div>
								<div class="block2-txt p-t-20">
									<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
										<?php echo $data['p_name'];?>
									</a>
									<span class="block2-price m-text6 p-r-5">
										<?php echo $data['p_price'];?>
									</span>
								</div>
							</div>
						</div>
						<?php }?>
					</div>

					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include("footer.html");?>

	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>

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

	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>

	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>



	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
		===========================================================*/
		var filterBar = document.getElementById('filter-bar');

		noUiSlider.create(filterBar, {
			start: [50, 200],
			connect: true,
			range: {
				'min': 50,
				'max': 200
			}
		});

		var skipValues = [
			document.getElementById('value-lower'),
			document.getElementById('value-upper')
		];

		filterBar.noUiSlider.on('update', function (values, handle) {
			skipValues[handle].innerHTML = Math.round(values[handle]);
		});
	</script>

	<script src="js/main.js"></script>
	<script defer
		src="https://static.cloudflareinsights.com/beacon.min.js/v2cb3a2ab87c5498db5ce7e6608cf55231689030342039"
		integrity="sha512-DI3rPuZDcpH/mSGyN22erN5QFnhl760f50/te7FTIYxodEF8jJnSFnfnmG/c+osmIQemvUrnBtxnMpNdzvx1/g=="
		data-cf-beacon='{"rayId":"7ec6134a2ea9896e","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
		crossorigin="anonymous"></script>

	
</body>

</html>
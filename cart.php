<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Cart</title>
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
			Cart
		</h2>
	</section>

	<section class="cart bgwhite p-t-70 p-b-100">
		<?php if(empty($_SESSION['products']))
                            { echo "<center><h3>Your Cart is Empty!</h3></center>";
                                }
                                else{?>
		<div class="container">

			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4 p-l-70">Quantity</th>
							<th class="column-5">Total</th>
							<th class="column-1"></th>
						</tr>
						<?php foreach($_SESSION['products'] as $key => $value){?>
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="<?php echo  $value['productimage']?>" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">
								<?php echo $value['productname'];?>
							</td>
							<td class="column-3">$
								<?php echo $value['productprice'];?>.00
							</td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>
									<input class="size8 m-text18 t-center num-product" type="number" name="num-product1"
										value="1">
									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-5">$36.00</td>
							<td class="column-5">
								<form action="delete_element.php" method="post">
									<input type="hidden" name="item_name" value="<?php echo $value['productname'];?>">
								<button class="btn btn-outline-danger" type="submit" ><i class="fa-solid fa-xmark fa-lg"></i>&nbsp; Delete from Cart</button>
								</form>


</td>

						</tr>
						<?php }?>

					</table>
				</div>
			</div>
			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<form action="deletecart.php" method="post">
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 p-1" type="submit"
								name="btn_deleteall">
								Empty Cart
							</button>
						</form>
					</div>
				</div>
				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<form action="" method="post">
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 p-1">
							Update Cart
						</button>
					</form>
				</div>
			</div>

			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24" id="checkout">
					Cart Totals
				</h5>

				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>
					<span class="m-text21 w-size20 w-full-sm">
						$39.00
					</span>
				</div>

				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>
					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							There are no shipping methods available. Please double check your address, or contact us if
							you need any help.
						</p>
						<span class="s-text19">
							Calculate Shipping
						</span>
						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
							<select class="selection-2" name="country">
								<option>Select a country...</option>
								<option>US</option>
								<option>UK</option>
								<option>Japan</option>
							</select>
						</div>
						<div class="size13 bo4 m-b-12">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state"
								placeholder="State /  country">
						</div>
						<div class="size13 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode"
								placeholder="Postcode / Zip">
						</div>
						<div class="size14 trans-0-4 m-b-10">

							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Update Totals
							</button>
						</div>
					</div>
				</div>

				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>
					<span class="m-text21 w-size20 w-full-sm">
						$39.00
					</span>
				</div>
				<div class="size15 trans-0-4">

					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Proceed to Checkout
					</button>
				</div>
			</div>
		</div>

		<?php }?>
	</section>

	<?php include("footer.html");?>

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
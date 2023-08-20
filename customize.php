<?php include("connection.php");?>
<!DOCTYPE html>

<html lang="en">

<head>
  <title>Customize</title>
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

<style>
  div.scroll {
    margin: 4px, 4px;
    padding: 4px;
    width: 100%;
    height: 400px;
    overflow-x: hidden;
    overflow-y: scroll;
    text-align: justify;
  }
</style>

<body class="animsition">

  <?php include("nav.php");?>

  <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/other.jpg);">
    <h2 class="l-text2 t-center">
      Built Your PC
    </h2>
  </section>

  <div class="container-fluid">
    <div class="row mt-5">
      <!-- product image -->
      <div class="col-sm-4 mt-5">
        <div class="text-center" data-aos="fade-right"><img src="images/azza-mp_main-min_18.jpg" alt="pics"
            height="100%" width="100%"></div>

      </div>
      <!-- product specs -->
      <div class="col-sm-5 mt-5">
        <div class="mt-5" data-aos="fade-up">
          <h1 class="title">Product Specifications</h1>
          <h5 class="title">Product Description</h5>
          <p class="text">With supporting text below as a natural lead-in to additional content. Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Eos quis culpa nam ex optio, aliquam cumque est harum, omnis cum nostrum
            deleniti minima facilis ab quam modi, reprehenderit fuga. Nihil.</p>
          <a href="#" class="btn btn-secondary">Add to Cart</a>
          <a href="#" class="btn btn-dark">Buy Now</a>

        </div>
      </div>
      <!-- products selected by user to add -->
      <div class="col-sm-3 comp mt-5">
        <h4 class="title text-center">Components</h4>
        <hr>
        <div class="scroll d-flex row text-center" data-aos="zoom-in">
          <div class="col-6 cb">
            <div class=" card-body text-center">
              <img src="images/azza-mp_main-min_18.jpg" alt="pics" height="100%" width="100%">
            </div>
          </div>
          <div class="col-6 cb">
            <div class=" card-body text-center"><img src="images/azza-mp_main-min_18.jpg" alt="pics" height="100%"
                width="100%">
            </div>
          </div>
          <div class="col-6 cb">
            <div class=" card-body text-center"><img src="images/azza-mp_main-min_18.jpg" alt="pics" height="100%"
                width="100%">
            </div>
          </div>
          <div class="col-6 cb">
            <div class=" card-body text-center"><img src="images/azza-mp_main-min_18.jpg" alt="pics" height="100%"
                width="100%">
            </div>
          </div>
          <div class="col-6 cb">
            <div class=" card-body text-center"><img src="images/azza-mp_main-min_18.jpg" alt="pics" height="100%"
                width="100%">
            </div>
          </div>
          <div class="col-6 cb">
            <div class=" card-body text-center"><img src="images/azza-mp_main-min_18.jpg" alt="pics" height="100%"
                width="100%">
            </div>
          </div>
          <div class="col-6 cb">
            <div class=" card-body text-center"><img src="images/azza-mp_main-min_18.jpg" alt="pics" height="100%"
                width="100%">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
  <div class="wrap-slick2">
    <div class="slick2">


      <div class="item-slick2 p-l-15 p-r-15">

        <div class="block2">
          <div class="block2-img wrap-pic-w of-hidden pos-relative">
            <img src="" alt="IMG-PRODUCT" style="height: 300px;">
            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>
              <div class="block2-btn-addcart w-size1 trans-0-4">
                <a href="product_detail.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="btn_cart"
                  type="submit">
                  Details
                </a>
              </div>
            </div>
          </div>
          <div class="block2-txt p-t-20">
            <a href="product_detail.php" class="block2-name dis-block s-text3 p-b-5">

            </a>
            <span class="block2-price m-text6 p-r-5">
              $56

            </span>
          </div>
        </div>
      </div>
      <div class="item-slick2 p-l-15 p-r-15">

        <div class="block2">
          <div class="block2-img wrap-pic-w of-hidden pos-relative">
            <img src="" alt="IMG-PRODUCT" style="height: 300px;">
            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>
              <div class="block2-btn-addcart w-size1 trans-0-4">
                <a href="product_detail.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="btn_cart"
                  type="submit">
                  Details
                </a>
              </div>
            </div>
          </div>
          <div class="block2-txt p-t-20">
            <a href="product_detail.php" class="block2-name dis-block s-text3 p-b-5">

            </a>
            <span class="block2-price m-text6 p-r-5">
              $56

            </span>
          </div>
        </div>
      </div>
      <div class="item-slick2 p-l-15 p-r-15">

        <div class="block2">
          <div class="block2-img wrap-pic-w of-hidden pos-relative">
            <img src="" alt="IMG-PRODUCT" style="height: 300px;">
            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>
              <div class="block2-btn-addcart w-size1 trans-0-4">
                <a href="product_detail.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="btn_cart"
                  type="submit">
                  Details
                </a>
              </div>
            </div>
          </div>
          <div class="block2-txt p-t-20">
            <a href="product_detail.php" class="block2-name dis-block s-text3 p-b-5">

            </a>
            <span class="block2-price m-text6 p-r-5">
              $56

            </span>
          </div>
        </div>
      </div>
      <div class="item-slick2 p-l-15 p-r-15">

        <div class="block2">
          <div class="block2-img wrap-pic-w of-hidden pos-relative">
            <img src="" alt="IMG-PRODUCT" style="height: 300px;">
            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>
              <div class="block2-btn-addcart w-size1 trans-0-4">
                <a href="product_detail.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="btn_cart"
                  type="submit">
                  Details
                </a>
              </div>
            </div>
          </div>
          <div class="block2-txt p-t-20">
            <a href="product_detail.php" class="block2-name dis-block s-text3 p-b-5">

            </a>
            <span class="block2-price m-text6 p-r-5">
              $56

            </span>
          </div>
        </div>
      </div>
      <div class="item-slick2 p-l-15 p-r-15">

        <div class="block2">
          <div class="block2-img wrap-pic-w of-hidden pos-relative">
            <img src="" alt="IMG-PRODUCT" style="height: 300px;">
            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>
              <div class="block2-btn-addcart w-size1 trans-0-4">
                <a href="product_detail.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="btn_cart"
                  type="submit">
                  Details
                </a>
              </div>
            </div>
          </div>
          <div class="block2-txt p-t-20">
            <a href="product_detail.php" class="block2-name dis-block s-text3 p-b-5">

            </a>
            <span class="block2-price m-text6 p-r-5">
              $56

            </span>
          </div>
        </div>
      </div>
      <div class="item-slick2 p-l-15 p-r-15">

        <div class="block2">
          <div class="block2-img wrap-pic-w of-hidden pos-relative">
            <img src="" alt="IMG-PRODUCT" style="height: 300px;">
            <div class="block2-overlay trans-0-4">
              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
              </a>
              <div class="block2-btn-addcart w-size1 trans-0-4">
                <a href="product_detail.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="btn_cart"
                  type="submit">
                  Details
                </a>
              </div>
            </div>
          </div>
          <div class="block2-txt p-t-20">
            <a href="product_detail.php" class="block2-name dis-block s-text3 p-b-5">

            </a>
            <span class="block2-price m-text6 p-r-5">
              $56

            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

  <?php include("footer.php");?>


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
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v2cb3a2ab87c5498db5ce7e6608cf55231689030342039"
    integrity="sha512-DI3rPuZDcpH/mSGyN22erN5QFnhl760f50/te7FTIYxodEF8jJnSFnfnmG/c+osmIQemvUrnBtxnMpNdzvx1/g=="
    data-cf-beacon='{"rayId":"7ec6134a2ea9896e","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
    crossorigin="anonymous"></script>
</body>

</html>
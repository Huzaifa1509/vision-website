<?php
include("..\connection.php");
if(!isset( $_SESSION['admin_loggedin'])){
  header('location:login.php');
}
$query = "SELECT * FROM `tbl_category` ";
$query_run = mysqli_query($con , $query);

$select_query = "SELECT * FROM `tbl_brand`";
$select_query_run = mysqli_query($con , $select_query);

if(isset($_POST['btn_submit'])){

  $product_name = $_POST['p_name'];
  $product_price = $_POST['p_price'];
  $product_description = $_POST['p_description'];
  $product_brand = $_POST['brand'];
  $product_category = $_POST['category'];
  $product_quantity = $_POST['p_qty'];
  $product_image = $_FILES['p_img']['name']. date('Y-m-d-H-s');
  $image_tmp = $_FILES['p_img']['tmp_name'];
  $img_path = './img/' .$product_image;
  move_uploaded_file($image_tmp,$img_path);

  $query_insert = "INSERT INTO `tbl_products`( `p_name`, `p_brand`, `p_price`, `p_img`, `p_description`,`p_cat`,`p_qty`) VALUES ('$product_name','$product_brand','$product_price','$product_image','$product_description','$product_category','$product_quantity')";
  $query_insert_run = mysqli_query($con , $query_insert);
  echo "<script>alert('component added !')</script>";

}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Finance</title>
  <link rel="icon" href="../images/icons/favicon.png" type="image/png">

  <link rel="stylesheet" href="css/bootstrap1.min.css" />

  <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

  <link rel="stylesheet" href="vendors/swiper_slider/css/swiper.min.css" />

  <link rel="stylesheet" href="vendors/select2/css/select2.min.css" />

  <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

  <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

  <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

  <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
  <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

  <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
  <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

  <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

  <link rel="stylesheet" href="vendors/morris/morris.css">

  <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

  <link rel="stylesheet" href="css/metisMenu.css">

  <link rel="stylesheet" href="css/style1.css" />
  <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>

<body class="crm_body_bg">



  <?php include("nav.html");?>


  <section class="main_content dashboard_part">
    <div class="main_content_iner ">
      <div class="container-fluid plr_30 body_white_bg pt_30">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="white_box mb_30">
              <div class="box_header ">
                <div class="main-title">
                  <h3 class="mb-0">Add Product</h3>
                </div>
              </div>
              <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label>Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="p_name">
                </div>
                <div class="mb-3">
                  <label>Brand</label>
                  <select class="form-select" id="inputGroupSelect01" name="brand">
                    <?php while($brand = mysqli_fetch_array($select_query_run)){?>
                    <option value="<?php echo $brand['brand_id'];?>">
                      <?php echo $brand['brand_name'];?>
                    </option>
                    <?php } ?>
                  </select>

                </div>
                <div class="mb-3">
                  <label>Price</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="p_price">
                </div>
                <div class="mb-3">
                  <label>Image</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="p_img">
                </div>
                <div class="mb-3">
                  <label>Description</label>
                  <textarea type="text" class="form-control" id="exampleInputEmail1" name="p_description"></textarea>
                </div>
                <div class="mb-3">
                  <label>Quantity</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="p_qty">
                </div>
                <div class="mb-3">
                  <label>Category</label>
                  <select class="form-select" id="inputGroupSelect01" name="category">
                    <?php while($data = mysqli_fetch_array($query_run)){?>
                    <option value="<?php echo $data['cat_id'];?>">
                      <?php echo $data['cat_name']; ?>
                    </option>
                    <?php } ?>
                  </select>
                </div>

                <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary">
              </form>

            </div>
          </div>

        </div>
      </div>

      <div class="footer_part">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-sm-12">
              <div class="footer_iner text-center">
                <p>2020 © Influence - Designed by<a href="#"> Dashboard</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>



  <script src="js/jquery1-3.4.1.min.js"></script>

  <script src="js/popper1.min.js"></script>

  <script src="js/bootstrap1.min.js"></script>

  <script src="js/metisMenu.js"></script>

  <script src="vendors/count_up/jquery.waypoints.min.js"></script>

  <script src="vendors/chartlist/Chart.min.js"></script>

  <script src="vendors/count_up/jquery.counterup.min.js"></script>

  <script src="vendors/swiper_slider/js/swiper.min.js"></script>

  <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

  <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

  <script src="vendors/gijgo/gijgo.min.js"></script>

  <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
  <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
  <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
  <script src="vendors/datatable/js/buttons.flash.min.js"></script>
  <script src="vendors/datatable/js/jszip.min.js"></script>
  <script src="vendors/datatable/js/pdfmake.min.js"></script>
  <script src="vendors/datatable/js/vfs_fonts.js"></script>
  <script src="vendors/datatable/js/buttons.html5.min.js"></script>
  <script src="vendors/datatable/js/buttons.print.min.js"></script>
  <script src="js/chart.min.js"></script>

  <script src="vendors/progressbar/jquery.barfiller.js"></script>

  <script src="vendors/tagsinput/tagsinput.js"></script>

  <script src="vendors/text_editor/summernote-bs4.js"></script>
  <script src="vendors/apex_chart/apexcharts.js"></script>

  <script src="js/custom.js"></script>


  <script src="js/active_chart.js"></script>
  <script src="vendors/apex_chart/radial_active.js"></script>
  <script src="vendors/apex_chart/stackbar.js"></script>
  <script src="vendors/apex_chart/area_chart.js"></script>
  <script src="vendors/apex_chart/bar_active_1.js"></script>
  <script src="vendors/chartjs/chartjs_active.js"></script>

</body>

</html>
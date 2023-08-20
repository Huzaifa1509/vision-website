<?php 
include('../connection.php');
if(!isset( $_SESSION['admin_loggedin'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Brand and categories</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</head>
<body class="crm_body_bg">
<?php include("nav.html");?>
<section class="main_content dashboard_part">
<div class="main_content_iner ">
<div class="container me-5 mt-5">
            <h2 class="text-center mb-4 pb-5 mt-5 pt-5 ">Brand and Catgeories</h2>

            <table class="table table-light table-bordered text-center">
                <tr>
                    <th>Categories</th>
                </tr>
            
<?php 

$select_query = "SELECT * FROM `tbl_category`";
$select_query_run = mysqli_query($con, $select_query);
while($catgeories = mysqli_fetch_array($select_query_run)){
?>
                <tr>
                    <td><?php echo $catgeories['cat_name']?></td>
                   

                </tr>
<?php } ?>

            </table>
<br><br>
            <table class="table table-light table-bordered text-center">
                <tr>
                    <th>Brands</th>
                </tr>
            
<?php 

$select_brand = "SELECT * FROM `tbl_brand`";
$select_brand_run = mysqli_query($con, $select_brand);
while($brands = mysqli_fetch_array($select_brand_run)){
?>
                <tr>
                    <td><?php echo $brands['brand_name']?></td>
                   

                </tr>
<?php } ?>

            </table>
            

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
<?php 
include('../connection.php');
if(!isset( $_SESSION['admin_loggedin'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Products Data</title>
    <link rel="icon" href="img/logo.png" type="image/png">

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
            <h2 class="text-center mb-4 fw-bold pt-2 mt-2 pb-3 ">Products</h2>

            <table class="table table-light table-bordered text-center">
                <tr>
                    <th>Product Name</th>
                    <th>Product Brand</th>
                    <th>Product Price</th>
                    <th>Product image </th>
                    <th>Product Description</th>
                    <th>Product Category</th>
                    <th>Product Quantity</th>
                    <th>Update and Delete</th>


                </tr>
            
<?php 

$select_team_query = "SELECT * FROM `tbl_products` INNER JOIN `tbl_brand` ON tbl_products.p_brand = tbl_brand.brand_id INNER JOIN `tbl_category` ON tbl_products.p_cat=tbl_category.cat_id";
$select_query_run = mysqli_query($con, $select_team_query);
while($products = mysqli_fetch_array($select_query_run)){
?>
                <tr>
                    <td><?php echo $products['p_name']?></td>
                    <td><?php echo $products['brand_name']?></td>
                    <td><?php echo $products['p_price']?></td>
                    <td><img src="./img/<?php echo $products['p_img']?>" style="width:100px;height:100px;"></td>
                    <td><?php echo $products['p_description']?></td>
                    <td><?php echo $products['cat_name']?></td>
                    <td><?php echo $products['p_qty']?></td>    
                    <td><a href="update_product.php?id=<?php echo $products['p_id']?>" class="btn btn-success">Update</a> 
                    <a href="delete_product.php?id=<?php echo $products['p_id']?>" class="btn btn-danger mt-2">Delete</a></td>    
                    

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
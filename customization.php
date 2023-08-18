<?php 
    include('connection.php');
    $select_categories = "SELECT * FROM `tbl_category`";
    $select_categories_run = mysqli_query($con,$select_categories);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customization</title>
    <link rel="stylesheet" href="./owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./owlcarousel/dist/assets/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
        div.products{
            background-color: #fff;
        width:430px;
        height: 300px;
        overflow-x: hidden;
        overflow-y: auto;
        text-align: center;
        padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
    <section >
            <!-- <h2 class="text-center pt-4">Customization</h2> -->
            <div class="container">
                    <div class="row">
                        <div class="col-lg-8 d-flex justify-content-center align-items-center"><img src="./image/laptop price.jpg" width="400px" alt=""></div>
                        <div class="col-lg-4">
                            <ul style="list-style-type: none;">
                                <li>
                                    <h4 class=" text-center pt-2 pb-2">Products</h4>
                                    <div class="products">
                                    <?php 
                                    if(isset($_GET['productid'])) {
                                    $productsincart = $_GET['productid'];
                                    $select_products_in_cart = "SELECT * FROM `tbl_products` WHERE `p_id` = '$productsincart'";
                                    $select_products_in_cart_run = mysqli_query($con,$select_products_in_cart);
                                    while($products_in_cart = mysqli_fetch_array($select_products_in_cart_run)){
                                    ?>
                                    <div class="row mb-2">
                                        <div class="col-lg-6"><img src="./admin/img/<?php echo $products_in_cart['p_img']?>" width="150px" alt=""></div>
                                        <div class="col-lg-2 d-flex align-items-center"><h5 class="text-dark ">Price:</h5></div>
                                        <div class="col-lg-4 d-flex align-items-center justify-content-start pt-2"><p><?php echo $products_in_cart['p_price']?>Rs.</p></div>
                                    </div>
                                   <?php }} else{?>
                                        <h5>_____</h5>
                                    <?php }?>
                                </div>   
                                </li>
                            </ul>
                        </div>

                    </div>
            </div>

    <section>
        <?php 
        while($categories = mysqli_fetch_array($select_categories_run)) {
        ?>
        <a href="customization.php?catid=<?php echo $categories['cat_id']?>" class="btn btn-sm btn-outline-dark "><?php echo $categories['cat_name']?></a>
       <?php }?>

        <div class="owl-carousel owl-theme mt-2" >
            <?php 
            if(isset($_GET['catid'])){
            $get_cat_id = $_GET['catid'];
            $select_products = "SELECT * FROM `tbl_products` WHERE `p_cat` = '$get_cat_id'";
            $select_products_run = mysqli_query($con,$select_products);
            while($products = mysqli_fetch_array($select_products_run)) {
            
            ?>
            <div class="item"><a href="customization.php?productid=<?php echo $products['p_id']?>"><img src="./admin/img/<?php echo $products['p_img']?>" width="200px" height="220px" alt=""></a></div>
            <?php }} else {
                $select_products_all = "SELECT * FROM `tbl_products`";
                $select_products_all_run = mysqli_query($con,$select_products_all);
                while($products_all = mysqli_fetch_array($select_products_all_run)) {
                ?>
                <div class="item"><a href="customization.php?productid=<?php echo $products_all['p_id']?>"><img src="./admin/img/<?php echo $products_all['p_img']?>" width="200px" height="220px" alt=""></a></div>
<?php }}?>
        </div>
    </section>
</section>
</div>

<script src="owlcarousel/docs/assets/vendors/jquery.min.js"></script>
<script src="owlcarousel/dist/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
</body>
</html>
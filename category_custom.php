<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
include('connection.php');


if(isset($_POST['catid'])){
   $cat_id = $_POST['catid'];
   $select_query = "SELECT * FROM `tbl_products` WHERE `p_cat` = '$cat_id'";
   $select_query_run = mysqli_query($con , $select_query); ?>
   
   <?php while ($row = mysqli_fetch_array($select_query_run)) { ?>

    <div class="col-lg-3" >


 
<div class="card" style="width: 18rem;">
<img src="<?php echo './admin/img/'.$row['p_img'];?>" class="card-img-top" alt="..." style="height: 200px;">
<div class="card-body">
<h6 class="card-title"><?php echo $row['p_name'];?></h6>
<p class="card-text">Rs.<?php echo $row['p_price'];?></p>


<button type="button" onclick="cat_function(<?php echo $row['p_id'];?>)" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 mt-5 w-100">ADD</button>
</div>
</div>



</div>






<?php  } ?>

 <?php  }?>


 
 
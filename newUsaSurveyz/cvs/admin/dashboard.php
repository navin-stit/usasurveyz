<?php
session_start();
  if(!isset($_SESSION['login_user'])){
      //echo "fdafdafd";
    header('Location:login.php');
  }else{
      include '../database.php'; 
      include 'layout-top.php' ;
?>

<?php $data = mysqli_query($conn,"SELECT * FROM products"); 

// print_r($data);exit;?>
<div class="container-fluid">
  <div class="row">
  <div class="col" style='text-align:center;background-color:#d6d6d6;color:#000;margin-top:1rem;letter-spacing:1px;font-family:roboto;padding:2px'> 
        <a href="logout.php" class="btn" style="float:right;margin-top:10px;margin-right:1rem;background-color:white;color:#333;letter-spacing:1px;">Logout</a>
       <h3>Products table</h3>
        
     </div>
  </div>
</div>
<div class='container-fluid' style="margin:1rem 2rem">
    <div class="row">
           
        <table class="table table-hover table-bordered" style="margin:2rem 0;table-layout:fixed;overflow-wrap:break-word;">
  <thead style="letter-spacing:1px;background-color:#daeaef!important;color:#333!important">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Images</th>
      <!-- <th scope="col">Product popularity image</th>-->
      <th scope="col">Description</th>
      <th scope="col">Product Price</th>
      <th scope="col">Regular Price</th>
      <th scope="col">Shipping</th>
      <th scope="col">URL 1</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php while($row = mysqli_fetch_array($data,MYSQLI_BOTH)) { ?>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['product_name'] ?></td>
      <td>
        <img src="../<?php echo $row['images'];?>" width="100px">
      </td>
    <!--  <td>
        <img src="../<?php echo $row['img_popular'];?>" alt="no image" width="100px">
      </td>-->
      <td><?php echo $row['description'] ?></td>
      <td><?php echo $row['product_price'] ?></td>
      <td><?php echo $row['regular_price'] ?></td>
      <td><?php echo $row['shipping'] ?></td>
      <td>
      <a target = '_blank' href="<?php echo $row['url_1'] ?>"><?php echo $row['url_1'] ?></a>  
      </td>
      
      <td>
        <a href="update_products.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm" id="update_products" style="letter-spacing:1px;font-family:roboto">Update</a>
      </td>
    </tr>
      <?php } ?>
    
   
  </tbody>
</table>
        </div>
    </div>


<?php  include 'layout-bottom.php' ;
  }

?>

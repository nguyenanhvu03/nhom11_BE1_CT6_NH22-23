<?php
				require "config.php";
				require "models/db.php";
				require "models/protypes.php";
				require "models/manufacture.php";
				require "models/products.php";

				$protypes = new Protypes;
				$getAllprotypes = $protypes->getAllprotypes();

				$manufacture= new Manufacture;
				$getAllManufacture = $manufacture->getAllManufacture();

				$product= new Product;
				$getAllProducts = $product->getAllProducts();

     
			
?>



<?php include('header.php') ?>
<h2 class="text-center"> Thống Kê Manufactures </h2>
<div class="container cs_container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:40%">Manufactures</th> 
   
    <th style="width:10%"> <a href="add_manufacture.php">Thêm Protypes</a> </th> 
   </tr> 
  </thead> 
  <tbody>
  
  <?php 
  $tongTien = 0;
  foreach($getAllManufacture as  $value) : 

?> 
  <tr> 
   
   <td data-th="Product"> 
    <div class="row"> 

  
    

     <div class="col-sm-10"> 
      <h4 class="nomargin"><?php echo $value['manu_name'] ?></h4> 
      
     </div> 
    </div> 
  
 
   <td class="actions" data-th="">

  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg></a>
    <button class="btn btn-info btn-sm">
    <a href="update_manufacture.php?manu_id=<?php echo $value['manu_id'] ?>"> <i class="fa fa-edit"></i></a>    
   
    </button> 
    <button class="btn btn-danger btn-sm">
    <a href="del_manufacture.php?manu_id=<?php echo $value['manu_id'] ?>"><i class="fa fa-trash-o"></i></a>    
    
    </button>
    
   </td> 
 
  </tr> 

  <?php  endforeach; ?>
  <tr> 
    
 
    
   
</tr> 

  </tfoot> 
 </table>
</div>
<style>
    .cs_container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;
}
</style>
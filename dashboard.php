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
<h2 class="text-center"> Thống Kê Sản Phẩm </h2>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:40%">Tên sản phẩm</th> 
    <th style="width:30%">Giá</th> 
    <th style="width:15%"> <a href="add_product.php">Thêm Sản Phẩm</a> </th> 
   </tr> 
  </thead> 
  <tbody>
  
  <?php 
  $tongTien = 0;
  foreach($getAllProducts as  $value) : 

?> 
  <tr> 
   
   <td data-th="Product"> 
    <div class="row"> 

  
     <div class="col-sm-2 hidden-xs"><img src="/img/<?php echo $value['image'] ?>" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 

     <div class="col-sm-10"> 
      <h4 class="nomargin"><?php echo $value['name'] ?></h4> 
      <p><?php echo $value['description'] ?></p> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price"><?php echo $value['price'] ?></td> 
   </td> 
 
   <td class="actions" data-th="">

  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg></a>
    <button class="btn btn-info btn-sm">
    <a href="update_product.php?id=<?php echo $value['id'] ?>"> <i class="fa fa-edit"></i></a>    
   
    </button> 
    <button class="btn btn-danger btn-sm">
    <a href="del_product.php?id=<?php echo $value['id'] ?>"><i class="fa fa-trash-o"></i></a>    
    
    </button>
    <a class="btn btn-primary btn-sm" href="product.php?id=<?php echo $value['id'] ?>">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                        
   </td> 
 
  </tr> 

  <?php  endforeach; ?>
  <tr> 
    
 
    
   
</tr> 

  </tfoot> 
 </table>
</div>
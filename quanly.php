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

				$getAllProductsLimit1 = $product->getAllProductsLimit(6, 0);
				$getAllProductsLimit2 = $product->getAllProductsLimit(6, 6);
				$getAllProductsLimit3 = $product->getAllProductsLimit(6, 12);
			
?>
<?php include('header.php') ?>
<div class="container">
    <div class="row">
        <div class="col-sm-2">
            
        </div>
        <div class="col-sm-8">
            <h2 class="title_quanly">CHÀO BẠN ĐẾN VỚI TRANG DASHBOARD</h2>
            <P style="text-align:center">MỜI BẠN CHỌN CHỨC NĂNG QUẢN LÝ HỆ THÔNG TRANG WEB</P>
        </div>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
            <div class="dieu_khien">
            <button type="submit"><a href="dashboard.php"> QUẢN LÝ PRODUCTS </a></button> <br>
            <button type="submit"><a href="dashboard_protypes.php"> QUẢN LÝ PROTYPES </a></button> <br>
            <button type="submit"><a href="dashboard_manufacture.php"> QUẢN LÝ MANUFACTURE </a></button>

            </div>
            
           
        </div>
        <div class="col-sm-3">

        </div>

    </div>
</div>


<?php include('footer.php') ?>

<style>
    button[type=submit]{
        width: 70%;
    height: 45px;
    border: 1px solid;
    border-radius: 8px;
    margin : 10px;
    background : #2196f3b8;

    }
</style>
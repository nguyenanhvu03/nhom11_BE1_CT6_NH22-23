<?php session_start();
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

<?php
include('header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="center_row col-sm-5">
            <h6>Cảm ơn Quý khách hàng đã chọn mua hàng tại Electro. Trong 15 phút, Electro. sẽ SMS hoặc gọi để xác nhận đơn hàng.</h6>
            <h4 class ="title_hang">ĐẶT HÀNG THÀNH CÔNG</h4>
           
            <p><?php echo $_SESSION['name'] ?></p>
            <p>Số Điện Thoại: <?php echo $_SESSION['tel'] ?></p>
            <p>Email: <?php echo $_SESSION['email'] ?></p>
           
            <div class="sp_show">
                <h4>Sản Phảm Đã Đặt</h4>
                <div class="order-summary">
											
												<?php
												$tongTien = 0;
												
											foreach($_SESSION['cart'] as $key => $value):
												foreach($getAllProducts as $sp):
													
												if($sp['id'] == $key):
													

												?>
												<div class="order-products">
													<div class="order-col">
														
																<div><?php echo $value['soluong'] ?>x <?php echo $sp['name'] ?> </div>
																<div><?php echo number_format($sp['price'] ) ?> VND</div>
															<?php
															$thanhtien = $sp['price'] * $value['soluong'];
															$tongTien += $thanhtien;
															
															?>
										
													</div>
												</div>
										
												<?php endif; endforeach; endforeach; ?>
												
												
											
												<div class="order-col">
													
													<div><strong>TOTAL</strong></div>
													<div><strong class="order-total"><?php echo number_format($tongTien)  ?></strong></div>
												</div>
											
							</div>
                
                


            </div>
            <div class="button_sp">
           
            <button class="ktra" type="submit"> <a href="checkout.php">Kiểm Tra Đơn Hàng</a> </button>
           
            <button  class="muahang" type="submit"> <a href="index.php">Tiếp Tục Mua Hàng</a> </button>
            </div>
            
        </div>
        

    </div>
</div>

<?php session_start();
if(isset($_GET['sluong']) && isset($_GET['id']) )
{
    $sl = $_GET['sluong'];
    $id = $_GET['id'];

    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id] = array(
            'soluong' => $sl
        );
    }
    else{
        $_SESSION['cart'][$id]['soluong']+=$sl;
    }
    


}

header('location:addtocart.php');


   
  
   
  








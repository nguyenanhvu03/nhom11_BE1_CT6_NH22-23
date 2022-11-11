<?php session_start();
require "config.php";
require "models/db.php";
require "models/admin.php";
$admin= new Admin();

$errors = [];
if(!isset($_SESSION['solansai'])){
  $_SESSION['solansai'] = 5;
}


$user = $pwd = " ";
if(isset($_POST['user']) && isset($_POST['pwd']))
{
  $user = $_POST['user'];
 
  $pwd = $_POST['pwd'];

  $pwd = md5($pwd);
  
}

$getAdmin = $admin->getAdmin($user , $pwd);

if(is_array($getAdmin) && count($getAdmin) > 0 )
{
  $_SESSION['solansai'] = 5;
  $_SESSION['user'] = $getAdmin[0];
  header('index.php');
}
else
{
  $errors[] = 'Sai tài khoản hoặc mật khẩu';
  $_SESSION['solansai']--;
  $errors[] = "Bạn còn " .  $_SESSION['solansai'] . " lần đăng nhập";
  
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <?php 
        if($_SESSION['solansai'] > 0):
        ?>
        <form method="post">
          <!-- Email input -->
          <div class="form-outline mb-4 mt-5">

          <label class="form-label" for="form3Example3">Username</label>
            <input name="user" type="text" id="form3Example3" class="form-control form-control-lg"
               />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4">Password</label>
            <input name="pwd" type="password" id="form3Example4" class="form-control form-control-lg"
               />
           
          </div>
          <?php
          foreach($errors as $value){
            ?>
            <p>
            <span class="badge bg-danger"><?= $value ?></span>
            </p>
            <?php
          }
          
          ?>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
          </div>

        </form>
        <?php else:?>
          
          <?php
          
          $t1 = strtotime(date("h:i:sa"));
          

          if(!isset($_SESSION['locktime']))
          {
            $t2 = strtotime(date("h:i:sa", strtotime("+1 minutes")));
            $_SESSION['locktime'] = $t2;
          }
          
          ?>
         
        <h3>Bạn đã hết lượt đăng nhập rồi </h3>
        <p>Đăng nhập lại sau <?php  echo ($_SESSION['locktime'] - $t1) ?> s</p>
        <?php if(($_SESSION['locktime'] - $t1) <= 0)
        {
          unset($_SESSION['locktime']);
          unset($_SESSION['solansai']);

          echo "<script>";
          echo "location.reload()";
          echo "</script>";

        } ?>
        <?php  endif; ?>
      </div>
    </div>
  </div>

</section>
    
</body>
</html>
<?php session_start();
if(isset($_GET['name'])  )
{

$_SESSION['name'] = $_GET['name'];
$_SESSION['email'] = $_GET['email'];
$_SESSION['tel'] = $_GET['tel'];
header('location:contact.php');
}



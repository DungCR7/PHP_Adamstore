<?php 
// Hàm khởi tạo session
ob_start();
session_start();
define("ISLOGGED",true);
include_once "../config/connectDB.php";
if(isset($_SESSION['user_login'])) {
    include_once "admin.php";
}else{
    include_once "login.php";
}

ob_end_flush();
?>
<?php 
    session_start();
    if($_SESSION['user_login']){
        define("ISLOGGED",true);
        include_once "../../../config/connectDB.php";
        if($_GET['order_id']){
            $order_id=$_GET['order_id'];
            $status=$_GET['status'];
            $sql_update= "UPDATE `order` SET `status`=1 WHERE order_id=$order_id";
            mysqli_query($conn,$sql_update);
            header("location: /adamstore/admin/index.php?page=order");
        }

    }

?>
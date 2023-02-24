<?php 
    session_start();
    if($_SESSION['user_login']){
        define("ISLOGGED",true);
        include_once "../../../config/connectDB.php";
        if($_GET['order_id']){
            $order_id=$_GET['order_id'];
            $sql_delete= "DELETE from 'order' where order_id=$order_id";
            $sql_delete= "DELETE from orderdetail where order_id=$order_id";
            mysqli_query($conn,$sql_delete);
        
            header("location: /adamstore/admin/index.php?page=order");
        }

    }

?>
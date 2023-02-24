<?php 
    session_start();
    if(isset($_SESSION['user_login'])){
        define("ISLOGGED",true);
        include_once "../../../config/connectDB.php";
        if(isset($_GET['customer_id'])){
            $customer_id = $_GET['customer_id'];
            $sql_delete = "DELETE FROM customer WHERE customer_id=$customer_id";
            mysqli_query($conn,$sql_delete);
            header("location: /adamstore/admin/index.php?page=customer");
        }
    }

?>
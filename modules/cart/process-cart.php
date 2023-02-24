<?php

session_start();
$action = $_GET['action'];
switch ($action) {
    case 'add':
        if (isset($_GET['prd_id'])) {
            $prd_id = $_GET['prd_id'];
        }
        if (isset($_SESSION['cart'][$prd_id])) {
            $_SESSION['cart'][$prd_id]++;
        } else {
            $_SESSION['cart'][$prd_id] = 1;
        }
        header("location: ../../index.php?page=cart");
        break;

    case 'del':
        if (isset($_SESSION['cart'][$_GET['prd_id']])) {
            unset($_SESSION['cart'][$_GET['prd_id']]);
        }
        if (empty($_SESSION['cart'])) {
            unset($_SESSION['cart']);
        }
        header("location: ../../index.php?page=cart");
        break;
    case 'submit':
       
        if(isset($_POST['update_cart'])) {
            foreach ($_POST['quantity'] as $prd_id => $qty) {
                $_SESSION['cart'][$prd_id] = $qty;
                if ($qty == 0) {
                    unset($_SESSION['cart'][$prd_id]);
                }
            }
            header("location: ../../index.php?page=cart");
        }
        if(isset($_POST['insert_cart'])) {
            include_once "../../config/connectDB.php";
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            //thêm vào bảng order
            $user_name = $_POST['user_name'];
            $user_phone = $_POST['user_phone'];
            $user_mail = $_POST['user_mail'];
            $address=$_POST['address'];
            $amount = $_POST['total_price'];
            $status = 0;
            $created = date("Y-m-d H:i:s");

            $sqlOrder = "INSERT INTO `order`( `user_name`, `user_mail`, `user_phone`,`address`, `status`, `amount`, `created`) 
            VALUES ('$user_name','$user_mail','$user_phone','$address',$status,$amount,'$created') ";
            mysqli_query($conn ,$sqlOrder );    
            $order_id = mysqli_insert_id($conn);
            $sqlDeatail = "INSERT INTO orderdetail(order_id, prd_id,qty,price ) VALUES";
            foreach($_SESSION['cart'] as $prd_id => $qty){
                $price = $_POST['prd_price'][$prd_id];
                $sqlDeatail .="($order_id,$prd_id,$qty, $price),";

            }
            $sqlDeatail = rtrim($sqlDeatail,",");
            mysqli_query($conn, $sqlDeatail);
            unset($_session['cart']);
            header("location: ../../index.php?page=success");

        }
        break;
      
}
?>

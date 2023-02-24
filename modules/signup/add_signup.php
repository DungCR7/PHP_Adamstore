<?php 
if(isset($_POST['sbm'])){
    if(empty($_POST['customer_name'])){
        echo "Không thấy tài khoản";
    }else{
        $customer_name = $_POST['customer_name'];
    }
    $customer_mail = $_POST['customer_mail'];
    $customer_pass = $_POST['customer_pass'];
    $customer_address = $_POST['customer_address'];
    $customer_phone = $_POST['customer_phone'];
    include_once "../../config/connectDB.php";
    $sqlInsert = "INSERT INTO customer (customer_name, customer_mail, customer_pass, customer_address, customer_phone) VALUES
    ('$customer_name', '$customer_mail', '$customer_pass', '$customer_address', '$customer_phone')";
    if(mysqli_query($conn, $sqlInsert)) {
        // echo "<script>alert('Thêm sản phẩm không thành công');</script>";
        header('location: ../../index.php?page=account');
    }else{
        echo "<script>alert('Thêm sản phẩm không thành công');</script>";
        // header("location: index.php?page=signup");
    }
    
}
?>
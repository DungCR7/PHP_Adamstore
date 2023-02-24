<?php
if(isset($_POST['sbm'])){
    if(empty($_POST['prd_name'])){
        echo "Bạn chưa nhập tên sản phẩm!";
    }else{
        $prd_name = $_POST['prd_name'];
    }
    $prd_price = $_POST['prd_price'];
    $prdType_id = $_POST['prdType_id'];
    $prd_nameId = $_POST['prd_nameId'];
    $cat_id = $_POST['cat_id'];
    $prd_status = $_POST['prd_status'];
    $prd_details = $_POST['prd_details'];

    if(isset($_FILES['prd_image'])) {
        if($_FILES['prd_image']['error'] > 0){
            // biểu thị ảnh ko có sản phẩm
            // $prd_image = 'no_img.png';
            echo "File bị lỗi !!";
            die();
        } else {
            // upload file phải đưa ra một hàm riêng và đầy đủ hơn
            $tmp_name = $_FILES['prd_image']['tmp_name'];
            $target_file = "../../images/" .$_FILES['prd_image']['name'];
            move_uploaded_file($tmp_name,$target_file);
            $prd_image = $_FILES['prd_image']['name'];
        }
    }
    include_once "../../../config/connectDB.php";
    $sqlInsert = "INSERT INTO product (cat_id, prdType_id, prd_nameId, prd_name, prd_image, prd_price, prd_status, prd_details) VALUES
    ($cat_id, '$prdType_id', '$prd_nameId', '$prd_name', '$prd_image', '$prd_price', '$prd_status', '$prd_details')";
    // var_dump(mysqli_query($conn, $sqlInsert));
    // die;
    if(mysqli_query($conn, $sqlInsert)) {
        // echo 'a';
        // echo "<script>alert('Thêm sản phẩm thành công');</script>";
        header('location: ../../index.php?page=product');
        // header("location: index.php");
    }else{
        // echo 'b';
        
        echo "<script>alert('Thêm sản phẩm không thành công');</script>";
    }
}
?>
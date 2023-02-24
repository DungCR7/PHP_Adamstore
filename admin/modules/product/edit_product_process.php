<?php 
include_once "../../../config/connectDB.php";
$sqlCategory = "SELECT * FROM category";
$resultCategory = mysqli_query($conn, $sqlCategory);

$sqlProductType = "SELECT * FROM productType";
$resultProductType = mysqli_query($conn, $sqlProductType);
if(isset($_GET['prd_id'])){
    $prd_id =$_GET['prd_id'];
    $sqlProd = "SELECT * FROM product WHERE prd_id = $prd_id";
    $resultProd = mysqli_query($conn ,$sqlProd);
    $prodEdit = mysqli_fetch_assoc($resultProd);

    if(isset($_POST['sbm'])){
        if(empty($_POST['prd_name'])) {
            echo "Bạn chưa nhập tên sản phẩm";
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
            if($_FILES['prd_image']['name']){
                if($_FILES['prd_image']['error'] > 0) {
                $prd_image = 'no-img.png';
            }else{
                $tmp_name=$_FILES['prd_image']['tmp_name'];
                $target_file ="images/".$_FILES['prd_image']['name'];
                move_uploaded_file($tmp_name,$target_file);
                $prd_image = $_FILES['prd_image']['name'];
            }
        }else{
            $prd_image = $prodEdit['prd_image'];

    }
            
            }else{
                $prd_image = $prodEdit['prd_image'];
  
        }
        
        $sqlUpdate = "UPDATE product SET
            cat_id = $cat_id,
            prdType_id = $prdType_id,
            prd_nameId = '$prd_nameId' ,
            prd_name = '$prd_name',
            prd_image = '$prd_image',
            prd_price = $prd_price,
            prd_status = $prd_status,
            prd_details = '$prd_details'
            WHERE prd_id = $prd_id
             ";

             if(mysqli_query($conn, $sqlUpdate)) {
                header('location: ../../index.php?page=product'); // 
             }else{
                 echo  "<script>alert('cập nhập sản phẩm không thành công'); </script>";
                }
    }
}
else{
    header(' location: index.php?page=product');}

?>
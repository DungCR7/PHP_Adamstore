<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/adamstore/css/category.css">
    <title>Document</title>
</head>
<body>
<?php 
    if(isset($_GET['cat_id'])){
        $cat_id = $_GET['cat_id'];
        // lấy thông tin danh mục
        $sqlCate = "SELECT * FROM category WHERE cat_id = $cat_id ";
        $resultCate = mysqli_query($conn, $sqlCate);
        $cate = mysqli_fetch_assoc($resultCate);
        // lấy thông tin sản phẩm theo danh mục
        $sqlByCatId = "SELECT * FROM product WHERE cat_id = $cat_id";
        $resultByCatId = mysqli_query($conn, $sqlByCatId);
        $count = mysqli_num_rows($resultByCatId);
        // echo $cate;
        // die;
    }else{
        header("location: index.php");
    }

    $rowPerPage = 6;
    // số bản ghi lấy được
    $totalRecords = mysqli_num_rows($resultByCatId);
    $totalPage =  ceil($totalRecords / $rowPerPage); // tổng số trang

    // lấy trang hiện tại từ đường dẫn
    if(isset($_GET['current_page'])){
        $current_page = $_GET['current_page'];
    }else{
        $current_page = 1;
    }

    // bắt lỗi
    if($current_page < 1){
        $current_page = 1;
    }
    if($current_page > $totalPage){
        $current_page = $totalPage;
    }
    $start = ($current_page - 1)*$rowPerPage;
    $sql_pagination = "SELECT * FROM product INNER JOIN category ON product.cat_id = category.cat_id WHERE category.cat_id = $cat_id ORDER BY prd_id  DESC LIMIT $start,$rowPerPage";
    // echo $sql_pagination;
    // die;
    $resultPagination = mysqli_query($conn, $sql_pagination);
?>  
                <!--	List Product	-->
                <div class = "body-introduction">
                    <div class="products">
                        <h3><?php echo $cate['cat_name']; ?> (now available <?php echo $count; ?> products)</h3>
                        <div class="product-list row">
                            <?php 
                                if($count > 0){
                                    while($prd = mysqli_fetch_assoc($resultPagination)){
                                
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 mx-product"> 
                                <div class="product-item card text-center ">
                                    <a class = "img" href="index.php?page=product&prd_id=<?php echo $prd['prd_id']; ?>">
                                        <img src="admin/images/<?php echo $prd['prd_image']; ?>">
                                        <img src="admin/images/<?php echo $prd['prd_hover']; ?>">
                                    </a>
                                    <h4 class = "prd-name" ><a style = "text-decoration: none; font-size: 20px; color: black;" href="index.php?page=product&prd_id=<?php echo $prd['prd_id']; ?>"> <?php echo $prd['prd_name']; ?> </a></h4>
                                    <p><span style = "color: red; font-weight: 600;"><?php echo number_format($prd['prd_price']),"" ?>đ</span></p>
                                    
                                    
                                </div>
                            </div>
                    
                        
                        <?php 
                            }
                        }
                        ?>
                    </div>
                    <div class="panel-footer">
                        <nav aria-label="Page navigation example">
                        <ul class="pagination">
                                <!-- nút chuyển về trang tước -->
                                <?php
                                if ($current_page > 1) { ?>
                                    <li class="page-item"><a class="page-link" href="index.php?page=category&cat_id=<?php echo $cat_id ?>&current_page=<?php echo $current_page - 1; ?>">&laquo;</a></li>
                                <?php } else {
                                ?>
                                    <li class="page-item disabled"><a class="page-link" href="">&laquo;</a></li>
                                <?php } ?>
                                <!-- kết thúc  -->
                                <!-- phân trang ở giữa -->
                                <?php
                                for ($i = 1; $i <= $totalPage; $i++) {
                                    if ($i > $current_page - 3 && $i < $current_page + 3) {
                                        if ($i == $current_page) {
                                ?>
                                            <li class="page-item active"><a class="page-link" href="index.php?page=category&cat_id=<?php echo $cat_id ?>&current_page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                        <?php } else { ?>
                                            <li class="page-item"><a class="page-link" href="index.php?page=category&cat_id=<?php echo $cat_id ?>&current_page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php
                                        }
                                    }
                                }
                                ?>
                                <!-- nút chuyển sang trang sau -->
                                <?php
                                if ($current_page < $totalPage) { ?>
                                    <li class="page-item"><a class="page-link" href="index.php?page=category&cat_id=<?php echo $cat_id ?>&current_page=<?php echo $current_page + 1; ?>">&raquo;</a></li>
                                <?php } else {
                                ?>
                                    <li class="page-item disabled"><a class="page-link" href="">&raquo;</a></li>
                                <?php } ?>
                                <!-- kết thúc -->
                            </ul>

                        </nav>
                    </div>
                    </div>
                    <!--	End List Product	-->
                    
                    
                </div>
    </body>
</html> 
            
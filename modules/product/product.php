<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/adamstore/css/product.css">
</head>
<body>
<?php
    
    
    if(isset($_GET['prd_id'])){
        $prd_id = $_GET['prd_id'];
        // $sql = "SELECT * FROM product WHERE prd_id=$prd_id";
        $sql = "SELECT * FROM product INNER JOIN productType ON product.prdType_id = productType.prdType_id WHERE prd_id=$prd_id";
        $result = mysqli_query($conn, $sql);
        $product = mysqli_fetch_assoc($result);
    }else{
        header("location: index.php");
    }
    // $sql = "SELECT * FROM product WHERE prd_id=$prd_id";
              $result = mysqli_query($conn, $sql );
                if(isset($_POST['sbm'])) {
     
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            //thêm vào bảng order
            if(isset($_GET['prd_id'])){
                $prd_id = $_GET['prd_id'];
            }
            $comm_name = $_POST['comm_name'];
            $comm_mail = $_POST['comm_mail'];
            $comm_details=$_POST['comm_details'];
            $comm_date = date("Y-m-d H:i:s");
            $sqlComm = "INSERT INTO `comment`( `prd_id`, `comm_name`, `comm_mail`,`comm_date`, `comm_details`) VALUES ($prd_id,'$comm_name','$comm_mail','$comm_date','$comm_details') ";
              
            
           if(mysqli_query($conn, $sqlComm)){
            header("location: index.php?page=product&prd_id=$prd_id");}

        } 

?>
                
                <!--	List Product	-->
                <div class = "body-introduction">
                    <div id="product">
                        <div id="product-head" class="row">
                            <div id="product-img" class="col-lg-6 col-md-6 col-sm-12">
                                <img src="admin/images/<?php echo $product['prd_image'];?>">
                                <img src="admin/images/<?php echo $product['prd_hover'];?>">
                            </div>
                            <div id="product-details" class="col-lg-6 col-md-6 col-sm-12">
                                <h1><?php echo $product['prd_name'];?></h1>
                                <ul>
                                    <li id="price-number"><?php echo number_format($product['prd_price'],0,",",".");?>đ</li>
                                    <li><span>Type:</span>
                                        <?php 
                                            echo $product['prdType_name'];
                                        ?>
                                    </li>
                                    <li><span>Product code:</span> <?php echo $product['prd_nameId'];?></li>
                                    <li id="status">
                                        <?php
                                            if($product['prd_status'] == 1){
                                                echo '<span style= "color: green;">Còn hàng</span>';
                                            }else{
                                                echo '<span style= "color: red;">Hết hàng</span>';
                                            }
                                        ?>
                                    </li>
                                </ul>
                                <div id="add-cart"><a href="modules/cart/process-cart.php?action=add&prd_id=<?php echo $product['prd_id']; ?>">Mua ngay</a></div>
                            </div>
                        </div>
                        <div id="product-body" class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h3>Rating about <?php echo $product['prd_name'];?></h3>
                                <?php echo $product['prd_details'];?>
                            </div>
                        </div>
                        
                        <!--	Comment	-->
                        <div id="comment" class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h3>Product Comments</h3>
                                <form method="post">
                                    <div class="form-group">
                                        <label>Name:</label>
                                        <input name="comm_name" required type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input name="comm_mail" required type="email" class="form-control" id="pwd">
                                    </div>
                                    <div class="form-group">
                                        <label>Content:</label>
                                        <textarea name="comm_details" required rows="8" class="form-control"></textarea>     
                                    </div>
                                    <button type="submit" name="sbm" class="btn btn-primary">Send</button>
                                </form> 
                            </div>
                        </div>
                        <!--	End Comment	-->  
                        
                        <!--	Comments List	-->
                        <?php
                        if(isset($_GET['prd_id'])){
                            $prd_id = $_GET['prd_id'];
                            $sqlComment = "SELECT * FROM comment WHERE prd_id=$prd_id";
                            $resultComment = mysqli_query($conn, $sqlComment);

                        }
                        ?>
                        <div id="comments-list" class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <?php 
                                    if(mysqli_num_rows($resultComment) > 0){
                                        while($productComment = mysqli_fetch_array($resultComment)){
                                ?>
                                <div class="comment-item">
                                    <ul>
                                        <li><b><?php echo $productComment['comm_name'];?></b></li>
                                        <li><?php echo date("d-m-Y H:i:s", strtotime($productComment['comm_date']));?></li>
                                        <li>
                                            <p><?php echo $productComment['comm_details'];?></p>
                                        </li>
                                    </ul>
                                </div>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <!--	End Comments List	-->
                    </div>
                </div>
                <!--	End Product	--> 
                <div id="pagination">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Trang trước</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Trang sau</a></li>
                    </ul> 
                </div> 
</body>
</html>

              
           
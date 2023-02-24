<?php
// hiển thị các danh mục
$sqlCategory = "SELECT * FROM category";
$resultCategory = mysqli_query($conn, $sqlCategory);

$sqlProductType = "SELECT * FROM productType";
$resultProductType = mysqli_query($conn, $sqlProductType);
// lấy các thông tin của sản phẩm cần sửa
if(isset($_GET['prd_id'])){
    $prd_id =$_GET['prd_id'];
    $sqlProd = "SELECT * FROM product WHERE prd_id = $prd_id";
    $resultProd = mysqli_query($conn ,$sqlProd);
    $prodEdit = mysqli_fetch_assoc($resultProd);

    if(isset($_POST['sbm'])){
        if(empty($_POST['prd_name'])) {
            echo "Bạn chưa nhập tên sản phẩm";
        } else {
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
                $target_file = "images/".$_FILES['prd_image']['name'];
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
                header("location: index.php?page=product");
             }else{
                 echo  "<script>alert('cập nhập sản phẩm không thành công'); </script>";
                }
    }
}
else{
    header(' location: index.php?page=product');}
// include_once "edit_product_process.php";


?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Product Management</a></li>
				<li class="active"><?php echo $prodEdit['prd_name']; ?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Product: <?php echo $prodEdit['prd_name']; ?></h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <label>Product's name</label>
                                    <input type="text" name="prd_name" required class="form-control" value=" <?php echo $prodEdit['prd_name']; ?>"  placeholder="">
                                </div>
                                                                
                                <div class="form-group">
                                    <label>Product price</label>
                                    <input  name="prd_price" required value="<?php echo $prodEdit['prd_price']; ?> " class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Product code</label>
                                    <input type="text" name="prd_nameId" required value=" <?php echo $prodEdit['prd_nameId']; ?>" class="form-control">
                                </div>    
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image product</label>
                                    <input type="file" name="prd_image"  onchange="preview();">
                                    <br>
                                    <div>
                                        <img id="prd_image" width="150px" height="200px" src="images/<?php echo $prodEdit['prd_image'] ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Product Type</label>
                                    <select name="prdType_id" class="form-control">
                                    <option value=""0> ---Option---</option>
                                        <?php if(mysqli_num_rows($resultProductType)){ 
                                            while($prdType = mysqli_fetch_assoc($resultProductType)){ ?>
                                        <option <?php if($prodEdit['prdType_id']==$prdType['prdType_id']) echo 'selected'; ?> value=<?php echo $prdType['prdType_id'] ?>> <?php echo $prdType['prdType_name'] ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="cat_id" class="form-control">
                                    <option value=""0> ---Option---</option>
                                        <?php if(mysqli_num_rows($resultCategory)){ 
                                            while($cate = mysqli_fetch_assoc($resultCategory)){ ?>
                                        <option <?php if($prodEdit['cat_id']==$cate['cat_id']) echo 'selected'; ?> value=<?php echo $cate['cat_id'] ?>> <?php echo $cate['cat_name'] ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="prd_status" class="form-control">
                                        <option <?php if($prodEdit['prd_status']==1) echo 'selected'; ?> selected value=1>Stocking</option>
                                        <option <?php if($prodEdit['prd_status']==2) echo 'selected'; ?> selected value=2>Out of stock</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                        <label>Product Description</label>
                                        <textarea name="prd_details" class="form-control" rows="3"><?php echo $prodEdit['prd_details'] ?></textarea>
                                    </div>
                                <button type="submit" name="sbm" class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-default">Refresh</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
		
	</div>	<!--/.main-->	

    <script>
    function preview(){
        prd_image.src=URL.createObjectURL(event.target.files[0]);
    }
</script>
<?php
// hiển thị các danh mục
$sqlCategory = "SELECT * FROM category";
$resultCategory = mysqli_query($conn, $sqlCategory);
// lấy các thông tin của sản phẩm cần sửa
if(isset($_GET['cat_id'])){
    $cat_id =$_GET['cat_id'];
    $sqlCat = "SELECT * FROM category WHERE cat_id = $cat_id";
    $resultCat = mysqli_query($conn ,$sqlCat);
    $catEdit = mysqli_fetch_assoc($resultCat);

    if(isset($_POST['sbm'])){
        if(empty($_POST['cat_name'])) {
            echo "Bạn chưa nhập tên danh mục";
        } else {
            $cat_name = $_POST['cat_name'];
        }
        $parent_id = $_POST['parent_id'];
        $url = $_POST['url'];

        
        $sqlUpdate = "UPDATE category SET
            cat_name = '$cat_name',
            parent_id = $parent_id,
            url = '$url'
            WHERE cat_id = $cat_id
             ";

             if(mysqli_query($conn, $sqlUpdate)) {
                header("location: index.php?page=category");
             }else{
                 echo  "<script>alert('cập nhập sản phẩm không thành công'); </script>";
                }
    }
}
else{
    header(' location: index.php?page=category');}
// include_once "edit_product_process.php";


?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Manage categories</a></li>
				<li class="active"><?php echo $catEdit['cat_name']; ?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Category: <?php echo $catEdit['cat_name']; ?></h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <label>Name list</label>
                                    <input type="text" name="cat_name" required class="form-control" value=" <?php echo $catEdit['cat_name']; ?>"  placeholder="">
                                </div>
                                                                
                                  
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product portfolio</label>
                                    <input type="text" name="parent_id" required class="form-control" value=" <?php echo $catEdit['parent_id']; ?>"  placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>URL</label>
                                    <input type="text" name="url" required value=" <?php echo $catEdit['url']; ?>" class="form-control">
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
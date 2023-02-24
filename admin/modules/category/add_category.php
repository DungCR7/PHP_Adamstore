<?php 
    // Hiển thị các danh mục
    $sqlCategory = 'SELECT * FROM category';
    $resultCategory = mysqli_query($conn, $sqlCategory);
    // thêm sản phẩm
    
    if(isset($_POST['sbm'])){
        if(empty($_POST['cat_name'])){
            echo "Bạn chưa nhập tên sản phẩm!";
        }else{
            $cat_name = $_POST['cat_name'];
        }
        // $parent_id = $_POST['parent_id'];
        $parent_id = $_POST['parent_id'];
        $url = $_POST['url'];
        

        $sqlInsert = "INSERT INTO category  (cat_name, parent_id, url) VALUES
        ('$cat_name', $parent_id , '$url')";
        // var_dump(mysqli_query($conn, $sqlInsert));
        // die;
        if(mysqli_query($conn, $sqlInsert)) {
            // echo 'a';
            // echo "<script>alert('Thêm sản phẩm thành công');</script>";
            header('location: index.php?page=category');
            // header("location: index.php");
        }else{
            // echo 'b';
            
            echo "<script>alert('Thêm sản phẩm không thành công');</script>";
        }
    }




    
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Manage categories</a></li>
				<li class="active">Add categories</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add categories</h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <form role="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <!-- ĐÃ SỬA -->
                                    <label>Name list</label>
                                    <input required name="cat_name" class="form-control" placeholder="">
                                </div>
                                 
                                
                                
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                    <!-- ĐÃ SỬA -->
                                    <label>Product portfolio</label>
                                    <input required name="parent_id" type="number" min="0" class="form-control">
                                </div>
                                <!-- ĐÃ SỬA -->
                                <!-- <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="prd_status" class="form-control">
                                        <option value=1 selected>Còn hàng</option>
                                        <option value=0>Hết hàng</option>
                                    </select>
                                </div> -->
                                <label>URL</label>
                                    <input required name="url" class="form-control" placeholder="">
                                
                                
                                <button name="sbm" type="submit" class="btn btn-success">Add new</button>
                                <button type="reset" class="btn btn-default">Refresh</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
		
	</div>	<!--/.main-->	


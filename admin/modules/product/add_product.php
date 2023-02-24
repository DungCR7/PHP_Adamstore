<?php 
    // Hiển thị các danh mục
    $sqlProductType = "SELECT * FROM productType";
    $resultProductType = mysqli_query($conn, $sqlProductType);
    $sqlCategory = 'SELECT * FROM category';
    $resultCategory = mysqli_query($conn, $sqlCategory);
    // thêm sản phẩm
    
    // Warning: Cannot modify header information - headers already sent by 
    // (output started at C:\xampp\htdocs\adamstore\admin\admin.php:9) 
    // in C:\xampp\htdocs\adamstore\admin\modules\product\add_product.php on line 38




    
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Product Management</a></li>
				<li class="active">Add products</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add products</h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <form role="form" method="post" enctype="multipart/form-data" action="modules/product/add_product_process.php">
                                <div class="form-group">
                                    <!-- ĐÃ SỬA -->
                                    <label>Product's name</label>
                                    <input required name="prd_name" class="form-control" placeholder="">
                                </div>
                                                                
                                <div class="form-group">
                                    <!-- ĐÃ SỬA -->
                                    <label>Product price</label>
                                    <input required name="prd_price" type="number" min="0" class="form-control">
                                </div>
                                <!-- ĐÃ SỬA -->
                                <div class="form-group">
                                    <label>Product code</label>
                                    <input required name="prd_nameId" type="text" class="form-control">
                                </div>    
                                
                                
                            </div>
                            <div class="col-md-6">
                                <!-- ĐÃ SỬA -->
                                <div class="form-group">
                                    <label>Image product</label>
                                    
                                    <input required name="prd_image" type="file" onchange = "preview();">
                                    <!-- <img id="prd_frame" src="" width: 100px height: 100px> -->
                                    <br>
                                    <div>
                                        <img id= "prd_image" width = "150px" height = "200px" src="img/no-img.png">
                                    </div>
                                </div>
                                <!-- ĐÃ SỬA -->
                                <div class="form-group">
                                    <label>Product Type</label>
                                    <select name="prdType_id" class="form-control">
                                        <option value="">----Option-----</option>
                                        <?php 
                                            if(mysqli_num_rows($resultProductType)){
                                                while($prdType = mysqli_fetch_assoc($resultProductType)){
                                        ?>
                                        <option value=<?php echo $prdType['prdType_id'] ?>><?php echo $prdType['prdType_name'] ?></option>
                                        <?php
                                                }
                                            }
                                        ?>
                                        
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="cat_id" class="form-control">
                                        <option value="">----Option-----</option>
                                        <?php 
                                            if(mysqli_num_rows($resultCategory)){
                                                while($cate = mysqli_fetch_assoc($resultCategory)){
                                        ?>
                                        <option value=<?php echo $cate['cat_id'] ?>><?php echo $cate['cat_name'] ?></option>
                                        <?php
                                                }
                                            }
                                        ?>
                                        
                                        
                                    </select>
                                </div>
                                <!-- ĐÃ SỬA -->
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="prd_status" class="form-control">
                                        <option value=1 selected>Stocking</option>
                                        <option value=0>Out of stock</option>
                                    </select>
                                </div>
                                
                                
                                <!-- ĐÃ SỬA -->
                                <div class="form-group">
                                        <label>Product Description</label>
                                        <textarea required name="prd_details" class="form-control" rows="3"></textarea>
                                    </div>
                                <button name="sbm" type="submit" class="btn btn-success">Add new</button>
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


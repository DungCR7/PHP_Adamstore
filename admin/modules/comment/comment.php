<?php
$sql_comm= "SELECT * FROM  comment ORDER BY comm_id DESC";
$result= mysqli_query($conn,$sql_comm);


// Phân trang
$rowPerPage = 10;
// số bản ghi lấy được
$totalRecords = mysqli_num_rows($result);
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
$sql_pagination = "SELECT * FROM comment INNER JOIN product ON product.prd_id = comment.prd_id ORDER BY comm_id DESC LIMIT $start,$rowPerPage";
$resultPagination = mysqli_query($conn, $sql_pagination);

?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Comments List</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Comments List</h1>
			</div>
		</div><!--/.row-->
		<!-- <div id="toolbar" class="btn-group">
            <a href="index.php?page=add_user" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i> Thêm bình luận
            </a>
           
        </div> -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
                        <table 
                            data-toolbar="#toolbar"
                            data-toggle="table">

						    <thead>
						    <tr>
                            <th data-field="id" data-sortable="true">ID</th>
                                 <th>Product ID</th>
                                <th data-field="name" data-sortable="true">First name</th>
                                 <th data-field="price" data-sortable="true">Email</th>
                                 <th>Comment time</th>
                                 <th>Comment</th>
                                 <th>Action</th>
						    </tr>
                            </thead>
                            <tbody>
                            <?php if(mysqli_num_rows($resultPagination) >0){
                                    while ($row = mysqli_fetch_assoc($resultPagination)){
                              ?>
                                <tr>
                                    <td style=""><?php echo $row['comm_id'];?></td>
                                    <td style=""><?php echo $row['prd_id'];?></td>
                                    <td style=""><?php echo $row['comm_name'];?></td>
                                    <td style=""><?php echo $row['comm_mail'];?></td>
                                    <td style=""><?php echo $row['comm_date'];?></td>
                                    <td style=""><?php echo $row['comm_details'];?>
                                    
                                        </td>
                                    <td class="form-group">
                                        
                                        <a onclick="return confirmdel();"  href="modules/comment/del_comment.php?comm_id=<?php echo $row['comm_id'];?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                    </td>
                                </tr>
                               
                                    <?php }
                                     } 
                                    ?>
                            </tbody>
						</table>
                    </div>
                    <div class="panel-footer">
                        <nav aria-label="Page navigation example">
                        <ul class="pagination">
                                <!-- nút chuyển về trang tước -->
                                <?php
                                if ($current_page > 1) { ?>
                                    <li class="page-item"><a class="page-link" href="index.php?page=comment&current_page=<?php echo $current_page - 1; ?>">&laquo;</a></li>
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
                                            <li class="page-item active"><a class="page-link" href="index.php?page=comment&current_page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                        <?php } else { ?>
                                            <li class="page-item"><a class="page-link" href="index.php?page=comment&current_page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php
                                        }
                                    }
                                }
                                ?>
                                <!-- nút chuyển sang trang sau -->
                                <?php
                                if ($current_page < $totalPage) { ?>
                                    <li class="page-item"><a class="page-link" href="index.php?page=comment&current_page=<?php echo $current_page + 1; ?>">&raquo;</a></li>
                                <?php } else {
                                ?>
                                    <li class="page-item disabled"><a class="page-link" href="">&raquo;</a></li>
                                <?php } ?>
                                <!-- kết thúc -->
                            </ul>

                        </nav>
                    </div>
				</div>
			</div>
		</div><!--/.row-->	
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-table.js"></script>	

    <script>
        function confirmdel(){
            return confirm("Are you sure you want to delete?");
        }
    </script>
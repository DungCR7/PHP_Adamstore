<?php
 //số sp trên 1 trang
$sql_Dp= "SELECT * FROM orderdetail INNER JOIN `order` on orderdetail.order_id= `order`.`order_id`
INNER JOIN product ON product.prd_id=orderdetail.prd_id
";
$resultAll= mysqli_query($conn,$sql_Dp);
$rowPerPage = 5;
$totalRecords = mysqli_num_rows($resultAll);
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
    $sql_pagination = "SELECT * FROM orderdetail INNER JOIN `order` on orderdetail.order_id= `order`.`order_id`
    INNER JOIN product ON product.prd_id=orderdetail.prd_id ORDER BY order.order_id DESC LIMIT $start,$rowPerPage";
    $resultPagination = mysqli_query($conn, $sql_pagination);
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Order List</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Order List</h1>
			</div>
		</div>
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
                                <th data-field="name" data-sortable="true">Customer's name</th>
                                 <th data-field="price" data-sortable="true">Customer's email</th>
                                 <th>Address</th>
                                 <th>Phone number</th>
                                 <th>Order date</th>
                                 <th>Product photo</th>
                                 <th>product name</th>
                                 <th>quantity</th>
                                 <th>price</th>
                                 <th>status</th>
                                 <th>Action</th>
						    </tr>
                            </thead>
                            <tbody>
                               
                                  
                                
                                    <?php    if(mysqli_num_rows($resultPagination) >0 ){
                                    while ($rowDO = mysqli_fetch_assoc($resultPagination)){
                              ?>
                                    <tr>
                                            <td style=""><?php echo $rowDO['order_id'];?></td>
                                            <td style=""><?php echo $rowDO['user_name'];?> </td>
                                            <td style=""><?php echo $rowDO['user_mail'];?></td>
                                            <td style=""><?php echo $rowDO['address'];?></td>
                                            <td style=""><?php echo $rowDO['user_phone'];?></td>
                                            <td style=""><?php echo $rowDO['created'];?></td>
                            
                                            <td style="text-align: center"><img width="130" height="180" src="images/<?php echo $rowDO['prd_image'];?>" /></td>
                                            <td><?php echo $rowDO['prd_name'];?>
                                            </td>
                                            <td><?php echo $rowDO['qty'];?></td>
                                         
                                    
                                            <td style=""><?php echo number_format($rowDO['amount'],0,",",".");?>đ</td>
                                          
                                            <td><?php if($rowDO['status'] == 1){?>
                                                <span class="label label-success">Confirm</span>
                                                <?php }else{
                                                    ?>
                                                    <span class="label label-danger">Unconfimred</span>
                                                    <?php }
                                            ?>
                                            </td>
                                            
                                            <td class="form-group">
                                                <button style="background-color: green"> <a onclick="return confirmUp();"  href="modules/order/success-order.php?order_id=<?php echo $rowDO['order_id'];?>" style="color: white"> Confirm</a></button>
                                                <button style="background-color: red"> <a onclick="return confirmUp();"  href="modules/order/del_order.php?order_id=<?php echo $rowDO['order_id'];?>" style="color: white"> Delete</a></button>
                                              
                                            </td>
                                        </tr>
                                        <?php          
                                        }
                                    
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
                                    <li class="page-item"><a class="page-link" href="index.php?page=order&current_page=<?php echo $current_page - 1; ?>">&laquo;</a></li>
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
                                            <li class="page-item active"><a class="page-link" href="index.php?page=order&current_page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                        <?php } else { ?>
                                            <li class="page-item"><a class="page-link" href="index.php?page=order&current_page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php
                                        }
                                    }
                                }
                                ?>
                                <!-- nút chuyển sang trang sau -->
                                <?php
                                if ($current_page < $totalPage) { ?>
                                    <li class="page-item"><a class="page-link" href="index.php?page=order&current_page=<?php echo $current_page + 1; ?>">&raquo;</a></li>
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
        function confirmUp(){
            return confirm("Are you sure you want to confirm your order?");
        }
    </script>
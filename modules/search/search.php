               <!DOCTYPE html>
               <html lang="en">
               <head>
                   <meta charset="UTF-8">
                   <meta http-equiv="X-UA-Compatible" content="IE=edge">
                   <meta name="viewport" content="width=device-width, initial-scale=1.0">
                   <title>Document</title>
               </head>
               <style>
                   footer{
                        position: absolute;
                        top: 1640px;
                        width: 1518px;
                        /* height: 400px; */
                    }
               </style>
               <body>
            <?php
               $rowPerPage = 6;
                    $keyword = "";
                    if(isset($_GET['keyword'])){
                        $keyword = $_GET['keyword'];
                        
                    }
                    // iphone xs =>> ['iphone', 'xs']
                    $arr_keyword = explode(" ", $keyword);
                    // %iphone%xs%
                    $str_keyword = '%'.implode("%", $arr_keyword).'%';
                    $sqlSearch = "SELECT * FROM product WHERE prd_name LIKE '$str_keyword'";
                    $query = mysqli_query($conn, $sqlSearch);
                    // số bản ghi lấy được
                    $totalRecords = mysqli_num_rows($query);
                    // echo $totalRecords;
                    $totalPage =  ceil($totalRecords / $rowPerPage); // tổng số trang
                    // lấy trang hiện tại từ đường dẫn
                    

                    $page = 0;
                    if(isset($_GET['page_layout'])){
                        $page = $_GET['page_layout'];
                    }else{
                        $page = 1;
                    }
                    // bắt lỗi
                    if($page < 1){
                        $page = 1;
                    }
                    if($page > $totalPage && $totalPage > 0){
                        $page = $totalPage;
                    }
                    $start = ($page - 1)*$rowPerPage;
                    $sql_pagination = "SELECT * FROM product WHERE prd_name LIKE '$str_keyword' LIMIT $start,$rowPerPage";
                    $resultPagination = mysqli_query($conn, $sql_pagination);
               ?>
               
               
               <!--	List Product	-->
               <div class = "body-introduction">
                    <div class="products">
                        <div id="search-result">Search results for the product: <span style="font-weight: bold;"><?php echo $keyword; ?></span></div>
                            <div class="product-list row">
                            <?php 
                                if(mysqli_num_rows($resultPagination)) {
                                    while ($prd = mysqli_fetch_assoc($resultPagination)) {
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                                <div class="product-item card text-center">
                                    <a href="index.php?page=product&prd_id=<?php echo $prd['prd_id']; ?>"><img src="admin/images/<?php echo $prd['prd_image']; ?>"></a>
                                    <h4>
                                        <a style = "text-decoration: none; font-size: 20px; color: black;" href="index.php?page=product&prd_id=<?php echo $prd['prd_id']; ?>"><?php echo $prd['prd_name']; ?></a></h4>
                                    <p><span style = "color: red; font-weight: 600"><?php echo number_format($prd['prd_price'],0,',','.'); ?>đ</span></p>
                                </div>
                            </div>
                            <?php 
                                }
                            }else{
                                echo "không có sản phẩm nào được tìm thấy";
                            }
                            ?>
                        </div>
                    </div>
                    <div id="pagination">
                <ul class="pagination">
                                <!-- nút chuyển về trang tước -->
                                <?php
                                if ($page > 1) { ?>
                                    <li class="page-item"><a class="page-link" href="index.php?page=search&keyword=<?php echo $keyword; ?>&page_layout=<?php echo $page - 1; ?>">Trang trước</a></li>
                                <?php } else {
                                ?>
                                    <li class="page-item disabled"><a class="page-link" href="">&laquo;</a></li>
                                <?php } ?>
                                <!-- kết thúc  -->
                                <!-- phân trang ở giữa -->
                                <?php
                                for ($i = 1; $i <= $totalPage; $i++) {
                                    if ($i > $page - 3 && $i < $page + 3) {
                                        if ($i == $page) {
                                ?>
                                            <li class="page-item active"><a class="page-link" href="index.php?page=search&keyword=<?php echo $keyword; ?>&page_layout=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                        <?php } else { ?>
                                            <li class="page-item"><a class="page-link" href="index.php?page=search&keyword=<?php echo $keyword; ?>&page_layout=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php
                                        }
                                    }
                                }
                                ?>
                                <!-- nút chuyển sang trang sau -->
                                <?php
                                if ($page < $totalPage) { ?>
                                    <li class="page-item"><a class="page-link" href="index.php?page=search&keyword=<?php echo $keyword; ?>&page_layout=<?php echo $page + 1; ?>">Trang sau</a></li>
                                <?php } else {
                                ?>
                                    <li class="page-item disabled"><a class="page-link" href="">&raquo;</a></li>
                                <?php } ?>
                                <!-- kết thúc -->
                </ul>
                </div>
                </div>
                
               </body>
               </html>
               <?php 
                   
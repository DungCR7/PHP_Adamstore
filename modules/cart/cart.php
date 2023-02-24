<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/adamstore/css/cart.css">
</head>




<body>
<!-- <div style="text-align: right;">
    <button > <a href="index.php?page=history">lịch sử mua hàng</a></button>
</div> -->
<?php
if (isset($_SESSION['cart'])) {
    $prdId_list = '';
    foreach ($_SESSION['cart'] as $prd_id => $qty) {
        $prdId_list .= $prd_id . ",";
    }
    $prdId_list = rtrim($prdId_list, ",");
    $sqlCart = "SELECT * FROM product WHERE prd_id IN($prdId_list)";
    $queryCart = mysqli_query($conn, $sqlCart);
?>
<style>
    .cart-thumb, .cart-quantity, .cart-price, .cart-total{
	padding:10px;
    width: 260px;}	
</style>
    <div class = "body-introduction">
        <div style="background-color: white;">
            <div style="padding:10px 300px;" id="my-cart">
                <div class="row">
                    <div class="cart-nav-item col-lg-7 col-md-7 col-sm-12">Product information</div>
                    <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12">Option</div>
                    <div class="cart-nav-item col-lg-3 col-md-3 col-sm-12">Price</div>
                </div>
                <form method="post" action="modules/cart/process-cart.php?action=submit">
                    <?php
                    $price_unit = 0;
                    $total_price = 0;
                    while ($cart_item = mysqli_fetch_assoc($queryCart)) {
                        $price_unit = $_SESSION['cart'][$cart_item['prd_id']] * $cart_item['prd_price'];
                        $total_price += $price_unit;
                    ?>
                                          <div class="cart-item row">
                        <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                        	<img src="admin/images/<?php echo $cart_item['prd_image']; ?>">
                            <h4><?php echo $cart_item['prd_name']; ?></h4>
                        </div> 
                        <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                            <input type="hidden" name = "prd_price[<?php echo $cart_item['prd_id']; ?>]" value="<?php echo $cart_item['prd_price']; ?>">
                        	<input type="number" id="quantity" class="form-control form-blue quantity" 
                            value="<?php echo $_SESSION['cart'][$cart_item['prd_id']]; ?>" name = "quantity[<?php echo $cart_item['prd_id']; ?>]">
                        </div> 
                        
                        <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b><?php echo number_format($price_unit,0,",",".");?>đ</b>
                            <a href="modules/cart/process-cart.php?action=del&prd_id=<?php echo $cart_item['prd_id']; ?>">Delete</a>
                        </div>    
                    </div>
                    <?php
                    }
                    ?>

                    <div class="row">
                        <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                            <button style="background-color: red;color:white;" id="update-cart" class="btn btn-danger" type="submit" name="update_cart" value="update">Buy now</button>
                        </div>
                        <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b>Total:</b></div>
                        <input type="hidden" name="total_price" value="<?php echo $total_price; ?>">
                        <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>
                                <?php echo number_format($total_price, 0, ',', '.'); ?>
                            </b></div>
                    </div>


            </div>
        <?php
        } else {
        echo "<div style='text-align: center; position: absolute;
        top: 154px; left: 532px;' class='alart alart-danger'><h4> NO PRODUCTS IN CART </h4></div>";
        }
        ?>
        
        
        <!--	End Cart	-->
        <!--	Customer Info	-->
    <!-- <div class = "body-introduction"> -->
        <div style="padding-top: 140px;" id="customer">
            <!-- <form method="post"> -->
            <div class="row">
                <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                    <input style="width: 250px;height:20px ;" placeholder="First & Last Name (required)" type="text" name="user_name" id="user_name" class="form-control">
                    <br><span style="width: 250px;height:20px ;border-radius: 2px;" id="user_name_error"></span>
                </div>
                <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                    <input style="width: 250px;height:20px ;" placeholder="Telephone (required)" type="number" name="user_phone" id="user_phone" class="form-control">
                <br> <span style="width: 250px;height:20px ;border-radius: 2px;" id="user_phone_error"></span>
                </div>
                <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                    <input style="width: 250px;height:20px ;" placeholder="Email (required)" type="email" name="user_mail" id="user_mail" class="form-control">
                    <br><span style="width: 250px;height:20px ;border-radius: 2px;" id="user_mail_error"></span>
                </div>
                <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                    <input  style="width: 250px;height:20px" placeholder="Address (required)" type="text" name="address" id="address" class="form-control">
                    <br><span style="width: 250px;height:20px ;border-radius: 2px;" id="address_error"></span>
                </div>
            </div>
            <divclass="">
                <div style="text-align: -webkit-center;" class="by-now col-lg-6 col-md-6 col-sm-12">
                    <button style="background-color: red;color:white;" class="btn btn-danger" type="submit" name="insert_cart" onclick="return validateForm();" id="btn_insert" value="insert">
                        <b>Buy now</b>
                        <span>Super fast delivery</span>
                    </button>
                </div>
                <!-- <div class="by-now col-lg-6 col-md-6 col-sm-12">
                    <button class="btn btn-success" type="submit" name="" value="">
                        <b>Trả góp Online</b>
                        <span>Vui lòng call (+84) 0988 550 553</span>
                    </button>
                </div> -->
            </div>
            </form>
        </div>
        </div>
    </div>
    <script>
        function validateForm() {
            const EMPTY_STR = "";
            var check = true;
            var user_name = document.getElementById('user_name');
            var user_phone = document.getElementById('user_phone');
            var user_mail = document.getElementById('user_mail');
            var address = document.getElementById('address');
            var user_name_error = document.getElementById('user_name_error');
            var user_phone_error = document.getElementById('user_phone_error');
            var user_mail_error = document.getElementById('user_mail_error');
            var address_error = document.getElementById('address_error');
            if (user_name.value == EMPTY_STR) {
                user_name.style.border = '1px solid red';
                user_name_error.innerHTML = "bạn phải nhập họ tên";
                user_name_error.style.color = "red";
                user_name_error.style.border = '1px solid red'
                check = false;
            }
            if (user_phone.value  == EMPTY_STR) {
                user_phone.style.border = '1px solid red';
                user_phone_error.innerHTML = "bạn phải nhập số điện thoại";
                user_phone_error.style.color = "red";
                user_phone_error.style.border = '1px solid red'
                check = false;
            }
            if (user_mail.value  == EMPTY_STR) {
                user_mail.style.border = '1px solid red';
                user_mail_error.innerHTML = "bạn phải nhập email";
                user_mail_error.style.color = "red";
                user_mail_error.style.border = '1px solid red'
                check = false;
            }
            if (address.value  == EMPTY_STR) {
                address.style.border = '1px solid red';
                address_error.innerHTML = "bạn phải nhập địa chỉ";
                address_error.style.color = "red";
                address_error.style.border = '1px solid red'
                check = false;
            }

            return check;
        }
    </script>
</body>
</html>


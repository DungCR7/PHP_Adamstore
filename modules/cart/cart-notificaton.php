<li><a href="index.php?page=cart"><i class="fa-solid fa-cart-arrow-down">
<?php 
                if(isset($_SESSION['cart'])){
                    echo count($_SESSION['cart']);
                }else{
                    echo 0;
                }
                ?></i></a>
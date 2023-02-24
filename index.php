<?php   
    ob_start();
    session_start();
    include_once "config/connectDB.php";
    include_once "modules/menu/function.php"; 
    // Lấy tất cả Danh mục
    $sqlCate = "SELECT * FROM category";
    $resultCate = mysqli_query($conn, $sqlCate);
    $cate = mysqli_fetch_all($resultCate, MYSQLI_ASSOC);
    // Tạo cây danh mục 
    $menu = buildTree($cate);
    ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/adamstore/css/homepage.css">
    <link rel="stylesheet" href="/adamstore/css/introduction.css">
    <link rel="stylesheet" href="/adamstore/css/lookbook.css">
    <link rel="stylesheet" href="/adamstore/css/lookbook-new1.css">
    <link rel="stylesheet" href="/adamstore/css/lookbook-new2.css">
    <link rel="stylesheet" href="/adamstore/css/lookbook-new3.css">
    <link rel="stylesheet" href="/adamstore/css/casilyhai.css">
    <link rel="stylesheet" href="/adamstore/css/ngokienhuy.css">
    <link rel="stylesheet" href="/adamstore/css/xuanbac.css">
    <!-- <link rel="stylesheet" href="/adamstore/css/quanap.css"> -->
    <link rel="stylesheet" href="/adamstore/css/realmen.css">
    <link rel="stylesheet" href="/adamstore/css/dream.css">
    <link rel="stylesheet" href="/adamstore/css/hanquoc.css">
    <link rel="stylesheet" href="/adamstore/css/paris.css">
    <link rel="stylesheet" href="/adamstore/css/introduction.css">
    <link rel="stylesheet" href="/adamstore/css/account.css">
    <link rel="stylesheet" href="/adamstore/css/signup.css">
    <link rel="stylesheet" href="/adamstore/css/category.css">
    <link rel="stylesheet" href="/adamstore/css/cart.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <!-- Header -->
    <header class="header-main">
        <div class="container-fluid">
            <!-- số lượng cửa hàng -->
            <div class="quantity-store">
                <a href="">System <span class="quantity">72</span> stores</a>
            </div>
            <!-- Logo, menu, search -->
            <div class="logo-menu-search">
                <!-- Logo -->
                <div class="row">
                    <div class="col-6 col-md-2">
                        <div class="logo">
                            <a href="/homepage.html"><img class="img-logo" src="/adamstore/image/logo.jpg" alt="Adam Store"></a>
                        </div>
                    </div>
                    <!-- Menu -->
                    <div class="col-6 col-md-8">
                        <div class="menu">
                            
                            <ul class="main-menu">
                                 <!-- In tất cả menu, các menu sẽ in các menu con 
                                nếu có(xem menu-item.php)  -->
                               <?php foreach ($menu as $key => $menuItem) : ?>
                                    <?php
                                      include 'modules/menu/menu-item.php';
                                    ?>
                               <?php endforeach ?>
                            </ul> 
                         
                        </div>
                        
                    </div>
                    

                    
                    <!-- Cart -->
                    <div class="col-6 col-md-2">
                        <div class="cart">
                            <ul class="main-cart">
                                <li class="hotline-search"><a href="#">Contact</a></li>
                                <?php include_once "modules/search/search-box.php"; ?>
                                <li><a href="index.php?page=account"><i class="fa-solid fa-user"></i></a></li>
                                <?php include_once "modules/cart/cart-notificaton.php"; ?>
                            </ul>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </header>

    <?php 
        if(isset($_GET['page'])) {
            switch ($_GET['page']) {
                // category module
                case 'homepage':
                    require_once "modules/home/homepage.php";
                    break;
                case 'introduction':
                    require_once "modules/introduction/introduction.php";
                    break;
                case 'lookbook':
                    require_once "modules/lookbook/lookbook.php";
                    break;
                case 'lookbook-new1':
                    require_once "modules/lookbook/lookbook-new1.php";
                    break;
                case 'lookbook-new2':
                    require_once "modules/lookbook/lookbook-new2.php";
                    break;
                case 'lookbook-new3':
                    require_once "modules/lookbook/lookbook-new3.php";
                    break;
                case 'casilyhai':
                    require_once "modules/news/casilyhai.php";
                    break;
                case 'ngokienhuy':
                    require_once "modules/news/ngokienhuy.php";
                    break;
                case 'xuanbac':
                    require_once "modules/news/xuanbac.php";
                    break;
                case 'quanap':
                    require_once "modules/news/quanap.php";
                    break;
                case 'realmen':
                    require_once "modules/news/realmen.php";
                    break;
                case 'dream':
                    require_once "modules/news/dream.php";
                    break;
                case 'hanquoc':
                    require_once "modules/news/hanquoc.php";
                    break;
                case 'paris':
                    require_once "modules/news/paris.php";
                    break;
                case 'account':
                    require_once "modules/signup/account.php";
                    break;
                case 'signup':
                    require_once "modules/signup/signup.php";
                    break;
                case 'category':
                    require_once "modules/category/category.php";
                    break;
                case 'category':
                    require_once "modules/category/category.php";
                    break;
                case 'product':
                    require_once "modules/product/product.php";
                    break;
                case 'search':
                    require_once "modules/search/search.php";
                    break;
                case 'cart-notificaton':
                    require_once "modules/cart/cart-notificaton.php";
                    break;
                case 'cart':
                    require_once "modules/cart/cart.php";
                    break;
                case 'success':
                    require_once "modules/cart/success.php";
                    break;
                // case 'cart':
                //     require_once "modules/cart/cart.php";
                //     break;
            }
        }else{
            require_once "modules/home/homepage.php";
        }
    ?>


    <footer> 
        <div class="footer-web">
          <div class="footer">
            <ul class="list-group">
              <li><a href=""><img class="logo-footer" src="/adamstore/image/logo.jpg" alt=""></a></li>
              <li class="list-group-item"><span><i class="fa-solid fa-phone"></i></span> <a href="tel:0938 888 835 ">0938 888 835</a></li>
              <li class="list-group-item"><span><i class="fa-solid fa-envelope"></i></span> <a href="mailto:info@adamgroup.vn">info@adamgroup.vn</a></li>
                <li class="list-group-item">
                    <a href="https://www.facebook.com/adamstore.hn/">
                        <span class="fb"><i class="fa-brands fa-facebook-f"></i></span>
                    </a>
                    <a href="https://www.instagram.com/adamstorevietnam/">
                        <span class="ig"><i class="fa-brands fa-instagram"></i></span>
                    </a>
                    <a href="https://www.youtube.com/channel/UCZx4GVlH_hK2ypYrHlDUglw">
                        <span class="yt"><i class="fa-brands fa-youtube"></i></span>
                    </a>
                </li>
              
            </ul>
      
            <ul class="list-group">
              <h5>THÔNG TIN WEBSITE</h5>
              <li class="list-group-item">Tên: Công Ty TNHH THỜI TRANG ADAM</li>
              <li class="list-group-item">Thông Tin và Chính Sách Khách Hàng</li>
              <li class="list-group-item">Chính sách bảo vệ thông tin cá nhân của người tiêu dùng</li>
            </ul>
      
            <ul class="list-group">
                <h5>DANH SÁCH CỬA HÀNG TẠI HÀ NỘI</h5>
                <div class="list-store1">
                    <li class="list-group-item">9 Thanh niên - Hà Nội</li>
                    <li class="list-group-item">11 Thanh niên - Hà Nội</li>
                    <li class="list-group-item">209 Phố Huế - Hà Nội</li>
                </div>
                <div class="list-store2">
                    <li class="list-group-item">360 Cầu Giấy - Hà Nội</li>
                    <li class="list-group-item">01 Phố Huế - Hà Nội</li>
                    <li class="list-group-item">19 Chùa Bộc - Hà Nội</li>
                </div>
            </ul>
            <div class="hotline-footer">
                <ul class="list-group email">
                    <h5>ĐĂNG KÝ NHẬN THÔNG TIN MỚI TỪ ADAMSTORE</h5>
                    <li class="list-group-item1">
                        <form action="./action_page"method="post">
                            <input class="email-form" type="email"name="email-email"id="email-email" />
                            <input class="email-submit" type="submit"value="ĐĂNG KÝ" />
                        </form>
                    </li>
                    <div class="bct">
                        <li class="list-group-item1">
                            <a href="http://online.gov.vn/Home/WebDetails/89119">
                                <img class="bct-img" src="/adamstore/image/bocongthuong.jpg" alt="">
                            </a>
                        </li>
                    </div>
                </ul>
            <div class="footer-copyrights">
                <span class="footer-copyrights-text">Copyrights © 2018 by <a href="">Adamstore.</a></span>
            </div>
        </div>
          </div>
        </div>
    </footer>

<!-- <script src="/adamstore/js/homepage.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<?php
    $conn->close();
?>
</body>
</html>
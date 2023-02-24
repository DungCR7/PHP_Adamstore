<?php 
// session_start();

if(!defined("ISLOGGED")) {
	header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADMIN</title>

    <!-- Bootstrap -->
    <link href="/adamstore/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/adamstore/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/adamstore/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/adamstore/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="/adamstore/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/adamstore/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/adamstore/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/adamstore/admin/build/css/custom.min.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/bootstrap-table.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/adamstore/admin/index.php" class="site_title"><span style="padding-left: 20px;">ADAM STORE</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
               
              </div>
              
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> DASHBOARD <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=order">ORDER MANAGEMENT</a></li>
                      <li><a href="index.php?page=product">PRODUCT MANAGEMENT</a></li>
                      <li><a href="index.php?page=category">CATEGORY MANAGEMENT</a></li>
                      <li><a href="index.php?page=comment">COMMENT MANAGEMENT</a></li>
                      <li><a href="index.php?page=customer">CUSTOMER MANAGEMENT</a></li>
                      <!-- <li><a href="index.php?page=user">QUẢN LÝ THÀNH VIÊN</a></li> -->
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="/adamstore/admin/production/images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="/adamstore/admin/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="/adamstore/admin/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <?php 
          if(isset($_GET['page'])) {
            switch ($_GET['page']) {
                // category module
                case 'category':
                    require_once "modules/category/category.php";
                    break;
                case 'add_category':
                    require_once "modules/category/add_category.php";
                    break;
                case 'edit_category':
                    require_once "modules/category/edit_category.php";
                    break;
                case 'product':
                    require_once "modules/product/product.php";
                    break;
                case 'add_product':
                    require_once "modules/product/add_product.php";
                    break;
                case 'order':
                    require_once "modules/order/order.php";
                    break;
                case 'user':
                    require_once "modules/user/user.php";
                    break;
                case 'edit_product':
                    require_once "modules/product/edit_product.php";
                    break;
                case 'comment':
                    require_once "modules/comment/comment.php";
                    break;
                case 'order':
                    require_once "modules/order/order.php";
                    break;
                case 'success-order':
                    require_once "modules/order/success-order.php";
                    break;
                case 'customer':
                    require_once "modules/customer/customer.php";
                    break;
            }
        }else{
            require_once "static.php";
        }
        ?>
       
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
        
          </div>
          <div class="clearfix"></div>
        </footer>
        
      </div>
    </div>

    <!-- jQuery -->
    <script src="/adamstore/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/adamstore/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/adamstore/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/adamstore/admin/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/adamstore/admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/adamstore/admin/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/adamstore/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/adamstore/admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/adamstore/admin/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/adamstore/admin/vendors/Flot/jquery.flot.js"></script>
    <script src="/adamstore/admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/adamstore/admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/adamstore/admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/adamstore/admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/adamstore/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/adamstore/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/adamstore/admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/adamstore/admin/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/adamstore/admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/adamstore/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/adamstore/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/adamstore/admin/vendors/moment/min/moment.min.js"></script>
    <script src="/adamstore/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/adamstore/admin/build/js/custom.min.js"></script>
	
  </body>
</html>

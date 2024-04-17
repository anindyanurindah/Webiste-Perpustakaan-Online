<?php
include"../../config.php";
session_start();
if(!isset($_SESSION['username']))
{
	header("location:../../login.php");
}
$nama = $_SESSION['nama'];
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cheap Book Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.ico">
    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
  <!-- nalika Icon CSS
    ============================================ -->
    <link rel="stylesheet" href="../../assets/css/nalika-icon.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="../../assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../../assets/css/owl.theme.css">
    <link rel="stylesheet" href="../../assets/css/owl.transitions.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="../../assets/css/normalize.css">
    <!-- meanmenu icon CSS
    ============================================ -->
    <link rel="stylesheet" href="../../assets/css/meanmenu.min.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="../../assets/css/main.css">
    <!-- morrisjs CSS
    ============================================ -->
    <link rel="stylesheet" href="../../assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="../../assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
    ============================================ -->
    <link rel="stylesheet" href="../../assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../../assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
    ============================================ -->
    <link rel="stylesheet" href="../../assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../../assets/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="../../assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body style="background: #6B4F4F;">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="left-sidebar-pro" style="background: #99A799;">
            <nav id="sidebar" class="">
                <div class="sidebar-header" style="background: #99A799;">
                    <a href="index.php"><img class="main-logo" src="../../images/logo cheap book.jpg" alt="" style="width:170px; margin-top: 13px;" /></a>
                    <strong><img src="../../assets/img/logo/logosn.png" alt="" /></strong>
                </div>
                <div class="nalika-profile" style="background: #99A799; margin-bottom: -10px;">
                    <div class="profile-dtl">
                        <a href="#"><img src="https://jdih.posokab.go.id/asset/foto_statis/138926-200.png" alt="" /></a>
                        <h2> <span class="min-dtn"><?= $nama ?></span></h2>
                    </div>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar" style="background: #99A799;">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <li class="active">
                                <a class="has-arrow" href="product-list.html" style="background: #99A799;">
                                       <i class="icon nalika-home icon-wrap" style="background: #99A799;"></i>
                                       <span class="mini-click-non"style="background: #99A799;">Product</span>
                                    </a>
                                <ul class="submenu-angle" aria-expanded="true" style="background: #99A799;">
                                    <li><a title="Product List" href="index.php?page=buku"><span class="mini-sub-pro">Product List</span></a></li>
                                    <li><a title="Product Edit" href="index.php?page=input_buku"><span class="mini-sub-pro">Add Product</span></a></li>
                                    <li><a title="Product Payment" href="index.php?page=laporan"><span class="mini-sub-pro">Product Payment</span></a></li>
                                </ul>
                            </li>
                            <!--<li>
                                <a href="index.php?page=histori_transaksi">Order History</a>
                            </li>-->
                            <li>
                                <a href="index.php?page=kategori" style="background: #99A799; margin-top: -10px;">Category Management</a>
                            </li>
                            <li>
                                <a href="index.php?page=customer" style="background: #99A799; margin-top: -10px;">Customer Management</a>
                            </li>
                            <li>
                                <a href="outpage.php" style="background: #99A799; margin-top: -10px; margin-bottom: -10px;">Logout</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"style="background: #483434;">
                    <div class="logo-pro">
                        <a href="product-list.html"><img class="main-logo" src="../../assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area" style="background: #483434;">
            <div class="header-top-area" style="background: #483434;">
                <div class="container-fluid" style="background: #483434;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                          <i class="icon nalika-menu-task"></i>
                        </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <div class="breadcome-heading">
                        <form role="search" class="">
                          <input type="text" placeholder="Search..." class="form-control" style="background: #6B4F4F;">
                          <a href=""><i class="fa fa-search"></i></a>
                        </form>
                      </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-mail nalika-chat-pro" aria-hidden="true" style="background: #6B4F4F;"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top" style="background: #6B4F4F; margin-top: -10px;">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu" style="background: #6B4F4F;">
                                                            <li>
                                                                <a href="#" style="background: #6B4F4F;">
                                                                    <div class="message-img" style="background: #6B4F4F;">
                                                                        <img src="../../assets/img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content" style="background: #6B4F4F;">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view" style="background: #6B4F4F; margin-bottom: -10px;">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top" style="background: #6B4F4F; margin-top: -10px;">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu" style="background: #6B4F4F;">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon" style="background: #6B4F4F;">
                                                                        <i class="icon nalika-tick" aria-hidden="true" ></i>
                                                                    </div>
                                                                    <div class="notification-content" style="background: #6B4F4F;">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view" style="background: #6B4F4F; margin-bottom: -10px;">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                              <i class="icon nalika-user nalika-user-rounded header-riht-inf" aria-hidden="true"></i>
                              <span class="admin-name"><?= $nama ?></span>
                              <i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
                            </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn" style="background: #6B4F4F;">
                                                        <li><a href="outpage.php"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open" ><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-menu-task"></i></a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li>
                                                            <a href="index.php?page=buku" style="background: #6B4F4F; margin-top: -10px;">Product List</a>
                                                        </li>
                                                        <li>
                                                            <a href="index.php?page=input_buku" style="background: #6B4F4F; margin-bottom: -10px;">Add Product </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- main -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                        <?php
                          if(isset($_GET['page'])) {
                            $page = $_GET['page'] . ".php";
                            include ("$page");

                          } else {
                            include ('home.php');
                          }?>
            </div>
        </div>
        <div class="footer-copyright-area" style="background:#533535;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Kelompok 5 © 2021 All Rights Reserved | <a href="#">Cheap Book</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
    ============================================ -->
    <script src="../../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="../../assets/js/bootstrap.min.js"></script>
    <!-- wow JS
    ============================================ -->
    <script src="../../assets/js/wow.min.js"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="../../assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="../../assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
    ============================================ -->
    <script src="../../assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="../../assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="../../assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
    ============================================ -->
    <script src="../../assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="../../assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
    ============================================ -->
    <script src="../../assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../../assets/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
    ============================================ -->
    <script src="../../assets/js/calendar/moment.min.js"></script>
    <script src="../../assets/js/calendar/fullcalendar.min.js"></script>
    <script src="../../assets/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="../../assets/js/plugins.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="../../assets/js/main.js"></script>
</body>

</html>
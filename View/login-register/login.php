﻿<?php
  error_reporting(0);
	ob_start();
  session_start();
  include ('../../Model/connection.php');
  include('../menu.php');
  include ("../../Controller/taikhoan.php");
  $p= new taikhoan_controller;
?>
<!DOCTYPE html>
<html lang="en">

<!-- Tieu Long Lanh Kute -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Favicons Icon -->
  <link rel="icon" href="../../images/Logogear.ico">
  <title>Đăng nhập</title>

  <!-- Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS Style -->
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/font-awesome.css" media="all">
  <link rel="stylesheet" type="text/css" href="../../css/style.css" media="all">
  <link rel="stylesheet" type="text/css" href="../../css/animate.css" media="all">
  <link rel="stylesheet" type="text/css" href="../../css/revslider.css">
  <link rel="stylesheet" type="text/css" href="../../css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="../../css/owl.theme.css">
  <link rel="stylesheet" href="../../css/flexslider.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="../../css/jquery.mobile-menu.css">
  <link rel="stylesheet" type="text/css" href="../../css/jquery.bxslider.css">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200italic,300,300italic,400,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index cms-home-page">
  <div id="page">
    <div id="magik-slideshow" class="magik-slideshow">
          <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
          </div>
        </div>
    <div style="margin-top:130px"> 
    <section class="main-container col1-layout wow bounceInUp animated">
      <div class="main container">
        <div class="account-login">
        <form  method="post">
          <div class="page-title">
            <h2>Đăng Nhập</h2>
          </div>
          <fieldset class="col2-set">
            <div class="col-4 registered-users"><strong>Khách hàng đã đăng ký</strong>
              <div class="content">
                <p>Nếu bạn có tài khoản với chúng tôi, vui lòng đăng nhập.</p>
                <ul class="form-list">
                  <li>
                    <label for="email">Địa chỉ Email<span class="required">*</span></label>
                    <br>
                    <input type="text" title="Email Address" class="input-text" id="email" name="email">
                  </li>
                  <li>
                    <label for="pass">Mật khẩu<span class="required">*</span></label>
                    <br>
                    <input type="password" title="Password" id="password" name="password" class="input-text" >
                  </li>
                </ul>
                <p class="required">* Phần bắt buộc</p>
                <div class="buttons-set">
                  <button type="submit" name="nut" id="nut" value="Login" class="button login"><span>Đăng Nhập</span></button>
                  <a class="forgot-word" href="#">Quên mật khẩu?</a>
                  <a class="forgot-word" href="register.php">Đăng ký</a>
                 </div>
               </div>
              </div>
            </fieldset>
          </form>
          <?php
            switch($_POST['nut']){
              case 'Login':{
                if($_REQUEST['email']=="" || $_REQUEST['password']==""){
                  echo '<script>alert("Vui lòng nhập đầy đủ thông tin để đăng nhập")</script>';
                }
                else{
                  $p->checkLogin($_REQUEST['email'],$_REQUEST['password']);
                }
                break;
              }
            }
          ?>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>
    </section>
</div>
    <?php
    include('../footer.php')
    ?>

  </div>
  <div id="mobile-menu">
    <div class="mm-search">
      <form name="search">
        <div class="input-group">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="icon-search"></i></button>
          </div>
          <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
        </div>
      </form>
    </div>
    <ul>
      <li> </li>
      <li>
        <div class="home"><a href="#"><i class="icon-home"></i>Home</a> </div>
      </li>
      <li><a href="#">Pages</a>
        <ul>
          <li><a href="grid.html">Grid</a></li>
          <li> <a href="list.html">List</a></li>
          <li> <a href="product_detail.html">Product Detail</a></li>
          <li> <a href="shopping_cart.html">Shopping Cart</a></li>
          <li><a href="checkout.html">Checkout</a>

          </li>
          <li> <a href="wishlist.html">Wishlist</a></li>
          <li> <a href="dashboard.html">Dashboard</a></li>
          <li> <a href="multiple_addresses.html">Multiple Addresses</a></li>
          <li> <a href="about_us.html">About us</a></li>
          <li><a href="compare.html">Compare</a></li>
          <li><a href="login.html">Login</a></li>

          <li><a href="faq.html">FAQ</a></li>
          <li><a href="quick_view.html">Quick View</a></li>
          <li><a href="newsletter.html">Newsletter</a></li>
          <li><a href="blog.html">Blog</a>
            <ul>
              <li><a href="blog_detail.html">Blog Detail</a></li>
            </ul>
          </li>
          <li><a href="contact_us.html">Contact us</a></li>
          <li><a href="404error.html">404 Error Page</a></li>
        </ul>
      </li>
      <li><a href="grid.html">Women</a>
        <ul>
          <li> <a href="grid.html" class="">Stylish Bag</a>
            <ul>
              <li> <a href="grid.html" class="">Clutch Handbags</a></li>
              <li> <a href="grid.html" class="">Diaper Bags</a></li>
              <li> <a href="grid.html" class="">Bags</a></li>
              <li> <a href="grid.html" class="">Hobo handbags</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Material Bag</a>
            <ul>
              <li> <a href="grid.html">Beaded Handbags</a></li>
              <li> <a href="grid.html">Fabric Handbags</a></li>
              <li> <a href="grid.html">Handbags</a></li>
              <li> <a href="grid.html">Leather Handbags</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Shoes</a>
            <ul>
              <li> <a href="grid.html">Flat Shoes</a></li>
              <li> <a href="grid.html">Flat Sandals</a></li>
              <li> <a href="grid.html">Boots</a></li>
              <li> <a href="grid.html">Heels</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Jwellery</a>
            <ul>
              <li> <a href="grid.html">Bracelets</a></li>
              <li> <a href="grid.html">Necklaces &amp; Pendent</a></li>
              <li> <a href="grid.html">Pendants</a></li>
              <li> <a href="grid.html">Pins &amp; Brooches</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Dresses</a>
            <ul>
              <li> <a href="grid.html">Casual Dresses</a></li>
              <li> <a href="grid.html">Evening</a></li>
              <li> <a href="grid.html">Designer</a></li>
              <li> <a href="grid.html">Party</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Swimwear</a>
            <ul>
              <li> <a href="grid.html">Swimsuits</a></li>
              <li> <a href="grid.html">Beach Clothing</a></li>
              <li> <a href="grid.html">Clothing</a></li>
              <li> <a href="grid.html">Bikinis</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="grid.html">Men</a>
        <ul>
          <li> <a href="grid.html" class="">Shoes</a>
            <ul class="level1">
              <li class="level2 nav-6-1-1"><a href="grid.html">Sport Shoes</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Casual Shoes</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Leather Shoes</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">canvas shoes</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Dresses</a>
            <ul class="level1">
              <li class="level2 nav-6-1-1"><a href="grid.html">Casual Dresses</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Evening</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Designer</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Party</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Jackets</a>
            <ul class="level1">
              <li class="level2 nav-6-1-1"><a href="grid.html">Coats</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Formal Jackets</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Leather Jackets</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Blazers</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Watches</a>
            <ul class="level1">
              <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Casio</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Titan</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Tommy-Hilfiger</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Sunglasses</a>
            <ul class="level1">
              <li class="level2 nav-6-1-1"><a href="grid.html">Ray Ban</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Police</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Oakley</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Accesories</a>
            <ul class="level1">
              <li class="level2 nav-6-1-1"><a href="grid.html">Backpacks</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Wallets</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Laptops Bags</a></li>
              <li class="level2 nav-6-1-1"><a href="grid.html">Belts</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="grid.html">Electronics</a>
        <ul>
          <li> <a href="grid.html"><span>Mobiles</span></a>
            <ul>
              <li> <a href="grid.html"><span>Samsung</span></a></li>
              <li> <a href="grid.html"><span>Nokia</span></a></li>
              <li> <a href="grid.html"><span>IPhone</span></a></li>
              <li> <a href="grid.html"><span>Sony</span></a></li>
            </ul>
          </li>
          <li> <a href="grid.html" class=""><span>Accesories</span></a>
            <ul>
              <li> <a href="grid.html"><span>Mobile Memory Cards</span></a></li>
              <li> <a href="grid.html"><span>Cases &amp; Covers</span></a></li>
              <li> <a href="grid.html"><span>Mobile Headphones</span></a></li>
              <li> <a href="grid.html"><span>Bluetooth Headsets</span></a></li>
            </ul>
          </li>
          <li> <a href="grid.html"><span>Cameras</span></a>
            <ul>
              <li> <a href="grid.html"><span>Camcorders</span></a></li>
              <li> <a href="grid.html"><span>Point &amp; Shoot</span></a></li>
              <li> <a href="grid.html"><span>Digital SLR</span></a></li>
              <li> <a href="grid.html"><span>Camera Accesories</span></a></li>
            </ul>
          </li>
          <li> <a href="grid.html"><span>Audio &amp; Video</span></a>
            <ul>
              <li> <a href="grid.html"><span>MP3 Players</span></a></li>
              <li> <a href="grid.html"><span>IPods</span></a></li>
              <li> <a href="grid.html"><span>Speakers</span></a></li>
              <li> <a href="grid.html"><span>Video Players</span></a></li>
            </ul>
          </li>
          <li> <a href="grid.html"><span>Computer</span></a>
            <ul>
              <li> <a href="grid.html"><span>External Hard Disk</span></a></li>
              <li> <a href="grid.html"><span>Pendrives</span></a></li>
              <li> <a href="grid.html"><span>Headphones</span></a></li>
              <li> <a href="grid.html"><span>PC Components</span></a></li>
            </ul>
          </li>
          <li> <a href="grid.html"><span>Appliances</span></a>
            <ul>
              <li> <a href="grid.html"><span>Vaccum Cleaners</span></a></li>
              <li> <a href="grid.html"><span>Indoor Lighting</span></a></li>
              <li> <a href="grid.html"><span>Kitchen Tools</span></a></li>
              <li> <a href="grid.html"><span>Water Purifier</span></a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="grid.html">Furniture</a>
        <ul>
          <li> <a href="grid.html">Living Room</a>
            <ul>
              <li> <a href="grid.html">Racks &amp; Cabinets</a></li>
              <li> <a href="grid.html">Sofas</a></li>
              <li> <a href="grid.html">Chairs</a></li>
              <li> <a href="grid.html">Tables</a></li>
            </ul>
          </li>
          <li> <a href="grid.html" class="">Dining &amp; Bar</a>
            <ul>
              <li> <a href="grid.html">Dining Table Sets</a></li>
              <li> <a href="grid.html">Serving Trolleys</a></li>
              <li> <a href="grid.html">Bar Counters</a></li>
              <li> <a href="grid.html">Dining Cabinets</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Bedroom</a>
            <ul>
              <li> <a href="grid.html">Beds</a></li>
              <li> <a href="grid.html">Chest of Drawers</a></li>
              <li> <a href="grid.html">Wardrobes &amp; Almirahs</a></li>
              <li> <a href="grid.html">Nightstands</a></li>
            </ul>
          </li>
          <li> <a href="grid.html">Kitchen</a>
            <ul>
              <li> <a href="grid.html">Kitchen Racks</a></li>
              <li> <a href="grid.html">Kitchen Fillings</a></li>
              <li> <a href="grid.html">Wall Units</a></li>
              <li> <a href="grid.html">Benches &amp; Stools</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="grid.html">Kids</a></li>
      <li><a href="contact_us.html">Contact Us</a></li>
    </ul>
  </div>

  <!-- End Footer -->
  <!-- JavaScript -->
  <script type="text/javascript" src="../../js/jquery.min.js"></script>
  <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../js/parallax.js"></script>
  <script type="text/javascript" src="../../js/common.js"></script>
  <script type="text/javascript" src="../../js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="../../js/jquery.flexslider.js"></script>
  <script type="text/javascript" src="../../js/jquery.mobile-menu.min.js"></script>
</body>

<!-- Tieu Long Lanh Kute -->

</html>
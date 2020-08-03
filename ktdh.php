<?php
    include('helper.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KTDH</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .Ctopic{
        background-color: rgb(130, 206, 219);
    }
    .MLtopic{
        background-color: rgb(198, 130, 219);
    }
    .Pytopic{
        background-color: rgb(219, 166, 130);
    }
    .Untopic{
        background-color: rgb(200, 219, 130);
    }   
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container">

        <div class="logo float-left">
          <h1 class="text-light"><a href="index.php"><span>Hưngptit</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>


                    <li><a href="#about">Thông tin liên hệ</a></li>
                    <li class="drop-down active"><a href="#">Chủ đề</a>
                        <ul class="navbar-nav ml-auto">
                            <?php
                                $menus = menus();
                                $name = "Kỹ thuật đồ họa";
                                foreach($menus as $menu){
                                    if($menu['title'] == $name) echo "<li class='nav-item active'>";
                                    else echo "<li class='nav-item'>";
                                    
                                    echo "<a class='nav-link' href='".$menu['url']."'>";
                                    echo $menu['title'];
                                    echo "</a>";
                                    echo "</li>";
                                }
                            ?>
                            <!--
                            <li><a href="C.html">C/C++</a></li>
                            <li><a href="Python.html">Python</a></li>
                            <li class="drop-down"><a href="#">Machine learning</a>
                <ul>
                  <li><a href="#"></a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>

                            <li><a href="ML.html">Machine learning</a></li>
                            <li><a href="Unity.html">Lập trình game Unity</a></li>
                            <li><a href="#">Kỹ thuật đồ họa</a></li>
                            <li><a href="#">Kỹ thuật vi xử lý</a></li>
                            <li><a href="#">Cấu trúc dữ liệu và giải thuật</a></li>
                            <li><a href="#">Lập trình web</a></li>
                            -->
                        </ul>
                    </li>


                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs Ctopic">
      <div class="container">

        <div class="d-flex justify-content-center align-items-center">
          <h2>Kỹ thuật đồ họa</h2>

        </div>

      </div>
    </section><!-- End Blog Section -->
    
    <!-- ======= Blog Section ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        
        
        
        
        <h2 class="section-title">Tài liệu học tập</h2>
        <div class="content">
            <div class="container">
                <div class="col-lg-8 col-md-10 mx-auto">
                 <?php
                                $links = ktdh_links();
                                
                                foreach($links as $link){
                                    
                                    echo "<a href='".$link['url']."'target='_blank'>";
                                    echo "<h4>";
                                    echo $link['title'];
                                    echo "</h4>";
                                    echo "</a>";
                                    echo "<br>";
                                }
                    ?>
                    <!--a href="https://machinelearningcoban.com/" target="_blank"><h4>Blog Machine learning cơ bản (Vũ Hữu Tiệp)</h4></a><br>
                    <a href="https://www.d2l.ai/" target="_blank"><h4>Sách Dive into Deep learning (Nhiều tác giả)</h4></a><br>
                    <a href="https://d2l.aivivn.com/" target="_blank"><h4>Bản dịch tiếng Việt của sách Dive into Deep learning (Nhóm của anh Vũ Hữu Tiệp)</h4></a><br>
                    <a href="https://cs231n.github.io/convolutional-networks/?fbclid=IwAR0_9pqAqTXVzKczLV08nn0eQ7Z-jfCMDieK7VU1QrbmV_U74TVCO-ufvNw" target="_blank">
                    <h4>CS231n: Convolutional Neural Networks for Visual Recognition (Đại học Stanford)</h4></a><br-->
                </div>
                
            </div>
            
        </div>
        

        <hr>
    </div>
  </section><!-- End Blog Section -->
    <!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div id = "about" class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Thông tin liên hệ</h4>
            <p>Email: xuanhungtran2712@gmail.com</p>
            <a href="https://www.facebook.com/tran.xuanhung.758" target="_blank">Facebook cá nhân </a>
          </div>
          <!--div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div-->
        </div>
      </div>
    </div>

         
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
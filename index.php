<?php
    include('helper.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hungptit - Index</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <!--link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet"-->

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
        .iconImg {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light"><a href="index.php"><span>Hưngptit</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                 <!--a href="index.php"><img src="assets/img/h.png" alt="" class="img-fluid" ></a-->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.php">Trang chủ</a></li>


                    <li><a href="#about">Thông tin liên hệ</a></li>
                    <li class="drop-down"><a href="#">Chủ đề</a>
                        <ul class="navbar-nav ml-auto">
                            <?php
                                $menus = menus();
                                foreach($menus as $menu){
                                    echo "<li class='nav-item'>";
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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animated fadeInDown">Xin chào!</span>
                    </h2>
                    <p class="animated fadeInUp">Đây là khu vực học tập, không phải nơi giải trí!</p>
                    <!--a href="" class="btn-get-started animated fadeInUp">Read More</a-->
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animated fadeInDown">Ở đây có gì?</h2>
                    <p class="animated fadeInUp">Các bạn có thể tìm thấy những đường link tài liệu học tập của các môn học tại PTIT, thỉnh thoảng sẽ có những bài viết hướng dẫn xây dựng một vài ứng dụng nhỏ mà các bạn có thể tự làm ở nhà trong quá trình học tập</p>
                    <!--a href="" class="btn-get-started animated fadeInUp">Read More</a-->
                </div>
            </div>


            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section class="services">
            <div id="topic" class="container">

                <h2 class="section-title">Chủ đề</h2>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                            <!--div class="icon"><i class="bx bxl-dribbble"></i></div-->
                            <img src="assets/img/C.png" alt="" class="iconImg"></a>
                            <h4 class="title">
                                <a href="c.php"><br>C/C++</a>
                            </h4>
                            <p class="description">Thường là môn học mở đầu của sinh viên công nghệ thông tin, ngôn ngữ lập trình C++ rất hữu ích trong việc xây dựng tư duy lập trình cho người mới bắt đầu</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <!--div class="icon"><i class="bx bx-file"></i></div-->
                            <img src="assets/img/algorithm.png" alt="" class="iconImg"></a>
                            <h4 class="title">
                                <a href="algorithm.php"><br>Cấu trúc dữ liệu và giải thuật</a>
                            </h4>
                            <p class="description">Môn học nền tảng khá quan trọng với tất cả những ai học lập trình, giúp chúng ta có cái nhìn mạch lạc, khoa học khi giải quyết một bài toán</p>
                            
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <!--div class="icon"><i class="bx bx-tachometer"></i></div-->
                            <img src="assets/img/py.png" alt="" class="iconImg"></a>
                            <h4 class="title">
                                <a href="python.php"><br>Python</a>
                            </h4>
                            <p class="description">Một loại magic có năng lực biến mọi thứ trở nên đơn giản, ứng dụng nhiều trong machine learning </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box icon-box-blue">
                            <!--div class="icon"><i class="bx bx-world"></i></div-->
                            <img src="assets/img/ML.png" alt="" class="iconImg"></a>
                            <h4 class="title">
                                <a href="ML.php"><br>Trí tuệ nhân tạo</a>
                            </h4>
                            <p class="description">Hướng đi đầy triển vọng của công nghệ, từng bước hiện thực hóa ước mơ của con người về những cỗ máy có khả năng tư duy</p>
                            
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                            <!--div class="icon"><i class="bx bxl-dribbble"></i></div-->
                            <img src="assets/img/ktdh.png" alt="" class="iconImg"></a>
                            <h4 class="title">
                                <a href="ktdh.php"><br>Kỹ thuật đồ họa</a>
                            </h4>
                            <p class="description">Ở môn này, chúng ta học được những giải thuật để xử lý các đối tượng hình họa trong máy tính</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <!--div class="icon"><i class="bx bx-file"></i></div-->
                            <img src="assets/img/ktvxl.png" alt="" class="iconImg"></a>
                            <h4 class="title">
                                <a href="ktvxl.php"><br>Kỹ thuật vi xử lý</a>
                            </h4>
                            <p class="description">Môn học này giúp ta tìm hiểu về cấu tạo và cách thức hoạt động của những bộ vi xử lý. Bên cạnh đó, chúng ta cũng được làm quen với lập trình điều khiển bằng hợp ngữ</p>
                        </div>
                    </div>





                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <!--div class="icon"><i class="bx bx-tachometer"></i></div-->
                            <img src="assets/img/database.png" alt="" class="iconImg"></a>
                            <h4 class="title">
                                <a href="database.php"><br>Cơ sở dữ liệu</a>
                            </h4>
                            <p class="description">Khi xây dựng một hệ thống phần mềm hay web, cơ sở dữ liệu là thành phần không thể thiếu. Môn học này giúp chúng ta làm quen với những khái niệm và học cách thiết kế cơ sở dữ liệu</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box icon-box-blue">
                            <!--div class="icon"><i class="bx bx-world"></i></div-->
                            <img src="assets/img/web.svg" alt="" class="iconImg"></a>
                            <h4 class="title">
                                <a href="web.php"><br>Lập trình web</a>
                            </h4>
                            <p class="description">Môn học này trang bị cho chúng ta kiến thức cơ bản về html, css, php và một số framework thông dụng. Sau khi học xong, bạn có thể bắt đầu thiết kế trang web đầu tiên của mình</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Services Section -->



        <!-- ======= Purpose Section ======= -->
        <!--section class="features">
            <div class="container">

                <div class="section-title">
                    <h2>Mục tiêu</h2>
                    <p>Blog này được tạo ra với mục tiêu xây dựng một cộng đồng nhỏ với tiêu chí:</p>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="assets/img/features-2.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Không ngừng cải thiện bản thân</h3>
                        <p>
                            Tự học lập trình rất thú vị, nhưng thật khó để tiến bộ nhanh nếu không có người giúp đỡ, đặc biệt nếu bạn là người mới.
                        </p>
                        <p>
                            Tại đây, các bạn có thể tìm thấy những chia sẻ về kiến thức, về phương pháp học, về cách giải quyết những vấn đề mà chính mình đã từng gặp phải trong quá trình học. Từ đó, các bạn có thể rút ngắn thời gian trong việc tìm tài liệu và sửa lỗi, bạn sẽ "lên
                            tay" nhanh hơn.
                        </p>
                    </div>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="assets/img/features-1.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4">
                        <h3>Giúp đỡ lẫn nhau</h3>
                        <p>
                            Các bạn có thể bình luận, đặt câu hỏi dưới mỗi bài viết, mọi người cùng bàn luận về vấn đề được nêu ra, cùng nhau tìm ra giải pháp tốt nhất, cùng nhau tiến bộ.
                        </p>
                        <ul>
                            <li><i class="icofont-check"></i> Tác giả trả lời thường xuyên</li>
                            <li><i class="icofont-check"></i> Xóa những bình luận có nội dung xấu, tiêu cực</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section-->
        <!-- End Features Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        <div class="footer-newsletter">
            <div id="about" class="container">
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
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
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
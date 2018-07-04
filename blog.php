<?php
session_start();

include ('include/dbconnect.php');
include ('include/authentication.php');
?>
<!doctype html>
<html lang="en">
<head>
 	   <?php
        include('include/head.php');
        ?>
 
 </head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
				<?php
                include('include/header_menu.php');
                ?>
  </header>
  <!-- header end -->

  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly" align="center"> <br><br><br><img src="img/background/cheflogo1.jpg" alt="" width="1400px" height="950px"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
              <!--  <h1 class="title2">My Blog</h1>-->
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
               <!-- <h2 class="title3">Profesional Blog Page</h2>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><br><br><br><br>
  <!-- END Header -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- search option start -->
              <form action="#">
                <div class="search-option">
                  <input type="text" placeholder="Search...">
                  <button class="button" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                </div>
              </form>
              <!-- search option end -->
            </div>
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
                <h4>
				<?php 
					$full_name = $_SESSION['first_name']. ' '. $_SESSION['last_name'];
					echo 'Welcome'.' '. $full_name;
				?></h4><br><a href="logout.php">Log Out</a>
	               <div class="recent-post">
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
												   <img src="img/blog/slider2 (2).jpg" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
												   <img src="img/blog/slider1.jpg" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
												   <img src="img/blog/slider2 (1).jpg" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
												   <img src="img/blog/slider2 (3).jpg" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                </div>
              </div>
              <!-- recent end -->
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>categories</h4>
                <ul>
                  <li>
                    <a href="#">Restaurant</a>
                  </li>
                  <li>
                    <a href="#">Ordering</a>
                  </li>
                  <li>
                    <a href="#">Season</a>
                  </li>
                  <li>
                    <a href="#">Products</a>
                  </li>
                  <li>
                    <a href="#">Branchs</a>
                  </li>
                  <li>
                    <a href="#">Mr. Chef Salt</a>
                  </li>
                  <li>
                    <a href="#">Kitchen</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>archive</h4>
                <ul>
                  <li>
                    <a href="#">07 July 2018</a>
                  </li>
                  <li>
                    <a href="#">29 June 2018</a>
                  </li>
                  <li>
                    <a href="#">13 May 2018</a>
                  </li>
                  <li>
                    <a href="#">20 March 2018</a>
                  </li>
                  <li>
                    <a href="#">09 Fabruary 2018</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="single-blog-page">
              <div class="left-tags blog-tags">
                <div class="popular-tag left-side-tags left-blog">
                  <h4>popular tags</h4>
                  <ul>
                    <li>
                    <a href="#">Restaurant</a>
                  </li>
                  <li>
                    <a href="#">Ordering</a>
                  </li>
                  <li>
                    <a href="#">Season</a>
                  </li>
                  <li>
                    <a href="#">Products</a>
                  </li>
                  <li>
                    <a href="#">Branchs</a>
                  </li>
                  <li>
                    <a href="#">Mr. Chef Salt</a>
                  </li>
                  <li>
                    <a href="#">Kitchen</a>
                  </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
											<img src="img/blog/slider2 (2).jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">11 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>2018-03-05 / 09:10:16
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Post my imagine Items</a>
										</h4>
                  <p>
                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                  </p>
                </div>
                <span>
										<a href="blog-details.html" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- End single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
											<img src="img/blog/slider1.jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">7 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>2018-03-05 / 09:10:16
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Post my imagine Items</a>
										</h4>
                  <p>
                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                  </p>
                </div>
                <span>
										<a href="blog-details.html" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- Start single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
											<img src="img/blog/slider2 (1).jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">13 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>2018-03-05 / 09:10:16
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Post my imagine Items</a>
										</h4>
                  <p>
                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                  </p>
                </div>
                <span>
										<a href="blog-details.html" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- End single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
											<img src="img/blog/slider2 (3).jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">1 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>2018-03-05 / 09:10:16
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Post my imagine Items</a>
										</h4>
                  <p>
                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                  </p>
                </div>
                <span>
										<a href="blog-details.html" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- Start single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
											<img src="img/blog/Mr-Chef7-2-600x391.jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">10 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>2018-03-05 / 09:10:16
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Post my imagine Items</a>
										</h4>
                  <p>
                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                  </p>
                </div>
                <span>
										<a href="blog-details.html" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- End single blog -->
            <div class="blog-pagination">
              <ul class="pagination">
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->

  <div class="clearfix"></div>

  <!-- Start Footer bottom Area -->
  <footer>
		    <?php
        include('include/footer.php');
        ?>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>

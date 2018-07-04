<?php
include('include/dbconnect.php');
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

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        </div>
      </div>
    </div>
    </div>
 
  <!-- End Slider Area -->

  <!-- Start Registeration area -->
  <div style="height:100px;" align="center"></div>
  <div class="col-md-12"> <!--This colunm is the main contaniner-->
  <div class="col-md-3"> <!--This colunm is the left hand side--></div><!--End of left hand side-->
  <div class="col-md-6"> <!--This colunm is the right hand side-->
  <?php
  		include('include/_reg.php');
  ?>
  
      <form class="form-horizontal well" method="post" action="">
        <fieldset>
          <legend style="color:#F00; font-size:24px; font-family:Tahoma, Geneva, sans-serif;">User Registeration</legend>
      
           <div class="control-group">
            <label class="control-label" for="first_name"><i class="glyphicon glyphicon-user"></i> First Name</label>
            <div class="controls">
              <input type="text" class="form-control input-xlarge" id="first_name" name="first_name" required>
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="last_name"><i class="glyphicon glyphicon-user"></i> Last Name</label>
            <div class="controls">
              <input type="text" class="form-control input-xlarge" id="last_name" name="last_name" required>
              <p class="help-block"></p>
            </div>
          </div>
           	<div class="control-group">
            <label class="control-label" for="email"><i class="glyphicon glyphicon-envelope"></i> Email</label>
            <div class="controls">
              <input type="text" class="form-control input-xlarge" id="email" name="email" required>
              <p class="help-block"></p>
            </div>
          </div>
           <div class="control-group">
            <label class="control-label" for="password"><i class="glyphicon glyphicon-lock"></i> Password</label>
            <div class="controls">
              <input type="password" class="form-control input-xlarge" id="password" name="password" required>
              <p class="help-block"></p>
            </div>
          </div> <div class="control-group">
            <label class="control-label" for="c_password"><i class="glyphicon glyphicon-lock"></i> Confirm Password</label>
            <div class="controls">
              <input type="password" class="form-control input-xlarge" id="c_password" name="c_password" required>
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="phone"><i class="glyphicon glyphicon-phone"></i> Phone Number</label>
            <div class="controls">
              <input type="text" class="form-control input-xlarge" id="phone" name="phone" required>
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="gender"><i class="glyphicon glyphicon-user"></i> Gender</label>
            <div class="controls">
              <select id="gender" name="gender" class="form-control" required>
                <option>****Select****</option>
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="address"><i class="glyphicon glyphicon-map-marker"></i> Address</label>
            <div class="controls">
              <textarea class="form-control input-xlarge" id="address" name="address" rows="3"></textarea>
            </div>
          </div>
          
          
         <hr>
          <div class="form-actions">
            <button type="submit" name="register" class="btn btn-primary">Register</button>
            <button type="reset" class="btn">Reset</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
 
  </div><!--End of left right side-->
  
  </div> <!--End of main conteiner-->
 
  <!-- End Registeration area -->

  <!-- Start Service area -->
  
  <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->

              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->

              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

  <!-- our-skill-area start -->

        <!-- section-heading end -->

            <!-- single-skill start -->

            <!-- single-skill end -->
            <!-- single-skill start -->
            
            
            <!-- single-skill end -->
            <!-- single-skill start -->

            <!-- single-skill end -->
            <!-- single-skill start -->

            <!-- single-skill end -->

  <!-- our-skill-area end -->

  <!-- Faq area start -->
                <!-- Panel Default -->
                <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check4" style="text-align:center">
                                                <span class="acc-icons"></span>Become A Distributor
											</a>
										</h4>
                </div>
               
              </div>
              <!-- End Panel Default -->
          <!--Row -->
      <!-- end Row -->
    </div>
  </div>
  <!-- End Faq Area -->

  <!-- Start Wellcome Area -->
  
  <!-- End Wellcome Area -->

  <!-- Start team Area -->
  

  <!-- End Team Area -->

  <!-- Start reviews Area -->
  
  <!-- End reviews Area -->

  <!-- Start portfolio Area -->
 
        <!-- Start Portfolio -page -->
        
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
         
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
        
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->

          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->

          <!-- single-awesome-project end -->
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->
  <!-- start pricing area -->
  <!-- End pricing table area -->
  <!-- Start Testimonials -->
            <!-- Start testimonials Start -->
              <!-- start testimonial carousel -->
                <!-- End single item -->
                <!-- End single item -->
                <!-- End single item -->
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->
  <!-- Start Blog Area -->
  
          <!-- Start Left Blog -->
             <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <!-- Start Left Blog -->
          
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <!-- Start Right Blog-->
         
          <!-- End Right Blog-->
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->
  <!-- Start Suscrive Area -->
  
  <!-- End Suscrive Area -->
  <!-- Start contact Area -->
  
          <!-- Start contact icon column -->
          
          <!-- Start contact icon column -->
          
          <!-- Start contact icon column -->
          

          <!-- Start Google Map -->
         
            <!-- Start Map -->
         
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
                   <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

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

<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/admin1.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h6"><?php 
					$full_name = $_SESSION['first_name']. ' '. $_SESSION['last_name'];
					echo 'Welcome'.' '. $full_name;
				?></h1>
            <p>Developer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
         		<li class="active"><a href="index.php"> <i class="icon-home"></i>Home </a></li>
               <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"><i class="icon-list"></i>Blog</a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="blog_form.php">Post News</a></li>
                    <li><a href="#">Delete News</a></li>
                    <li><a href="#">Edit News</a></li>
                  	</ul>
                </li>
                 <li><a href="#websitedropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Website Pages</a>
                  <ul id="websitedropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </li>
                <li><a href="tables.php"> <i class="icon-grid"></i>Tables </a></li>
                <li><a href="charts.php"> <i class="fa fa-bar-chart"></i>Charts </a></li>
                <li><a href="forms.php"> <i class="icon-padnote"></i>Forms </a></li>
                <li><a href="login.php"> <i class="icon-logout"></i>LogOut </a></li>
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
        </ul>
      </nav>

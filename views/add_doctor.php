
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="../public/admin_style/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../public/admin_style/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="../public/admin_style/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="../public/admin_style/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="../public/admin_style/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="../public/admin_style/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="../public/admin_style/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="../public/admin_style/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="../public/admin_style/js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page widgets">
      <div class="full_container">
         <div class="inner_container">
           <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="../public/index.php?page=admin_dashboard"><img class="logo_icon img-responsive" src="../public/admin_style/images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="../public/admin_style/images/layout_img/admin.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6><?php echo $_SESSION['admin']['username']; ?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active"><a  href="../public/index.php?page=admin_dashboard"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard </span></a></li>

                     <li><a href="../public/index.php?page=add_doctor"> <i class="fa fa-heart white_color"></i><span>Add Doctor</span></a></li>
                     <li> <a href="../public/index.php?page=add_staff"> <i class="fa fa-plus white_color"></i><span>Add Staff </span></a></li> 
                     <li> <a href="../public/index.php?page=doctor_list"> <i class="fa fa-plus white_color"></i><span>Show Doctors </span></a></li> 
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="general_elements.html">> <span>General Elements</span></a></li>
                           <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                           <li><a href="icons.html">> <span>Icons</span></a></li>
                           <li><a href="invoice.html">> <span>Invoice</span></a></li>
                        </ul>
                     </li>
                    
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="../public/index.php?page=admin_dashboard"><img class="img-responsive" src="../public/admin_style/images/logo/hospital.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="../public/admin_style/images/layout_img/user_img.jpg" alt="#" /><span class="name_user"><?php echo $_SESSION['admin']['username']; ?></span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="../public/index.php?page=admin_login"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                            <a href="/patient_mgt_system/public/index.php?page=admin_dashboard" class="btn btn-primary">  Back </a>  
                           </div>
                        </div>
                     </div>

                                           <!--  Add Doctor Form Start  -->
                            <div class="container">
                                <h2 class="text-center m-3"> Add Doctor</h2> 
<form action="/patient_mgt_system/public/index.php?page=add_doctor" method="POST" class="container">
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
        </div>
        <div class="col-md-6">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="specialization">Specialization:</label>
            <input type="text" id="specialization" name="specialization" class="form-control" required>
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" class="form-control" required>
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="docFees">Doctor Fees:</label>
            <input type="number" name="docFees" id="docFees" class="form-control" placeholder="Doctor Fees">
        </div>
    </div>

    <button type="submit" class="btn btn-primary m-5">Add Doctor</button>
</form>
</div> 

                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2024 Designed by Mirai Infotech. All rights reserved.</p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="../public/admin_style/js/jquery.min.js"></script>
      <script src="../public/admin_style/js/popper.min.js"></script>
      <script src="../public/admin_style/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="../public/admin_style/js/animate.js"></script>
      <!-- select country -->
      <script src="../public/admin_style/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="../public/admin_style/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="../public/admin_style/js/Chart.min.js"></script>
      <script src="../public/admin_style/js/Chart.bundle.min.js"></script>
      <script src="../public/admin_style/js/utils.js"></script>
      <script src="../public/admin_style/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="../public/admin_style/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="../public/admin_style/js/custom.js"></script>
      <!-- calendar file css -->    
      <script src="../public/admin_style/js/semantic.min.js"></script>
      <script></script>
   </body>
</html>

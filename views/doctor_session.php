<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Doctor Dashboard </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="../public/doctor_dash_style/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../public/doctor_dash_style/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="../public/doctor_dash_style/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="../public/doctor_dash_style/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="../public/doctor_dash_style/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="../public/doctor_dash_style/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="../public/doctor_dash_style/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="../public/doctor_dash_style/css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="../public/index.php?page=doctor_dashboard"><img class="logo_icon img-responsive" src="../public/doctor_dash_style/images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="../public/doctor_dash_style/images/layout_img/doctor_icon.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6><?php echo $_SESSION['doctor']['username']; ?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active"><a  href="../public/index.php?page=doctor_dashboard"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard </span></a></li>
                     <li> <a href="../public/index.php?page=doctor_session"> <i class="fa fa-plus white_color"></i><span> Add Session   </span></a></li> 
                     <li> <a href="#"> <i class="fa fa-plus white_color"></i><span> Patient List   </span></a></li> 
                     <li> <a href="../public/index.php?page=search_patient"> <i class="fa fa-plus white_color"></i><span> Search Patient    </span></a></li> 
                     
                    
                     
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
                           <a href="../public/index.php?page=admin_dashboard"><img class="img-responsive" src="../public/doctor_dash_style/images/logo/hospital.png" alt="#" /></a>
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
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="../public/doctor_dash_style/images/layout_img/doctor_icon.jpg" alt="#" /><span class="name_user"><?php echo $_SESSION['doctor']['username']; ?></span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="../public/index.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
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
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">2500</p>
                                    <p class="head_couter">Welcome</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-clock-o blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">123.50</p>
                                    <p class="head_couter">Average Time</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-cloud-download green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">1,805</p>
                                    <p class="head_couter">Collections</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-comments-o red_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">54</p>
                                    <p class="head_couter">Comments</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="container">
        <h4>Add Your Session</h4>
        <form action="/patient_mgt_system/public/index.php?page=doctor_session" method="POST">
            <div class="form-group">
                <label for="session">Select Session:</label>
                <select class="form-control" name="sessions[]" multiple required>
                    
                    <option value="10 AM">10 AM </option>
                    <option value="10:30 AM">10:30 AM </option>
                    <option value="11 AM">11 AM </option>
                    <option value="11:30 AM">11:30 PM </option>
                    <option value="12 PM">12 PM </option>
                    <option value="12:30 PM">12:30 PM </option>
                    <option value="1:30 PM">1:30 PM </option>
                    <option value="2 PM">2 PM </option>
                    <option value="2:30 PM">2:30 PM </option>
                    <option value="3 PM">3 PM </option>
                    <option value="3:30 PM">3:30 PM </option>
                    <option value="4 PM">4 PM </option>
                    <option value="4:30 PM">4:30 PM </option>
                    <option value="5 PM">5 PM </option>
                    <option value="5:30 PM">5:30 PM </option>
                    <!-- Add more sessions as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="days">Select Days:</label><br>
                <label><input type="checkbox" name="days[]" value="Monday"> Monday</label><br>
                <label><input type="checkbox" name="days[]" value="Tuesday"> Tuesday</label><br>
                <label><input type="checkbox" name="days[]" value="Wednesday"> Wednesday</label><br>
                <label><input type="checkbox" name="days[]" value="Thursday"> Thursday</label><br>
                <label><input type="checkbox" name="days[]" value="Friday"> Friday</label><br>
                <label><input type="checkbox" name="days[]" value="Saturday"> Saturday</label><br>
                <label><input type="checkbox" name="days[]" value="Sunday"> Sunday</label><br>
            </div>
            <button type="submit" class="btn btn-primary">Add Session</button>
        </form>
    </div>




                     




                     </div>
                    
                    
                    
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                           Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="../public/doctor_dash_style/js/jquery.min.js"></script>
      <script src="../public/doctor_dash_style/js/popper.min.js"></script>
      <script src="../public/doctor_dash_style/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="../public/doctor_dash_style/js/animate.js"></script>
      <!-- select country -->
      <script src="../public/doctor_dash_style/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="../public/doctor_dash_style/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="../public/doctor_dash_style/js/Chart.min.js"></script>
      <script src="../public/doctor_dash_style/js/Chart.bundle.min.js"></script>
      <script src="../public/doctor_dash_style/js/utils.js"></script>
      <script src="../public/doctor_dash_style/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="../public/doctor_dash_style/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="../public/doctor_dash_style/js/custom.js"></script>
      <script src="../public/doctor_dash_style/js/chart_custom_style1.js"></script>
   </body>
</html>

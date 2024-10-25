
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
                           <h6><?php echo $_SESSION['doctor']['name']; ?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active"><a  href="../public/index.php?page=doctor_dashboard"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard </span></a></li>
                     <!-- <li> <a href="../public/index.php?page=doctor_session"> <i class="fa fa-plus white_color"></i><span> Add Session   </span></a></li>  -->
                     <li> <a href="../public/index.php?page=patient_list"> <i class="fa fa-plus white_color"></i><span> Patient List   </span></a></li> 
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
               


                     <div class="row">
    <div class="col-md-12">
    <a href="../public/index.php?page=doctor_dashboard" class="btn btn-primary">Back</a>
        <h1>Patient Details</h1>
       
         <?php if ($patientDetails['patient']): ?>
         <table>
       <thead>
        <tr>
            <th>Patient Personal Details</th>
            <th>Appointment Details</th>
            <th>Doctor Details</th>
            <th> Payment and Document Report </th>
        </tr>
          </thead>
         <tbody>
        <tr>
            <td>
                <strong>Name:</strong> <?php echo htmlspecialchars($patientDetails['patient']['name']); ?><br>
                <strong>DOB:</strong> <?php echo htmlspecialchars($patientDetails['patient']['dob']); ?><br>
                <strong>Gender:</strong> <?php echo htmlspecialchars($patientDetails['patient']['gender']); ?><br>
                <strong>Email:</strong> <?php echo htmlspecialchars($patientDetails['patient']['email']); ?><br>
                <strong>Phone Number:</strong> <?php echo htmlspecialchars($patientDetails['patient']['phone']); ?><br>
                <strong>Address:</strong> <?php echo htmlspecialchars($patientDetails['patient']['address']); ?><br>
            </td>
            <td>
                <strong>Appointment Date:</strong> <?php echo htmlspecialchars($patientDetails['patient']['appointment_date']); ?><br>
                <strong>Appointment Time:</strong> <?php echo htmlspecialchars($patientDetails['patient']['time_slot']); ?><br>
               
            </td>
            <td>
            <strong>Doctor Name:</strong> <?php echo htmlspecialchars($patientDetails['patient']['doctor_name']); ?><br>
                <strong>Doctor Specialization:</strong> <?php echo htmlspecialchars($patientDetails['patient']['doctor_specialization']); ?><br>
               </td>

                <td>
                <strong>Report and Document</strong> <a href="<?php echo htmlspecialchars($patientDetails ['patient']['document_path']);?>" class="btn btn-outline-primary">View Document And Report </a><br>
                <strong>Payment Amount:</strong> <?php echo htmlspecialchars($patientDetails['patient']['payment']); ?><br> </td>


        </tr><td></td>
           </tbody>
            </table>



            <h3>Add Medical  Details</h3>
            <form id="appointmentForm" action="../public/index.php?page=addMedicalHistory" method="POST">
            <div class="form-group">
                    <input type="hidden" class="form-control" id="patient_id" name="patient_id" value=" <?php echo htmlspecialchars($patientDetails['patient']['id']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="symptoms">Symptoms</label>
                    <input type="text" class="form-control" id="symptoms" name="symptoms" required>
                </div>

                <div class="form-group">
                    <label for="nextAppointment">Next Appointment Date</label>
                    <input type="date" class="form-control" id="nextAppointment" name="nextAppointment" required>
                    <script>	
                    const today = new Date().toISOString().split('T')[0];
                    document.getElementById('nextAppointment').setAttribute('min', today);
                    </script>
                </div>
                <div class="form-group">
                    <label for="medicines">Medicines</label>
                    <input type="text" class="form-control" id="medicines" name="medicines" required>
                </div>
                <div class="form-group">
                    <label for="Diet">Diet</label>
                    <textarea id="diet" name="diet" rows="3" cols="100" placeholder="Diet Plan">  </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save Details</button>
            </form>

        <?php else: ?>
            <p>Patient not found.</p>
        <?php endif; ?>
    </div>


  <!-- Show Medical History -->
<div class="col-md-8 m-2">
    <h2>Patient Medical Data</h2>

    <?php if (!empty($patientDetails['medicalHistory'])): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Symptoms</th>
                    <th>Next Appointment Date</th>
                    <th>Medicines</th>
                    <th>Diet</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($patientDetails['medicalHistory'] as $history): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($history['symptoms']); ?></td>
                        <td><?php echo htmlspecialchars($history['nextAppointment']); ?></td>
                        <td><?php echo htmlspecialchars($history['medicines']); ?></td>
                        <td><?php echo htmlspecialchars($history['diet']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Patient medical data not found.</p>
    <?php endif; ?>
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

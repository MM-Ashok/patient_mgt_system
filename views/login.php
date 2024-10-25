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
      <title>Patient Login </title>
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
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="../public/admin_style/images/logo/logo.png" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                     <form action="" METHOD="POST">
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Username</label>
                              <input type="text" name="username" placeholder="username" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" />
                           </div>
                           <!-- <div class="field">
                              <label class="label_field hidden">hidden label</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                              <a class="forgot" href="">Forgotten Password?</a>
                           </div> -->
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt m-3" type ="submit">Sign In  </button>
                              
                           </div>
                           <div class="field">
                           <a class="btn btn-sm btn-outline-success" href="../public/index.php">Back </a>
                              <a class="forgot" href="../public/index.php?page=register">Have no Account/- Register Here </a>
                           </div>


                        </fieldset>
                     </form>
                  </div>
               </div>
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
      <!-- nice scrollbar -->
      <script src="../public/admin_style/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="../public/admin_style/js/custom.js"></script>
   </body>
</html>
<!-- views/sidebar.php -->
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
         <li class="active"><a href="../public/index.php?page=admin_dashboard"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard </span></a></li>
         <li><a href="../public/index.php?page=add_doctor"><i class="fa fa-heart white_color"></i><span>Add Doctor</span></a></li>
         <li><a href="../public/index.php?page=add_staff"><i class="fa fa-plus white_color"></i><span>Add Staff </span></a></li>
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
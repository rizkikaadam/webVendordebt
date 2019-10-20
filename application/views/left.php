<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url(); ?>Home" class="site_title"><i class="fa fa-database"></i> <span>Vendor Debt</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <!--<div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>-->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>Home"><i class="fa fa-home"></i> Home </a></li>
                  <li><a href="<?php echo base_url(); ?>vendor" ><i class="fa fa-database"></i> Data Vendor</a></li>
                  <li><a><i class="fa fa-file-text-o"></i> Data Invoice <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>invoice">Semua</a></li>
                      <li><a href="<?php echo base_url(); ?>pembayaran">Pembayaran</a></li>
                      <li><a href="<?php echo base_url(); ?>download">Download</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-gears"></i> Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>vendor/kode_vendor">Kode Vendor</a></li>
                      <li><a href="<?php echo base_url(); ?>vendor/kode_berkas">Kode Berkas</a></li>
                      <li><a href="<?php echo base_url(); ?>vendor/kode_faktur_pajak">Kode Faktur</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-exchange"></i> History</a></li> 
                  <li><a href="<?php echo base_url(); ?>Login/logout"><i class="fa fa-power-off"></i> Logout</a></li>            
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
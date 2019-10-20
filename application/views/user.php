<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vendor Debt </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>assets/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="<?php echo base_url(); ?>assets/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="col-md-12">
          <div class="col-middle">
            <div class="text-center text-center">
              <br>
              <h1 class="error-number">Vendor Debt</h1>
              <h2>Database rekapitulasi pembayaran hutang vendor</h2>
              <br>
              <!--<a href="<?php echo base_url() ?>Login" class="btn btn-info btn-lg" ><i class="fa fa-users"></i> Guest</a>-->
              <a href="<?php echo base_url() ?>Login" class="btn btn-success btn-lg"><i class="fa fa-user"></i> Admin Login</a>
              <!--<p>This page you are looking for does not exist <a href="#">Report this?</a>-->
              </p>
              <div class="mid_center">
                <h3>Riwayat Pembayaran</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-users"></i> Data Pembayaran</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li>
                      <!--<li><a href="#" data-toggle="modal" data-target=".bs-example-modal-pembayaran"><button type="button" class="btn btn-warning"><i class="fa fa-money"></i> Pembayaran</button></a></li>-->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start project list -->
                    <table id="datatable-responsive" class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">No.</th>
                          <th style="width: 10%">No. Invoice</th>
                          <th style="width: 10%">Vendor</th>
                          <th style="width: 10%">Nilai Invoice</th>
                          <th style="width: 15%">Sisa</th>
                          <th style="width: 15%">Umur Invoice</th>
                          <th style="width: 15%">#</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                      //awal menampilkan data
                      $no = 1;
                      foreach ($data_pembayaran->result() as $data) {
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $data->kd_invoice; ?></td>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $data->nilai_invoice; ?></td>
                          <td><span class="label label-info label-lg"><i class="fa fa-money"></i> Rp</span> <?php echo $data->sisa; ?></td>
                          <td><?php echo "$data->umur Hari"; ?></td>
                          <td><a href="#" class="btn btn-success btn-xs"><i class="fa fa-file"></i> Detail Histori Pembayaran </a></td>
                        </tr>
                        <?php
                      }
                        //akhir menampilkan data 
                        ?>
                      </tbody>
                    </table>
                    <!-- end project list -->
                  </div>
                </div>
        <!-- /page content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script src="<?php echo base_url(); ?>assets/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/pdfmake/build/vfs_fonts.js"></script>
  </body>
</html>

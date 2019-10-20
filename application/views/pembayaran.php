        <!-- page content -->

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-users"></i> Data Pembayaran</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="<?php echo base_url(); ?>pembayaran/tambah_data"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data Pembayaran</button></a>
                      </li>
                      <!--<li><a href="#" data-toggle="modal" data-target=".bs-example-modal-pembayaran"><button type="button" class="btn btn-warning"><i class="fa fa-money"></i> Pembayaran</button></a></li>-->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>.</p>

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
                          <th style="width: 15%">#Edit</th>
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
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <?php
                      }
                        //akhir menampilkan data 
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

       
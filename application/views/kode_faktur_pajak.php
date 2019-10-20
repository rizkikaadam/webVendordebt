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
                    <h2><i class="fa fa-users"></i> Data Kode Faktur Pajak</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="<?php echo base_url(); ?>Vendor/tambah_data_kode_faktur_pajak"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</button></a>
                      </li>
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
                          <th style="width: 10%">Kode Faktur Pajak</th>
                          <th style="width: 20%">Deskripsi</th>
                          <th style="width: 10%">Pasal PPh</th>
                          <th style="width: 15%">Nilai Pajak</th>
                          <th style="width: 20%">#Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      //awal menampilkan data
                      $no = 1;
                      foreach ($data_fp->result() as $kode) {

                                $np=$kode->nilai_pajak;
                                $nilaipajak=$np*100;
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $kode->kd_faktur_pajak; ?></td>
                          <td><?php echo $kode->deskripsi; ?></td>
                          <td><?php echo $kode->pasal; ?></td>
                          <td><?php echo $nilaipajak; ?>%</td>
                          <td>
                            <a href="<?php echo base_url() ?>Vendor/edit_kode_faktur_pajak/<?php echo $kode->id_faktur_pajak; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="<?php echo base_url() ?>Vendor/hapus_kode_faktur_pajak/<?php echo $kode->id_faktur_pajak; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
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
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

       
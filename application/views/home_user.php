<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
                      <h1>Selamat Datang!</h1>
                      <p>Sistem Informasi Rekapitulasi Hutang Vendor</p>
                      <a href="<?php echo base_url(); ?>Vendor/tambah_data"><button type="button" class="btn btn-dark btn-lg"><i class="fa fa-edit"></i> Tambah Data Vendor</button></a>
                      <a href="<?php echo base_url(); ?>invoice/tambah_data"><button type="button" class="btn btn-primary btn-lg"><i class="fa fa-edit"></i> Tambah Data Invoice</button></a>
                      <a href="<?php echo base_url(); ?>histori/tambah_data_home"><button type="button" class="btn btn-warning btn-lg"><i class="fa fa-edit"></i> Pembayaran</button></a>
                    </div>
                  </div>
                  <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard_graph x_panel">
                  <div class="row x_title">
                    <div class="col-md-6">
                      <h3>Riwayat Pembayaran Terakhir</h3>
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                  <div class="x_content">
                    
                    <!-- start project list -->
                    <table id="datatable-responsive" class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">No.</th>
                          <th style="width: 15%">Kode Invoice</th>
                          <th style="width: 15%">Tanggal Pembayaran</th>
                          <th style="width: 10%">Vendor</th>
                          <th>Image</th>
                          <th style="width: 20%">#Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      //awal menampilkan data
                      $no = 1;
                      foreach ($data_histori->result() as $histori) {
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $histori->kd_invoice; ?></td>
                          <td><?php echo $histori->tanggal; ?></td>
                          <td><?php echo $histori->nama_vendor; ?></td>
                          <td>
                            <div class="col-md-2 col-sm-2 col-xs-6 profile_left">
                              <div class="profile_img">
                                <div id="crop-avatar">
                                      <a href="#" data-toggle="modal" data-target=".bs-example-modal-image-<?php echo $histori->id_histori; ?>" ><img class="img-responsive avatar-view" src="<?php echo base_url() ?>assets/file/<?php echo $histori->image; ?>" alt="Avatar" title="Change the avatar"></a>
                                </div>
                                <!--tampil gambar-->
                                  <div class="modal fade bs-example-modal-image-<?php echo $histori->id_histori; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel2"></h4>
                                        </div>
                                        <div class="modal-body">
                                            <img class="img-responsive" src="<?php echo base_url() ?>assets/file/<?php echo $histori->image; ?>" alt="Avatar" title="Change the avatar">
                                        </div>
                                    </div>
                                  </div>
                                  <!--akhir pembayaran data-->
                              </div>
                            </div>   
                          </td>
                          <td>
                            <a href="<?php echo base_url() ?>Histori/tampil/<?php echo $histori->id_invoice; ?>" class="btn btn-success btn-xs"><i class="fa fa-file"></i> Detail</a>
                            <!--<a href="<?php echo base_url() ?>invoice/edit/<?php echo $histori->id_histori; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="<?php echo base_url() ?>invoice/hapus/<?php echo $histori->id_histori; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>-->
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
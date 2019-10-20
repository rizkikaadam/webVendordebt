       <?php
       foreach ($data_invoice->result() as $invoice) {
                $kd_invoice=$invoice->kd_invoice;
                $nama_vendor=$invoice->nama_vendor;
                $tanggal=$invoice->tanggal;
                $kode_berkas=$invoice->kode_berkas;
                $nilai_invoice=$invoice->nilai_invoice;
                $sisa=$invoice->sisa;
                $umur=$invoice->umur;
                $bahan_baku_vendor=$invoice->bahan_baku_vendor;
              }
       ?>

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
              <div class="col-md-10 col-sm-10 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Invoice</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th >No. Invoice</th>
                          <th >Tanggal Masuk (Y-m-d)</th>
                          <th >Kode Berkas</th>
                          <th >Nilai Invoice</th>
                          <th >Vendor</th>
                          <th >Bahan Baku Vendor</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"><?php echo "$kd_invoice";?></th>
                          <td><?php echo "$tanggal";?></td>
                          <td><?php echo "$kode_berkas";?></td>
                          <td><?php echo "$nilai_invoice";?></td>
                          <td><?php echo "$nama_vendor";?></td>
                          <td><?php echo "$bahan_baku_vendor";?></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-users"></i> Data Pembayaran</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li>
                    <a> <button type="button" class="btn btn-info"><i class="fa fa-download"></i> Download</button> </a></li>
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
                          <th style="width: 20%">Tanggal Pembayaran</th>
                          <th >Image</th>
                          <th >Nilai Bayar (Rupiah)</th>
                          <th style="width: 20%">Keterangan</th>
                          <th style="width: 15%">#Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      //awal menampilkan data
                      $no = 1;
                      foreach ($data_histori->result() as $data_histori) {
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $data_histori->tanggal; ?></td>
                          <td>
                            
                            <div class="col-md-2 col-sm-2 col-xs-6 profile_left">
                              <div class="profile_img">
                                <div id="crop-avatar">
                                      <a href="#" data-toggle="modal" data-target=".bs-example-modal-image-<?php echo $data_histori->id_pembayaran; ?>" ><img class="img-responsive avatar-view" src="<?php echo base_url() ?>assets/file/<?php echo $data_histori->image; ?>" alt="Avatar" title="Change the avatar"></a>
                                </div>
                                <!--tampil gambar-->
                                  <div class="modal fade bs-example-modal-image-<?php echo $data_histori->id_pembayaran; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel2"></h4>
                                        </div>
                                        <div class="modal-body">
                                            <img class="img-responsive" src="<?php echo base_url() ?>assets/file/<?php echo $data_histori->image; ?>" alt="Avatar" title="Change the avatar">
                                        </div>
                                    </div>
                                  </div>
                                  <!--akhir pembayaran data-->
                              </div>
                            </div>

                          </td>
                          <td><?php echo $data_histori->nilai_bayar; ?></td>
                          <td><?php echo $data_histori->keterangan; ?></td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            <!--
                            <a href="<?php echo base_url() ?>histori/edit/<?php echo $data_histori->id_histori; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="<?php echo base_url() ?>histori/hapus/<?php echo $data_histori->id_histori; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>-->
                          </td>
                        </tr>
                        <?php
                      }
                        //akhir menampilkan data 
                        ?>
                      </tbody>
                    </table>
                    <!-- end project list -->
                    <!--pembayaran data-->
                      <div class="modal fade bs-example-modal-pembayaran" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel2">Masukan Pembayaran</h4>
                            </div>
                            <div class="modal-body">
                              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>histori/tambah_proses">
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Invoice <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="kd_invoice">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="date" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="kd_invoice">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="file" id="first-name" required="required" name="image">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <textarea class="form-control" rows="3" name="keterangan"></textarea>
                                    </div>
                                  </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>

                          </div>
                        </div>
                      </div>
                      <!--akhir pembayaran data-->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

       
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
                    <h2><i class="fa fa-users"></i> Data Invoice</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="<?php echo base_url(); ?>invoice/tambah_data"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data Invoice</button></a>
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
                          <th style="width: 10%">Tanggal Masuk (Y-m-d)</th>
                          <th style="width: 10%">Kode Berkas</th>
                          <th style="width: 10%">Kode Faktur Pembayaran</th>
                          <th style="width: 10%">Nilai Invoice</th>
                          <!--<th>Image</th>-->
                          <th style="width: 10%">Vendor</th>
                          <!--<th>Status Pembayaran</th>-->
                          <th style="width: 15%" >Riwayat Pembayaran</th>
                          <!--<th style="width: 20%">Keterangan</th>-->
                          <th style="width: 15%">#Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      //awal menampilkan data
                      $no = 1;
                      foreach ($data_invoice->result() as $data_invoice1) {
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $data_invoice1->kd_invoice; ?></td>
                          <td><?php echo $data_invoice1->tanggal; ?></td>
                          <td><?php echo $data_invoice1->kode_berkas; ?></td>
                          <td><?php echo $data_invoice1->kd_faktur_pajak; ?></td>
                          <td><?php echo $data_invoice1->nilai_invoice; ?></td>
                          <!--<td>
                            <div class="col-md-2 col-sm-2 col-xs-6 profile_left">
                              <div class="profile_img">
                                <div id="crop-avatar">
                                      <a href="#" data-toggle="modal" data-target=".bs-example-modal-image-<?php echo $data_invoice1->id_invoice; ?>" ><img class="img-responsive avatar-view" src="<?php echo base_url() ?>assets/file/<?php echo $data_invoice1->image; ?>" alt="Avatar" title="Change the avatar"></a>
                                </div>
                                <!--tampil gambar
                                  <div class="modal fade bs-example-modal-image-<?php echo $data_invoice1->id_invoice; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel2"></h4>
                                        </div>
                                        <div class="modal-body">
                                            <img class="img-responsive" src="<?php echo base_url() ?>assets/file/<?php echo $data_invoice1->image; ?>" alt="Avatar" title="Change the avatar">
                                        </div>
                                    </div>
                                  </div>
                                  <!--akhir pembayaran data
                              </div>
                            </div>
                          </td>-->
                          <td><?php echo $data_invoice1->nama_vendor; ?></td>
                          <!--<td><span class="label label-danger label-lg"><i class="fa fa-close"></i> Belum Lunas</span> <span class="label label-primary"><i class="fa fa-check"></i> Lunas</span></td>-->
                          <td>
                            <?php
                            /*
                              foreach ($data_tanggal->result() as $histori_tanggal) {
                                ?>
                                <a href="<?php echo base_url() ?>Histori/tampil/<?php echo $data_invoice1->id_invoice; ?>" class="btn btn-default btn-xs"><i class="fa fa-image"></i> <?php echo $histori_tanggal->tanggal ;?> </a>
                            <?php
                              }*/
                            ?>
                            <a href="<?php echo base_url() ?>Histori/tampil/<?php echo $data_invoice1->id_invoice; ?>" class="btn btn-success btn-xs"><i class="fa fa-file"></i> Detail Histori Pembayaran </a>
                          </td>
                          <!--<td><?php echo $data_invoice1->keterangan; ?></td>-->
                          <td>
                            <a href="#" data-toggle="modal" data-target=".bs-example-modal-pembayaran-<?php echo $data_invoice1->kd_invoice; ?>" class="btn btn-warning btn-small"><i class="fa fa-money"></i> Pembayaran </a><br/>

                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            <!--
                            <a href="#<?php echo base_url() ?>invoice/edit/<?php echo $data_invoice1->id_invoice; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="<?php echo base_url() ?>invoice/hapus/<?php echo $data_invoice1->id_invoice; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>-->
                          </td>
                        </tr>
                        <?php
                      }
                        //akhir menampilkan data 
                        ?>
                      </tbody>
                    </table>
                    <!-- end project list -->
                    <?php

                    foreach ($data_invoice->result() as $invoice) {
                      ?>
                      <!--pembayaran data-->
                              <div class="modal fade bs-example-modal-pembayaran-<?php echo $invoice->kd_invoice; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">

                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                      </button>
                                      <h4 class="modal-title" id="myModalLabel2">Masukan Pembayaran</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>histori/tambah_proses">
                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Invoice <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input disabled="disabled" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="kd_invoice" value="<?php echo $invoice->kd_invoice; ?>">
                                              <input type="hidden" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="id_invoice" value="<?php echo $invoice->id_invoice; ?>">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vendor <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="text"disabled="disabled" id="first-name" class="form-control col-md-7 col-xs-12" name="sisa" value="<?php echo $invoice->nama_vendor; ?>">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bahan Baku Vendor <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="text"disabled="disabled" id="first-name" class="form-control col-md-7 col-xs-12" name="sisa" value="<?php echo $invoice->bahan_baku_vendor; ?>">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sisa Bayar <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="text"disabled="disabled" id="first-name" class="form-control col-md-7 col-xs-12" name="sisa" value="<?php echo $invoice->sisa; ?>">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nilai Bayar (Rupiah) <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="text"id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nilai_bayar" >
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bukti Bayar <span class="required">*</span>
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
                                      
                                    </div>
                                    <div class="modal-footer">
                                      <button class="btn btn-primary" type="reset">Batal</button>
                                      <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                              <!--akhir pembayaran data-->
                      <?php
                    }
                    ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

       
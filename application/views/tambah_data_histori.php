<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-edit"></i> Form Tambah Data Vendor</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <!-- Smart Wizard -->
                    <p>Berikut ini adalah halaman untuk menambahkan vendor kedalam database.</p>
                    <?php
                                $jmlh_data_invoice=$data_invoice->num_rows();
                                if ($jmlh_data_invoice<=0) {
                                  echo "<label class='control-label'>Data Invoice Belum Ada</label>  <a href='#'>Klik Disini Untuk Menambahkan Invoice</a>";
                                } else {
                                  ?>
                        <form enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>Pembayaran/tambah_proses">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Invoice <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="select2_single form-control" tabindex="-1" name="id_invoice" id="id_invoice">
                                  <option></option>
                                  <?php
                                  //awal menampilkan data
                                  $no = 1;
                                  foreach ($data_invoice->result() as $data_invoice) {
                                    echo "<option value='$data_invoice->id_invoice'>$data_invoice->kd_invoice || $data_invoice->sisa</option>";
                                  }
                                  ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sisa (Rupiah)</label>
                            <div class="coba col-md-6 col-sm-6 col-xs-12">
                                <label class="control-label">Rp...</label>
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
                          <?php
                                }
                          ?>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>      
        <!-- /page content -->
<!-- footer content -->
<footer>
          <div class="pull-right">
            <!--Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>-->
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
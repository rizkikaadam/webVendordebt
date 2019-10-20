<?php


foreach ($data_invoice->result() as $invoice) {
  $id_invoice=$invoice->id_invoice;
  $kd_invoice=$invoice->kd_invoice;
  $id_detail_vendor=$invoice->id_detail_vendor;
  $id_kode_berkas=$invoice->id_kode_berkas;
  $id_faktur_pajak=$invoice->id_faktur_pajak;
  $keterangan=$invoice->keterangan;
}

?>
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
                    <h2><i class="fa fa-edit"></i> Form Ubah Data invoice</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <!-- Smart Wizard -->
                    <p>Berikut ini adalah halaman untuk mengubah invoice kedalam database.</p>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>invoice/edit_proses">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Invoice <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="kd_invoice" value="<?php echo $kd_invoice ;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Berkas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" name="kd_berkas">
                            <option></option>
                            <?php
                              //awal menampilkan data
                              $no = 1;
                              foreach ($data_berkas->result() as $berkas) {
                                echo "<option value='$berkas->id_kode_berkas'>$berkas->kode_berkas</option>";
                              }
                              ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Vendor</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" name="id_vendor">
                            <option></option>
                            <?php
                              //awal menampilkan data
                              $no = 1;
                              foreach ($data_vendor->result() as $data_vendor) {
                                echo "<option value='$data_vendor->id_vendor'>$data_vendor->nama_vendor</option>";
                              }
                              ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Faktur Pajak <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" name="kd_faktur_pajak">
                            <option></option>
                            <?php
                              //awal menampilkan data
                              $no = 1;
                              foreach ($data_fp->result() as $fp) {
                                echo "<option value='$fp->id_faktur_pajak'>$fp->kd_faktur_pajak</option>";
                              }
                              ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nilai Invoice <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nilai_invoice">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="3" name="keterangan"><?php echo $keterangan;?></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="text" name="id_invoice" value="<?php echo $id_invoice; ?>">
                          <button class="btn btn-primary" type="reset">Batal</button>
                          <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                      </div>
                      </form>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>      
        <!-- /page content -->
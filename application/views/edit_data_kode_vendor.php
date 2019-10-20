<?php
foreach ($data_kode_vendor->result() as $kode) {
  $id_kode_vendor=$kode->id_kode_vendor;
  $kode_vendor=$kode->kode_vendor;
  $deskripsi=$kode->deskripsi;
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
                    <h2><i class="fa fa-edit"></i> Form Tambah Edit Kode Vendor</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <!-- Smart Wizard -->
                    <p>Berikut ini adalah halaman untuk menambahkan kode vendor kedalam database.</p>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>Vendor/edit_kode_vendor_proses">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Vendor<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="id_kode_vendor" value="<?php echo "$id_kode_vendor";?>">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="kode_vendor" value="<?php echo "$kode_vendor";?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Deskripsi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="3" name="deskripsi"><?php echo "$deskripsi";?></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
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
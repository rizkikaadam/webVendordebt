<?php

  foreach ($data_vendor->result() as $vendor) {
  $id_vendor=$vendor->id_vendor;
  $nama_vendor = $vendor->nama_vendor;
  $alamat_vendor = $vendor->alamat_vendor;
  $jenis_vendor = $vendor->jenis_vendor;
  $pj_vendor = $vendor->pj_vendor;
  $telp_vendor = $vendor->telp_vendor;
  $kota_vendor=$vendor->kota_vendor;
  $no_rekening=$vendor->no_rekening;
  $email_vendor=$vendor->email_vendor;
  $ket = $vendor->ket;
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
                    <h2><i class="fa fa-edit"></i> Form Tambah Data Vendor</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <!-- Smart Wizard -->
                    <p>Berikut ini adalah halaman untuk menambahkan vendor kedalam database.</p>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>Vendor/tambah_kode_vendor_proses">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Vendor <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="id_vendor" value="<?php echo $id_vendor;?>" >
                          <input disabled="disabled"  type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nama_vendor" value="<?php echo $nama_vendor;?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pemilik <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="disabled"  type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nama_vendor" value="<?php echo $pj_vendor;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Vendor <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" name="id_kode_vendor">
                            <option></option>
                            <?php

                            foreach ($kode_vendor->result() as $kode) {
                                echo "<option value='$kode->id_kode_vendor'>$kode->kode_vendor || $kode->deskripsi</option>";
                            }
                            ?>
                          </select>
                          <label>Silahkan pilih kode vendor yang sesuai.</label>
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
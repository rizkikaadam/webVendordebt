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
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <!--<h3><i class="fa fa-user"></i> Profil Atlet</h3>-->
              </div>

            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="atlet.php"><i class="fa fa-users"></i> Data Vendor </a><small>Profil</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      </li>
                      <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>-->
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view"  src="<?php echo base_url() ?>assets/file/picture.jpeg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3><?php echo "$nama_vendor" ;?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo "$alamat_vendor" ;?>
                        </li>
                        <li>
                          <i class="fa fa-phone user-profile-icon"></i> <?php echo "$telp_vendor" ;?>
                        <li class="m-top-xs">
                          <i class="fa fa-cc-visa user-profile-icon"></i> <?php echo "$no_rekening" ;?>
                        </li>
                        <li class="m-top-xs">
                          <i class="fa fa-envelope user-profile-icon"></i> <?php echo "$email_vendor" ;?>
                        </li>
                      </ul>

                      <a class="btn btn-warning" href="<?php echo base_url() ?>Vendor/edit/<?php echo $id_vendor; ?>"><i class="fa fa-edit m-right-xs"></i>  Edit Data Vendor</a>
                      <a class="btn btn-success" href="<?php echo base_url() ?>Vendor/tambah_kode_vendor/<?php echo $id_vendor; ?>" ><i class="fa fa-plus m-right-xs"></i>  Tambah Kode Vendor</a>
                      <br />
                      <a class="btn btn-info" href="<?php echo base_url() ?>Vendor/D_pdf" ><i class="fa fa-download"></i>  Download</a>
                      <br />
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-file"></i> Kode Vendor</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"><i class="fa fa-file"></i> Invoice</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content2" aria-labelledby="profile-tab">
                          <p>Berikut ini adalah data invoice yang dimiliki oleh vendor <?php echo $nama_vendor ;?>.</p>
                          <table id="datatable-responsive" class="table table-striped table-bordered projects">
                              <thead>
                                <tr>
                                  <th style="width: 1%">No.</th>
                                  <th style="width: 20%">Kode Invoice</th>
                                  <th >Nilai Invoice</th>
                                  <th >Sisa</th>
                                  <th >Keterangan</th>
                                  <th style="width: 20%">#Edit</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                              $no=0;
                              foreach ($data_invoice->result() as $kode_invoice){
                                $no++;
                              ?>
                                <tr>
                                  <td><?php echo $no; ?></td>
                                  <td>
                                    <?php echo $kode_invoice->kd_invoice; ?>
                                  </td>
                                  <td>
                                    <?php echo $kode_invoice->nilai_invoice; ?>
                                  </td>
                                  <td>
                                    <?php echo $kode_invoice->sisa; ?>
                                  </td>
                                  <td>
                                    <?php echo $kode_invoice->keterangan; ?>
                                  </td>
                                  <td>
                                    <a href="<?php echo base_url() ?>Histori/tampil/<?php echo $kode_invoice->id_invoice; ?>" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i> Lihat </a>
                                  </td>
                                </tr>
                                <?php
                              }//menutup menampilkan data invoice
                                ?>
                              </tbody>
                            </table>
                            <!-- end user document -->
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab"> 
                          <p>
                              <div class="x_content bs-example-popovers">
                                <div class="alert alert-info alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                  </button>
                                  <strong>Data Berhasil Di Ubah!</strong> Keterangan.
                                </div>
                                <!--<div class="alert alert-warning alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                  </button>
                                  <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                                </div>-->
                                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                  </button>
                                  <strong>Data Berhasil Di Hapus!</strong> Keterangan.
                                </div>

                              </div>
                            </p>
                            <!-- start user document -->
                            <table id="datatable-responsive" class="table table-striped table-bordered projects">
                              <thead>
                                <tr>
                                  <th style="width: 1%">No.</th>
                                  <th style="width: 20%">Kode Vendor</th>
                                  <th style="width: 50%">Deskripsi</th>
                                  <th style="width: 20%">#Edit</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $no=0;
                                foreach ($kode_vendor->result() as $kode){
                                  $no++;
                                ?>
                                  <tr>
                                    <td><?php echo $no;?></td>
                                    <td>
                                      <a><?php echo "$kode->id_kode_vendor"; ?></a>
                                    </td>
                                    <td>
                                      <a><?php echo "$kode->deskripsi"; ?></a>
                                    </td>
                                    <td>
                                      <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                    </td>
                                  </tr>
                                <?php
                                }
                                ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
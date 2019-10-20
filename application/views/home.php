<?php
$jumlah_vendor=$hitung_vendor->num_rows();
$jumlah_invoice=$hitung_invoice->num_rows();
//$jumlah_vendorlunas=$hitung_invoicelunas->num_rows();
//$jumlah_vendorbelumlunas=$hitung_invoicebelumlunas->num_rows();
?>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-plus-square"></i></div>
                  <div class="count"><?php echo $jumlah_vendor; ?></div>
                  
                  <p>Data Vendor Tersimpan</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-file"></i></div>
                  <div class="count"><?php echo $jumlah_invoice; ?></div>
                  
                  <p>Data Invoice Tersimpan</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-file"></i></div>
                  <div class="count"><?php echo $jumlah_invoice; ?></div>
                  
                  <p>Data Invoice Belum Lunas Tersimpan</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-file"></i></div>
                  <div class="count"><?php echo $jumlah_vendor; ?></div>
                  
                  <p>Data Histori Pemabayaran Tersimpan</p>
                </div>
              </div>
            </div>
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
                    <!-- end project list -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
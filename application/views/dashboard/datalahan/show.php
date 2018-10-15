<?php foreach($data as $item){ ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Detail Data Lahan ID : <?=$item->id; ?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url('datalahan') ?>">Data Lahan</a></li>
      <li class="active"><?=$title?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content content-show">
    <div class="row">
      <!-- right column -->
      <div class="col-xs-12 col-md-8 col-md-offset-2">
        <!-- Horizontal Form -->
        <?php
          if ($this->session->flashdata('errors')){
              echo '<div class="alert alert-danger">';
              echo $this->session->flashdata('errors');
              echo "</div>";
          }
        ?>
        
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Data Pribadi</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->        
          <div class="box-body">
            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-12 text-center">
                  <div class="row">
                    <div class="show-img-datalahan">
                      <img src="<?=''.base_url().'assets/img/avatar5.png'?>">
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-md-6">
                  <div class="row">
                    
                    <div class="wrap-data-lahan2">
                      <div class="form-group">
                        <label class="control-label">ID</label>
                        <div class="data-show-datalahan">000001</div>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Nama Pemilik</label>
                        <div class="data-show-datalahan">Probo Krismantoro</div>
                      </div>
                      <div class="form-group">
                        <label class="control-label">No Ktp</label>
                        <div class="data-show-datalahan">3102014403910312</div>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Tanggal Lahir</label>
                        <div class="data-show-datalahan">01/01/1990</div>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Kode Desa</label>
                        <div class="data-show-datalahan">Sungai Kunyit Laut</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-md-6">
                  <div class="row">
                    <div class="form-group">
                      <label class="control-label">Alamat</label>
                      <div class="data-show-datalahan">Jalan Masjid Attaqwa</div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Pekerjaan</label>
                      <div class="data-show-datalahan">Wiraswasta</div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Keterangan Tambahan</label>
                      <div class="data-show-datalahan">lorem ipsum lorem ipsum lorem ipsum</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Data Lahan</h3>
          </div>
          <div class="box-body">
            <div class="col-xs-12 col-md-4">
              <div class="row">
                <div class="ket-form-grup">
                  <span>Lokasi Tanah</span>
                </div>
                <div class="form-group">
                  <label class="control-label">RT/RW</label>
                  <div class="data-show-datalahan">01/02</div>
                </div>
                <div class="form-group">
                  <label class="control-label">Kelurahan</label>
                  <div class="data-show-datalahan">Kembangan Utara</div>
                </div>
                <div class="form-group">
                  <label class="control-label">Kecamatan</label>
                  <div class="data-show-datalahan">Kembangan</div>
                </div>

                <div class="ket-form-grup">
                  <span>Data Bangunan</span>
                </div>
                <div class="form-group">
                  <div class="data-show-datalahan"><a href="#">databangunan1.pdf</a></div>
                  <div class="data-show-datalahan"><a href="#">databangunan2.pdf</a></div>
                  <div class="data-show-datalahan"><a href="#">databangunan3.pdf</a></div>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-md-4">
              <div class="row">
                <div class="ket-form-grup">
                  <span>Data Tanah</span>
                </div>
                <div class="form-group">
                  <label class="control-label">Luas Tanah M²</label>
                  <div class="data-show-datalahan">1000</div>
                </div>
                <div class="form-group">
                  <label class="control-label">Surat Tanda Bukti</label>
                  <div class="data-show-datalahan">SHM</div>
                </div>
                <div class="form-group">
                  <label class="control-label">Upload Tanda Bukti</label>
                  <div class="data-show-datalahan"><a href="#">tandabukti1.pdf</a></div>
                </div>

                <div class="ket-form-grup">
                  <span>Data Tanaman</span>
                </div>
                <div class="form-group">
                  <div class="data-show-datalahan"><a href="#">datatanaman1.pdf</a></div>
                  <div class="data-show-datalahan"><a href="#">datatanaman2.pdf</a></div>
                  <div class="data-show-datalahan"><a href="#">datatanaman3.pdf</a></div>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-md-4">
              <div class="row">
                <div class="ket-form-grup">
                  <span>Dokumentasi Bangunan</span>
                </div>
                <div class="form-group">
                  <label class="control-label">KTP</label>
                  <div class="data-show-datalahan"><a href="#">ktp.pdf</a></div>
                </div>
                <div class="form-group">
                  <label class="control-label">Buku Tabungan</label>
                  <div class="data-show-datalahan"><a href="#">bukutabungan.pdf</a></div>
                </div>
                <div class="form-group">
                  <label class="control-label">Kwitansi Pembayaran</label>
                  <div class="data-show-datalahan"><a href="#">kwitansipembayaran.pdf</a></div>
                </div>
                <div class="form-group">
                  <label class="control-label">Foto Pembayaran</label>
                  <div class="data-show-datalahan"><a href="#">fotopembayaran.pdf</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Data Pembayaran</h3>
          </div>
          <div class="box-body">
            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <div class="row">
                    <div class="form-group">
                      <label class="control-label">Danom/Tahap</label>
                      <div class="data-show-datalahan">1234</div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Validasi Pembayaran</label>
                      <div class="data-show-datalahan">1234</div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Dokumen Validasi</label>
                      <div class="data-show-datalahan">1234</div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Status Pembayaran</label>
                      <div class="data-show-datalahan">Telah Dibayar</div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Status Ganti Rugi</label>
                      <div class="data-show-datalahan">Uang</div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-md-6">
                  <div class="row">
                    <div class="form-group">
                      <label class="control-label">Tanggal Bayar</label>
                      <div class="data-show-datalahan">
                        <table class="table table-bordered">
                          <tr>
                            <td>12/08/2018</td>
                            <td>Rp 200.000,-</td>
                          </tr>
                          <tr>
                            <td>15/10/2018 </td>
                            <td>Rp 300.000,-</td>
                          </tr>
                          <tr>
                            <td><b>Total</b></td>
                            <td><b>Rp 500.000,-</b></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Tanggal Kurang Bayar</label>
                      <div class="data-show-datalahan">
                        <table class="table table-bordered">
                          <tr>
                            <td>19/11/2018</td>
                            <td>Rp 400.000,-</td>
                          </tr>
                          <tr>
                            <td><b>Total</b></td>
                            <td><b>Rp 400.000,-</b></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Nominal Pembayaran</label>
                      <div class="data-show-datalahan">Rp 900.000,-</div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label">Dokumen Pembayaran</label>
                      <div class="data-show-datalahan"><a href="#">dokumenpembayaran.pdf</a></div>
                    </div>
                  </div>
                </div>
                <div class="btn-group" style="margin-top: 30px;">
                  <a href="<?php echo base_url('datalahan') ?>" class="btn btn-default pull-right">Kembali</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<?php } ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title?>
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('datalahan') ?>">Data Lahan</a></li>
        <li class="active">Tambah Data Lahan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Data Lahan</h3>
             
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal create-datalahan" method="post" action="<?php echo base_url('datalahan/store');?>">
              <div class="box-body">
                 <?php


                if ($this->session->flashdata('errors')){
                    echo '<div class="alert alert-danger">';
                    echo $this->session->flashdata('errors');
                    echo "</div>";
                }


                ?>
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="create-page1">
                    <div class="col-xs-12 col-md-6">
                      <div class="row">
                        <div class="form-group">
                          <label for="noktp" class="col-sm-4 control-label">No KTP</label>

                          <div class="wrap-control-input col-sm-8">
                            <input type="number" name="no_ktp" class="form-control" id="noktp" placeholder="No KTP">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="namapemilik" class="col-sm-4 control-label">Nama Pemilik</label>

                          <div class="wrap-control-input col-sm-8">
                            <input type="text" name="nama_pemilik" class="form-control" id="namapemilik" placeholder="Nama Pemilik">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="datepickertgllahir" class="col-sm-4 control-label">Tanggal Lahir</label>

                          <div class="wrap-control-input col-sm-8">
                            <input type="text" class="form-control pull-right" id="datepickertgllahir" placeholder="Tanggal Lahir">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="kodedesa" class="col-sm-4 control-label">Kode Desa</label>

                          <div class="wrap-control-input col-sm-8">
                            <select class="form-control" name="kode_desa" id="kodedesa">
                              <option>Sungai Kunyit Laut</option>
                              <option>Sungai Bundung Laut</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="alamat" class="col-sm-4 control-label">Alamat</label>

                          <div class="wrap-control-input col-sm-8">
                            <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="pekerjaan" class="col-sm-4 control-label">Pekerjaan</label>

                          <div class="wrap-control-input col-sm-8">
                            <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="kettambahan" class="col-sm-4 control-label">Keterangan Tambahan</label>

                          <div class="wrap-control-input col-sm-8">
                            <textarea class="form-control" rows="3" placeholder="Keterangan Tambahan" name="ket_tambahan" id="kettambahan"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                     <div class="col-xs-12 col-md-6">
                      <div class="row">
                        <div class="box-create-datalahan">
                          <div class="box-img-create-datalahan">
                            <img src=<?=''.base_url().'assets/img/no-photo.jpg'?> id="outputimg">
                            
                          </div>
                          <div class="box-upload-create-datalahan">
                            <input type="file" name="" onchange="loadFile(event)">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 ">
                      <div class="row">
                        <a data-toggle="tab" href="#create-page2" class="btn btn-info pull-right">
                          Next
                        </a>
                      </div>
                      
                    </div>
                  </div>

                  <div class="tab-pane fade" id="create-page2">
                    <div class="col-xs-12 col-md-6">
                      <div class="row">
                        <div class="ket-form-grup">
                          <span>Lokasi Tanah</span>
                        </div>
                        <div class="form-group">
                          <label for="rtrw" class="col-sm-4 control-label">RT/RW</label>

                          <div class="wrap-control-input col-sm-8">
                            <input type="text" name="rtrw" class="form-control" id="rtrw" placeholder="RT/RW">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="kelurahan" class="col-sm-4 control-label">Kelurahan</label>

                          <div class="wrap-control-input col-sm-8">
                            <input type="text" name="kelurahan" class="form-control" id="kelurahan" placeholder="Kelurahan">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="kecamatan" class="col-sm-4 control-label">Kecamatan</label>

                          <div class="wrap-control-input col-sm-8">
                            <input type="text" name="kecamatan" class="form-control" id="kecamatan" placeholder="Kecamatan">
                          </div>
                        </div>

                        <div class="ket-form-grup">
                          <span>Lokasi Tanah</span>
                        </div>
                        <div class="form-group">
                          <label for="luastanah" class="col-sm-4 control-label">Luas Tanah M2</label>

                          <div class="wrap-control-input col-sm-8">
                            <input type="text" name="luastanah" class="form-control" id="luastanah" placeholder="Luas Tanah M2">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="surattandabukti" class="col-sm-4 control-label">Surat Tanda Bukti</label>

                          <div class="wrap-control-input col-sm-8">
                            <select class="form-control" name="surattandabukti" id="surattandabukti">
                              <option>SHM</option>
                              <option>SPT</option>
                              <option>SKT</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="uploadtandabukti" class="col-sm-4 control-label">Upload Tanda Bukti</label>

                          <div class="wrap-control-input col-sm-8">
                            <input type="file" name="uploadtandabukti" class="form-control" id="uploadtandabukti" placeholder="Upload Tanda Bukti">
                          </div>
                        </div>

                        <div class="ket-form-grup">
                          <span>Data Bangunan</span>
                        </div>
                        <div class="form-group data-bangunan">
                          <div id="data_bangunan">
                            <label class="col-sm-4 control-label">Jenis</label>

                            <div class="wrap-control-input col-sm-5  data-bangunan_">
                              <input type="text" name="databangunan" class="form-control" id="databangunan">
                            </div>
                            <div class="wrap-control-input col-sm-3">
                              <input type="text" name="databangunan_" class="form-control" id="databangunan_">
                            </div>
                          </div>

                          <div class="add-data-bangunan">
                            <i class="fa fa-fw fa-plus"></i>
                          </div>
                        </div>

                        <div class="ket-form-grup">
                          <span>Data Tanaman</span>
                        </div>
                        <div class="form-group data-bangunan">
                          <div id="data_tanaman">
                            <label class="col-sm-4 control-label">Jenis</label>

                            <div class="wrap-control-input col-sm-5  data-bangunan_">
                              <input type="text" name="datatanaman" class="form-control" id="datatanaman">
                            </div>
                            <div class="wrap-control-input col-sm-3">
                              <input type="text" name="datatanaman_" class="form-control" id="datatanaman_">
                            </div>
                          </div>

                          <div class="add-data-bangunan">
                            <i class="fa fa-fw fa-plus"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                    

                    <div class="col-xs-12 ">
                      <div class="row">
                        <a data-toggle="tab" href="#create-page1" class="btn btn-info pull-left">
                          Prev
                        </a>
                        <a data-toggle="tab" href="#create-page3" class="btn btn-info pull-right">
                          Next
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="create-page3">
                    <div class="col-xs-12 col-md-6">
                      <div class="row">
                        <div class="ket-form-grup">
                          <span>Data Nominatif</span>
                        </div>
                        <div class="form-group">
                          
                            <label class="col-sm-4 control-label">Danom/Tahap</label>

                            <div class="wrap-control-input col-sm-5 data-bangunan_">
                              <input type="text" name="danomtahap" class="form-control" id="danomtahap">
                            </div>
                            <div class="wrap-control-input col-sm-3">
                              <input type="text" name="danomtahap_" class="form-control" id="danomtahap_">
                            </div>
                        </div>

                        <div class="ket-form-grup">
                          <span>Validasi</span>
                        </div>
                        <div class="form-group">
                          
                            <label class="col-sm-4 control-label">Validasi Pembayaran</label>

                            <div class="wrap-control-input col-sm-5 data-bangunan_">
                              <input type="text" name="validasipembayaran" class="form-control" id="validasipembayaran">
                            </div>
                            <div class="wrap-control-input col-sm-3">
                              <input type="text" name="validasipembayaran_" class="form-control" id="validasipembayaran_">
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="dokumenvalidasi" class="col-sm-4 control-label">Dokumen Validasi</label>

                          <div class="wrap-control-input col-sm-8">
                            <input type="file" name="dokumenvalidasi" class="form-control" id="dokumenvalidasi" placeholder="Dokumen Validasi">
                          </div>
                        </div>

                        <div class="ket-form-grup">
                          <span>Pembayaran</span>
                        </div>
                        <div class="form-group">
                          <label for="statuspembayaran" class="col-sm-4 control-label">Status Pembayaran</label>

                          <div class="wrap-control-input col-sm-8">
                            <select class="form-control" name="status_pembayaran" id="statuspembayaran">
                              <option>Telah Dibayar</option>
                              <option>Belum DIbayar</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="statusgantirugi" class="col-sm-4 control-label">Status Ganti Rugi</label>

                          <div class="wrap-control-input col-sm-8">
                            <select class="form-control" name="status_ganti_rugi" id="statusgantirugi">
                              <option>Uang</option>
                              <option>Relokasi</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group data-bangunan">
                          <div id="">
                            <label for="tanggalbayar" class="col-sm-4 control-label">Tanggal Bayar</label>

                            <div class="wrap-control-input col-sm-4 data-bangunan_">
                              <input type="text" class="form-control pull-right" id="tanggalbayar" placeholder="Tanggal Bayar">
                            </div>
                            <div class="wrap-control-input col-sm-4">
                              <input type="text" name="tanggalbayarbiaya" class="form-control" id="">
                            </div>
                            <div class="add-data-bangunan">
                              <i class="fa fa-fw fa-plus"></i>
                            </div>
                          </div>
                        </div>
                        <div class="form-group data-bangunan">
                          <div id="">
                            <label for="tanggalkurangbayar" class="col-sm-4 control-label">Tanggal Kurang Bayar (Optional)</label>

                            <div class="wrap-control-input col-sm-4 data-bangunan_">
                              <input type="text" class="form-control pull-right" id="tanggalkurangbayar" placeholder="Tanggal Kurang Bayar">
                            </div>
                            <div class="wrap-control-input col-sm-4">
                              <input type="text" name="tanggalkurangbayarbiaya" class="form-control" id="">
                            </div>
                            <div class="add-data-bangunan">
                              <i class="fa fa-fw fa-plus"></i>
                            </div>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label for="nominalpembayaran" class="col-sm-4 control-label">Nominal Pembayaran</label>

                          <div class="wrap-control-input col-sm-8">
                            <input type="text" name="nominalpembayaran" class="form-control" id="nominalpembayaran" placeholder="Nominal Pembayaran">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Dokumen Pembayaran</label>

                          <div class="col-sm-8">
                            <div class="row">
                              <div class="wrap-control-input col-sm-12">
                                <label for="ktpupload">ktp</label>
                                <input type="file" name="ktpupload" class="form-control" id="ktpupload" placeholder="KTP">
                              </div>
                              <div class="wrap-control-input col-sm-12" style="margin-top: 10px;">
                                <label for="bukutabungan">Buku Tabungan</label>
                                <input type="file" name="bukutabungan" class="form-control" id="bukutabungan" placeholder="Buku Tabungan">
                              </div>
                              <div class="wrap-control-input col-sm-12" style="margin-top: 10px;">
                                <label for="kwitansipembayaran">Kwitansi Pembayaran</label>
                                <input type="file" name="kwitansipembayaran" class="form-control" id="kwitansipembayaran" placeholder="Kwitansi Pembayaran">
                              </div>
                              <div class="wrap-control-input col-sm-12" style="margin-top: 10px;">
                                <label for="fotopembayaran">Foto Pembayaran</label>
                                <input type="file" name="fotopembayaran" class="form-control" id="fotopembayaran" placeholder="Foto Pembayaran">
                              </div>
                            </div>
                          </div>
                          
                        </div>

                        <div class="ket-form-grup">
                          <span>Dokumentasi Bangunan</span>
                        </div>
                        <div class="form-group data-bangunan">
                          <div id="dokumentasi_bangunan">
                            
                            <div class="wrap-control-input col-sm-5">
                              <input type="file" name="datatanaman" class="form-control" id="datatanaman">
                            </div>
                            
                          </div>

                          <div class="add-data-bangunan">
                            <i class="fa fa-fw fa-plus"></i>
                          </div>
                        </div>

                       
                      </div>
                    </div>

                    

                    <div class="col-xs-12 ">
                      <div class="row">
                        <a data-toggle="tab" href="#create-page2" class="btn btn-info pull-left">
                          Prev
                        </a>
                        <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
                      </div>
                      
                    </div>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          
        </div>
      
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <script type="text/javascript">
        $( document ).ready( function () {
          //Date picker
          $('#datepickertgllahir').datepicker({
            autoclose: true
          });
          $('#tanggalbayar').datepicker({
            autoclose: true
          });
          $('#tanggalkurangbayar').datepicker({
            autoclose: true
          });
            $( ".form-horizontal" ).validate( {
                rules: {
                    no_ktp: {
                      required: true,
                      number: true
                    },
                    nama_pemilik: "required"
                },
                messages: {
                    no_ktp: {
                        required: "Silahkan Masukkan Nomor KTP",
                        number: "Input Harus Berupa Nomor"
                    },
                    nama_pemilik: "Silahkan Masukkan Nama Pemilik"
                },
                errorElement: "em",
                errorPlacement: function ( error, element ) {
                    // Add the `help-block` class to the error element
                    error.addClass( "help-block" );

                    // Add `has-feedback` class to the parent div.form-group
                    // in order to add icons to inputs
                    element.parents( ".wrap-control-input" ).addClass( "has-feedback" );

                    if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.parent( "label" ) );
                    } else {
                        error.insertAfter( element );
                    }

                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if ( !element.next( "span" )[ 0 ] ) {
                        $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
                    }
                },
                success: function ( label, element ) {
                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if ( !$( element ).next( "span" )[ 0 ] ) {
                        $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
                    }
                },
                highlight: function ( element, errorClass, validClass ) {
                    $( element ).parents( ".wrap-control-input" ).addClass( "has-error" ).removeClass( "has-success" );
                    $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
                },
                unhighlight: function ( element, errorClass, validClass ) {
                    $( element ).parents( ".wrap-control-input" ).addClass( "has-success" ).removeClass( "has-error" );
                    $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
                }
            } );

            
        } );
        var loadFile = function(event) {
              var output = document.getElementById('outputimg');
              output.src = URL.createObjectURL(event.target.files[0]);
            };
    </script>
  </div>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title?>
        <!-- <small>advanced tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?=$title?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>  
            <div class="box-add-lahan">
              <a href="<?php echo base_url('datalahan/create') ?>"><i class="fa fa-fw fa-plus"></i> <span>Tambah Data Lahan</span></a>
              <div class="box-export-excel">
                <a href="#">
                  <i class="fa fa-file-excel-o"></i>
                  <span>Export to excel</span>
                </a>
              </div>
              <div class="form-filter-autosum">
                <form method="post" action="<?php echo base_url('datalahan/filter/') ?>">
                  <label for="filterautosum">Filter Autosum</label>
                  <input type="text" name="" id="filterautosum" class="form-control">
                  <button type="Submit" class="btn btn-info btn-flat">Submit</button>
                </form>
              </div>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-datalahan">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Pemilik</th>
                  <th>No KTP</th>
                  <th>Kode Desa</th>
                  <!-- <th>Alamat</th> -->
                  <th>Pekerjaan</th>
                  <th>Luasan Tanah</th>
                  <th>Surat Tanda Bukti</th>
                  <th>Danom/Tahap</th>
                  <th>Validasi Pembayaran</th>
                  <th>Nominal Pembayaran</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $item):?>
                <tr>
                  <td><?=$item->id; ?></td>
                  <td><?=$item->nama_pemilik; ?></td> 
                  <td><?=$item->no_ktp; ?></td>
                  <td>Sungai Kunyit Laut</td>
                  <!-- <td>Jalan Masjid Attaqwa</td> -->
                  <td>Wiraswasta</td>
                  <td>1000 m2</td>
                  <td>SHM</td>
                  <td>1234</td>
                  <td>1234</td>
                  <td>Rp 1.000.000.000</td>
                  
                  <td>
                    <div class="btn-group">
                      <a type="button" href="<?php echo base_url('datalahan/show/'.$item->id) ?>" class="btn btn-default" title="View Detail"><i class="fa fa-eye"></i></a>
                      <!-- <a type="button" href="<?php echo base_url('datalahan/edit/'.$item->id) ?>" class="btn btn-default" title="Edit"><i class="fa fa-edit"></i></a> -->
                      <a type="button" href="#" class="btn btn-default" title="Edit"><i class="fa fa-edit"></i></a>
                      <a type="button" data-toggle="modal" data-target="#modal-default<?=$item->id; ?>" class="btn btn-default" title="Delete"><i class="fa fa-trash"></i></a>
                      <div class="modal fade" id="modal-default<?=$item->id; ?>">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Konfirmasi</h4>
                            </div>
                            <div class="modal-body">
                              <p>Apa anda yakin ingin menghapus Data Lahan ID : <?=$item->id; ?>?</p>
                            </div>
                            <div class="modal-footer">
                              <a type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</a>
                              <a href="<?php echo base_url('datalahan/delete/'.$item->id) ?>" type="button" class="btn btn-primary">Hapus</a>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </td>
                </tr>
                <?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nama Pemilik</th>
                  <th>No KTP</th>
                  <th>Kode Desa</th>
                  <!-- <th>Alamat</th> -->
                  <th>Pekerjaan</th>
                  <th>Luasan Tanah</th>
                  <th>Surat Tanda Bukti</th>
                  <th>Danom/Tahap</th>
                  <th>Validasi Pembayaran</th>
                  <th>Nominal Pembayaran</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <script>
    $( document ).ready( function () {
      $('#example1').DataTable( {
          "order": [[ 0, "desc" ]]
      } );
      
    })
  </script>
  </div>

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
                  <th>Pekerjaan</th>
                  <th>Luasan Tanah</th>
                  <th>Surat Tanda Bukti</th>
                  <th>Danom/Tahap</th>
                  <th>Validasi Pembayaran</th>
                  <th>Nominal Pembayaran</th>
                  
                </tr>
                </thead>
                <tbody>
                
                <tr>
                  <td>000019</td>
                  <td>Probo Krismantoro</td>
                  <td>3102014403910312</td>
                  <td>Sungai Kunyit Laut</td>
                  <td>Wiraswasta</td>
                  <td>1200m2</td>
                  <td>SHM</td>
                  <td>1234</td>
                  <td>1234</td>
                  <td>Rp 1.000.000,-</td>
                </tr>
                <tr>
                  <td>000019</td>
                  <td>Probo Krismantoro</td>
                  <td>3102014403910312</td>
                  <td>Sungai Kunyit Laut</td>
                  <td>Wiraswasta</td>
                  <td>500m2</td>
                  <td>SHM</td>
                  <td>1234</td>
                  <td>1234</td>
                  <td>Rp 500.000,-</td>
                </tr>
                <tr>
                  <td>000019</td>
                  <td>Probo Krismantoro</td>
                  <td>3102014403910312</td>
                  <td>Sungai Kunyit Laut</td>
                  <td>Wiraswasta</td>
                  <td>100m2</td>
                  <td>SHM</td>
                  <td>1234</td>
                  <td>1234</td>
                  <td>Rp 80.000,-</td>
                </tr>
                
                </tbody>
                <tfoot>
                <tr>
                  <th colspan="9">Total</th>
                  
                  <th>Rp 1.580.000,-</th>
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
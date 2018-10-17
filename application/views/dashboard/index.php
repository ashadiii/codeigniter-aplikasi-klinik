
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Aplikasi Estimasi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>  


            <div class="box-header with-border">
              <h3 class="box-title">List Klinik</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama Klinik</th>
                    <th>Action</th>
                  </tr>
                  <?php $i = 1; foreach ($data as $item):?>
                  <tr>
                    <td><?=$i++; ?>.</td>
                    <td><?=$item->nama_klinik; ?></td>
                    <td>
                      <a href="<?php echo base_url('dataarrivalguest/show/'.$item->id_klinik) ?>">View</a>
                    </td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
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
  </div>
  

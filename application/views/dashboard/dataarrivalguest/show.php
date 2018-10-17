
  

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
        <li class="active"><?=$title?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
           
            <div class="box-header with-border">
              <h3 class="box-title"><?=$title?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Delivery From</th>
                    <th>Item</th>
                    <th>Weight</th>
                    <th>Qty</th>
                    <th>Date</th>
                  </tr>
                  <?php $i = 1; foreach ($data as $item):?>
                  <tr>
                    <td><?=$i++; ?>.</td>
                    <td><?=$item->nama_klinik; ?></td>
                    <td><?=$item->delivery_from; ?></td>
                    <td><?=$item->item; ?></td>
                    <td><?=$item->weight; ?></td>
                    <td><?=$item->qty; ?></td>
                    <td><?=$item->tgl_arrival; ?></td>
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
  

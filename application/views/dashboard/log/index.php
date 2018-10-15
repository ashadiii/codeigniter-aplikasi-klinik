
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
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Log ID</th>
                  <th>Username</th>
                  <th>Action</th>
                  <th>Time</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $item):?>
                <tr>
                  <td><?=$item->log_id?></td>
                  <td><?=$item->log_user?></td>
                  <td><?=$item->log_desc?></td>
                  <td><?=$item->log_time?></td> 
                </tr>
                <?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Log ID</th>
                  <th>Username</th>
                  <th>Action</th>
                  <th>Time</th>
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
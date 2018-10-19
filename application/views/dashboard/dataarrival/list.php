
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
              <a href="<?php echo base_url('dataarrival/create') ?>"><i class="fa fa-fw fa-plus"></i> <span>Tambah Data Arrival Estimated</span></a>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-datalahan">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Klinik</th>
                  <th>Delivery From</th>
                  <th>Item</th>
                  <th>Unit</th>
                  <th>Qty</th>
                  <th>Arrival Estimated</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 0; foreach ($data as $item): $i++;?>
                
                <tr>
                  <td><?=$i; ?></td>
                  <td><?=$item->nama_klinik; ?></td>  
                  <td><?=$item->nama_delivery; ?></td> 
                  <td class="item_multiple">
                    <?php 
                      $linesItem = explode(",", $item->item);
                      if ( !empty($linesItem) && (count($linesItem) > 2)  ) {
                        echo '<ul style="padding-left: 15px;">';
                        foreach ( $linesItem as $lineItem ) {
                          echo '<li>'. trim( $lineItem ) .'</li>';
                        }
                        echo '</ul>';
                      }
                      else
                      {
                        echo $item->item;
                      }
                    ?>
                  </td> 
                  <td class="item_multiple">
                    <?php 
                      $linesUnit = explode(",", $item->unit);
                      if ( !empty($linesUnit) && (count($linesUnit) > 2) ) {
                        echo '<ul style="padding-left: 15px;">';
                        foreach ( $linesUnit as $lineUnit ) {
                          echo '<li>'. trim( $lineUnit ) .'</li>';
                        }
                        echo '</ul>';
                      }
                      else
                      {
                        echo $item->unit;
                      }
                    ?>
                  </td>
                  <td class="item_multiple">
                    <?php 
                      $linesQty = explode(",", $item->qty);
                      if ( !empty($linesQty) && (count($linesQty) > 2) ) {
                        echo '<ul style="padding-left: 15px;">';
                        foreach ( $linesQty as $lineQty ) {
                          echo '<li>'. trim( $lineQty ) .'</li>';
                        }
                        echo '</ul>';
                      }
                      else
                      {
                        echo $item->qty;
                      }
                    ?>
                  </td> 
                  <td><?=$item->tgl_arrival; ?></td> 
                  <td>
                    <div class="btn-group">
                      <a type="button" href="<?php echo base_url('dataarrival/edit/'.$item->id_arrival) ?>" class="btn btn-default" title="Edit"><i class="fa fa-edit"></i></a>
                      <a type="button" data-toggle="modal" data-target="#modal-default<?=$item->id_arrival; ?>" class="btn btn-default" title="Delete"><i class="fa fa-trash"></i></a>
                      <div class="modal fade" id="modal-default<?=$item->id_arrival; ?>">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Konfirmasi</h4>
                            </div>
                            <div class="modal-body">
                              <p>Apa anda yakin ingin menghapus ?</p>
                            </div>
                            <div class="modal-footer">
                              <a type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</a>
                              <a href="<?php echo base_url('dataarrival/delete/'.$item->id_arrival) ?>" type="button" class="btn btn-primary">Hapus</a>
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
                  <th>No</th>
                  <th>Nama Klinik</th>
                  <th>Delivery From</th>
                  <th>Item</th>
                  <th>Unit</th>
                  <th>Qty</th>
                  <th>Arrival Estimated</th>
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
          "order": [[ 0, "asc" ]]
      } );
      
    })
  </script>
  </div>
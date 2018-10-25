
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
              <a href="<?php echo base_url('dataarrival/create') ?>"><i class="fa fa-fw fa-plus"></i> <span>Tambah Estimated Compounding Plan</span></a>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-datalahan">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Klinik</th>
                  <th>From</th>
                  <th>Item</th>
                  <th>Unit</th>
                  <th>Qty</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; foreach ($dataarrival_array as $dataarrival):?>
                
                <tr>
                  <td><?=$i++; ?>.</td>
                  <td><?=$dataarrival['parent_array']->nama_klinik; ?></td>  
                  <td><?=$dataarrival['parent_array']->nama_delivery; ?></td>
                  <td>
                    <ul style="padding: 0 0 0 20px;">
                    <?php foreach ($dataarrival['child_array'] as $dataarrivalchild):?>
                      <li><?=$dataarrivalchild->item; ?></li>
                    <?php endforeach;?>
                    </ul>
                  </td> 
                  
                  <td>
                    <ul style="padding: 0 0 0 20px;">
                    <?php foreach ($dataarrival['child_array'] as $dataarrivalchild):?>
                      <li><?=$dataarrivalchild->nama_unit; ?></li>
                    <?php endforeach;?>
                    </ul>
                  </td>
                  <td>
                    <ul style="padding: 0 0 0 20px;">
                    <?php foreach ($dataarrival['child_array'] as $dataarrivalchild):?>
                      <li><?=$dataarrivalchild->qty; ?></li>
                    <?php endforeach;?>
                    </ul>
                  </td> 
                  <td><?=$dataarrival['parent_array']->tgl_arrival; ?></td>
                  <td>
                    <div class="btn-group">
                      <a type="button" href="<?php echo base_url('dataarrival/edit/'.$dataarrival['parent_array']->id_arrival) ?>" class="btn btn-default" title="Edit"><i class="fa fa-edit"></i></a>
                      <a type="button" data-toggle="modal" data-target="#modal-default<?=$dataarrival['parent_array']->id_arrival; ?>" class="btn btn-default" title="Delete"><i class="fa fa-trash"></i></a>
                      <div class="modal fade" id="modal-default<?=$dataarrival['parent_array']->id_arrival; ?>">
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
                              <a href="<?php echo base_url('dataarrival/delete/'.$dataarrival['parent_array']->id_arrival) ?>" type="button" class="btn btn-primary">Hapus</a>
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
                  <th>From</th>
                  <th>Item</th>
                  <th>Unit</th>
                  <th>Qty</th>
                  <th>Date</th>
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
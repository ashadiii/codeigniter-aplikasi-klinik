
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <!-- <small>Aplikasi Estimasi</small> -->
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
              <h3 class="box-title">
                <?=$title?>  
                <b>(
                  <?php foreach ($klinik as $klinikItem):
                    echo $klinikItem->nama_klinik;
                  endforeach;?>
                )</b>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th style="width: 10px">#</th>
                    <!-- <th>Nama Klinik</th> -->
                    <th>From</th>
                    <th>Item</th>
                    <th>Unit</th>
                    <th>Qty</th>
                    <th>Date</th>
                  </tr>
                  <?php $i = 1; foreach ($dataarrival_array as $dataarrival):?>
                  <tr>
                    <td><?=$i++; ?>.</td>
                    <!-- <td><?=$item->nama_klinik; ?></td> -->
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
  

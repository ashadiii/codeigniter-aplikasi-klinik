
  

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
              <h3 class="box-title">
                <?=$title?> Klinik 
                <b>
                  <?php foreach ($klinik as $klinikItem):
                    echo $klinikItem->nama_klinik;
                  endforeach;?>
                </b>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th style="width: 10px">#</th>
                    <!-- <th>Nama Klinik</th> -->
                    <th>Delivery From</th>
                    <th>Item</th>
                    <th>Unit</th>
                    <th>Qty</th>
                    <th>Date</th>
                  </tr>
                  <?php $i = 1; foreach ($data as $item):?>
                  <tr>
                    <td><?=$i++; ?>.</td>
                    <!-- <td><?=$item->nama_klinik; ?></td> -->
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
  

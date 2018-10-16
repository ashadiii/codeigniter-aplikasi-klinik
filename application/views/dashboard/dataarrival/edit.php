<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?=$title?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><?=$title?></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div id="notifications"></div>  
      
      <?php foreach($data as $item){ ?>
      <form class="form-horizontal" method="post" action="<?php echo base_url('dataarrival/update/'.$item->id_arrival);?>" enctype="multipart/form-data">
      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <?php

              if ($this->session->flashdata('errors')){
                  echo '<div class="alert alert-danger">';
                  echo $this->session->flashdata('errors');
                  echo "</div>";
              }

          ?>

          <div class="col-md-offset-3 col-md-6">   
            <div class="box-body">
              <div class="form-group">
                <label for="nama_klinik">Nama Klinik</label>
                <div class="form-group1">
                  <select name="id_klinik" id="nama_klinik" class="form-control">
                    <?php foreach ($dataklinik as $klinik): ?>
                    <option value="<?=$klinik->id_klinik; ?>" <?=($item->id_klinik == $klinik->id_klinik) ? 'selected' : ''?>><?=$klinik->nama_klinik; ?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="delivery_from">Delivery From</label>
                <div class="form-group1">
                <input type="text"  name="delivery_from" class="form-control" id="delivery_from" placeholder="Delivery From" value="<?=$item->delivery_from; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="item">Item</label>
                <div class="form-group1">
                <input type="text"  name="item" class="form-control" id="item" placeholder="Item" value="<?=$item->item; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="weight">Weight</label>
                <div class="form-group1">
                <input type="text"  name="weight" class="form-control" id="weight" placeholder="Weight" value="<?=$item->weight; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="qty">Qty</label>
                <div class="form-group1">
                <input type="text"  name="qty" class="form-control" id="qty" placeholder="Qty" value="<?=$item->qty; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="date_arrival">Arrival Estimated</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="date_arrival" class="form-control pull-right" id="date_arrival" placeholder="Arrival Estimated" value="<?=$item->tgl_arrival; ?>">
                </div>
              </div>
              
              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-info">Save</button>
              </div>
            </div>            
                            
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box --> 
      </form>
     <?php } ?>

    </div>
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>

<script type="text/javascript">
    $( document ).ready( function () {
      //Date picker
      $('#date_arrival').datepicker({
        autoclose: true,
        format: 'dd MM, yyyy'
      });
    });
</script>
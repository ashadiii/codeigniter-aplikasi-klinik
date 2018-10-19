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
      <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>  
      

      <form class="form-horizontal" method="post" action="<?php echo base_url('dataarrival/store');?>" enctype="multipart/form-data">
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
                  <select name="id_klinik" id="nama_klinik" class="form-control" required>
                    <?php foreach ($dataklinik as $klinik): ?>
                    <option value="<?=$klinik->id_klinik; ?>"><?=$klinik->nama_klinik; ?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="delivery_from">Delivery From</label>
                <div class="form-group1">
                  <select name="delivery_from" id="delivery_from" class="form-control" required>
                    <?php foreach ($datadelivery as $delivery): ?>
                    <option value="<?=$delivery->id_delivery; ?>"><?=$delivery->nama_delivery; ?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="date_arrival">Arrival Estimated</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="date_arrival" class="form-control pull-right" id="date_arrival" placeholder="Arrival Estimated" required>
                </div>
              </div>
              <div>
                <div class="form-group"><h4>Item 1</h4></div>
                <div class="form-group">
                  <label for="item">Item</label>
                  <div class="form-group1">
                  <input type="text"  name="item[0]" class="form-control" id="item" placeholder="Item" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="unit">Unit</label>
                  <div class="form-group1">
                    <select name="unit[0]" id="unit" class="form-control" required>
                      <?php foreach ($dataunit as $unit): ?>
                      <option value="<?=$unit->id_unit; ?>"><?=$unit->nama_unit; ?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="qty">Qty</label>
                  <div class="form-group1">
                  <input type="text"  name="qty[0]" class="form-control" id="qty" placeholder="Qty" required>
                  </div>
                </div>
              </div>
              <div id="loading" style="display: none;">loading</div>
              <div id="addItem"></div>

              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-info">Save</button>
                <button type="button" onclick="bttn_adding()" class="btn btn-info"><i class="ti-plus"></i> Tambah Item</button>
              </div>
            </div>            
                            
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box --> 
      </form>
     
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
    function bttn_remove() {
        var scntDiv = $('#addItem');
        var last = $('#addItem .toclone').length;  
        $('#addItem #field_'+last+'').remove();
        
        return false;
      }
      function bttn_adding() {
        

        $.ajax({
          url: "<?php echo base_url('dataarrival/getunit');?>",
          beforeFilter: function(){
            $('#loading').show();
          },
          success: function(html){
            var scntDiv = $('#addItem'); 
            var i = 1 + $('#addItem .toclone').length;   
            var itemNo = i + 1;
            $('#loading').hide();
            $('<div id="field_'+i+'" class="toclone"><div class="form-group"><h4>Item '+itemNo+'</h4></div><div class="form-group"><label for="item">Item</label><div class="form-group1"><input type="text"  name="item['+i+']" class="form-control" id="item" placeholder="Item" required></div></div><div class="form-group"><label for="unit">Unit</label><div class="form-group1"><select name="unit['+i+']" id="unit" class="form-control" required>'+html+'</select></div></div><div class="form-group"><label for="qty">Qty</label><div class="form-group1"><input type="text"  name="qty['+i+']" class="form-control" id="qty" placeholder="Qty" required></div></div><div class="form-group"><button type="button" onclick="bttn_remove()" class="btn btn-danger"><i class="ti-minus"></i> Remove Item</button></div></div>').appendTo(scntDiv); 
            i++;
          }
        });

        
        
        return false;
      }
</script>
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
      
      <?php foreach($dataarrival_array as $dataarrival){ ?>
      <form class="form-horizontal" onsubmit="bttn_submit()" method="post" action="<?php echo base_url('dataarrival/update/'.$dataarrival['parent_array']->id_arrival);?>" enctype="multipart/form-data">
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
                    <option value="<?=$klinik->id_klinik; ?>" <?=($dataarrival['parent_array']->id_klinik == $klinik->id_klinik) ? 'selected' : ''?>><?=$klinik->nama_klinik; ?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="delivery_from">From</label>
                <div class="form-group1">
                  <select name="delivery_from" id="delivery_from" class="form-control">
                    <?php foreach ($datadelivery as $delivery): ?>
                    <option value="<?=$delivery->id_delivery; ?>" <?=($dataarrival['parent_array']->id_delivery == $delivery->id_delivery) ? 'selected' : ''?>><?=$delivery->nama_delivery; ?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="date_arrival">Date</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="date_arrival" class="form-control pull-right" id="date_arrival" placeholder="Arrival Estimated" value="<?=$dataarrival['parent_array']->tgl_arrival; ?>">
                </div>
              </div>

              <div id="addItem">
                <?php $i = 0; foreach ($dataarrival['child_array'] as $dataarrivalchild): $i++;?>
                <div id="field_<?=$i; ?>" class="toclone">
                  <div class="form-group"><h4 id="itemNo<?=$i; ?>">Item <?=$i; ?></h4></div>
                  <div class="form-group">
                    <label for="item">Item</label>
                    <div class="form-group1">
                    <input type="text"  name="item[]" class="form-control" id="item" placeholder="Item" value="<?=$dataarrivalchild->item; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="unit">Unit</label>
                    <div class="form-group1">
                      <select name="unit[]" id="unit" class="form-control" required>
                        <?php foreach ($dataunit as $unit): ?>
                        <option value="<?=$unit->id_unit; ?>" <?=($dataarrivalchild->id_unit == $unit->id_unit) ? 'selected' : ''?>><?=$unit->nama_unit; ?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="qty">Qty</label>
                    <div class="form-group1">
                    <input type="number"  name="qty[]" class="form-control" id="qty" placeholder="Qty" value="<?=$dataarrivalchild->qty; ?>" required>
                    </div>
                  </div>
                  <div class="form-group" id="changeIdButton<?=$i; ?>">
                    <button type="button" onclick="bttn_remove(<?=$i; ?>)" class="btn btn-danger"><i class="ti-minus"></i> Remove Item</button>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
              <div id="loading" style="display: none;"><img width="50px" src="<?=base_url();?>assets/img/loader.gif" />loading</div>
              
              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-info" id="submitItemButton">Save</button>
                <button type="button" onclick="bttn_adding()" class="btn btn-info" id="addItemButton"><i class="ti-plus"></i> Tambah Item</button>
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
    function bttn_submit() {
      $('#submitItemButton').attr('disabled', 'disabled');
      $('#addItemButton').attr('disabled', 'disabled');
    }
    function bttn_remove(last) {
      var cloneLength = 1 + $('#addItem .toclone').length;
      $('#addItem #field_'+last+'').remove();
      if (last < cloneLength)
      {
          console.log('true, last='+last+' length='+cloneLength+''); 
          var noLast;
          for (noLast = last + 1; noLast <= cloneLength; noLast++) {        
              console.log('true'+[noLast]+''); 
              var noLastCurrent = noLast - 1;
              $('#addItem #field_'+noLast+'').attr('id','field_'+noLastCurrent+'');
              $('#itemNo'+noLast+'').attr('id','itemNo'+noLastCurrent+'').html('Item '+[noLastCurrent]+'');
              $('#changeIdButton'+noLast+'').attr('id','changeIdButton'+noLastCurrent+'').html('<button type="button" onclick="bttn_remove('+noLastCurrent+')" class="btn btn-danger"><i class="ti-minus"></i> Remove Item</button>');
          }
      }
      return false;
    }

    function bttn_adding() {
      $('#loading').show();
      $('#addItemButton').attr('disabled', 'disabled');
      $.ajax({
        url: "<?php echo base_url('dataarrival/getunit');?>",
        beforeFilter: function(){
          $('#loading').show();
        },
        success: function(html){
          var scntDiv = $('#addItem');
          var i = $('#addItem .toclone').length;
          var itemNo = i + 1;
          
          setTimeout(function () {
          $('#loading').hide();
          $('#addItemButton').removeAttr('disabled', 'disabled');
          $('<div id="field_'+itemNo+'" class="toclone"><div class="form-group"><h4 id="itemNo'+itemNo+'">Item '+itemNo+'</h4></div><div class="form-group"><label for="item">Item</label><div class="form-group1"><input type="text"  name="item[]" class="form-control" id="item" placeholder="Item" required></div></div><div class="form-group"><label for="unit">Unit</label><div class="form-group1"><select name="unit[]" id="unit" class="form-control" required>'+html+'</select></div></div><div class="form-group"><label for="qty">Qty</label><div class="form-group1"><input type="number"  name="qty[]" class="form-control" id="qty" placeholder="Qty" required></div></div><div class="form-group" id="changeIdButton'+itemNo+'"><button type="button" onclick="bttn_remove('+itemNo+')" class="btn btn-danger"><i class="ti-minus"></i> Remove Item</button></div></div>').appendTo(scntDiv);
            }, 500);
          i++;
         
        }
      });
      return false;
    }
</script>
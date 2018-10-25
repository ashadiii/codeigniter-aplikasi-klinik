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
      

      <form class="form-horizontal" onsubmit="bttn_submit()" method="post" action="<?php echo base_url('datadeliveryfrom/store');?>" enctype="multipart/form-data">
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
                <label for="delivery_from">Delivery From</label>
                <div class="form-group1">
                <input type="text"  name="delivery_from" class="form-control" id="delivery_from" placeholder="Delivery From" required="required">
                </div>
              </div>
              
              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-info" id="submitItemButton">Save</button>
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
  function bttn_submit() {
    $('#submitItemButton').attr('disabled', 'disabled');
  }
</script>
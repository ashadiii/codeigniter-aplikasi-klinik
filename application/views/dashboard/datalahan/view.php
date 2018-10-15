
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?=$title?>
   
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo base_url('datalahan') ?>">Data Lahan</a></li>
    <li class="active"><?=$title?></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- right column -->
    <div class="col-md-12">
      <!-- Horizontal Form -->
      <?php foreach($data as $item){ ?>
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Form Edit Data Lahan ID : <?=$item->id; ?></h3>
         
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        
        <form class="form-horizontal" method="post" action="<?php echo base_url('datalahan/update/'.$item->id);?>">
          <div class="box-body">
             <?php


            if ($this->session->flashdata('errors')){
                echo '<div class="alert alert-danger">';
                echo $this->session->flashdata('errors');
                echo "</div>";
            }


            ?>
            <div class="form-group">
              <label for="noktp" class="col-sm-2 control-label">No KTP</label>

              <div class="wrap-control-input col-sm-10">
                <input type="number" name="no_ktp" class="form-control" id="noktp" placeholder="No KTP" value="<?php echo $item->no_ktp; ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="namapemilik" class="col-sm-2 control-label">Nama Pemilik</label>

              <div class="wrap-control-input col-sm-10">
                <input type="text" name="nama_pemilik" class="form-control" id="namapemilik" placeholder="Nama Pemilik" value="<?php echo $item->nama_pemilik; ?>">
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
          </div>
          <!-- /.box-footer -->
        </form>
       
      </div>
      <?php } ?>
      <!-- /.box -->
      
    </div>
  
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->


</div>
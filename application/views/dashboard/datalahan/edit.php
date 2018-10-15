
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
            <div class="">
              <button type="cancel" name="submit" class="btn btn-default">Cancel</button>
              <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
            </div>
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

<script type="text/javascript">
    $( document ).ready( function () {
        $( ".form-horizontal" ).validate( {
            rules: {
                no_ktp: {
                  required: true,
                  number: true
                },
                nama_pemilik: "required"
            },
            messages: {
                no_ktp: {
                    required: "Silahkan Masukkan Nomor KTP",
                    number: "Input Harus Berupa Nomor"
                },
                nama_pemilik: "Silahkan Masukkan Nama Pemilik"
            },
            errorElement: "em",
            errorPlacement: function ( error, element ) {
                // Add the `help-block` class to the error element
                error.addClass( "help-block" );

                // Add `has-feedback` class to the parent div.form-group
                // in order to add icons to inputs
                element.parents( ".wrap-control-input" ).addClass( "has-feedback" );

                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.parent( "label" ) );
                } else {
                    error.insertAfter( element );
                }

                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if ( !element.next( "span" )[ 0 ] ) {
                    $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
                }
            },
            success: function ( label, element ) {
                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if ( !$( element ).next( "span" )[ 0 ] ) {
                    $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).parents( ".wrap-control-input" ).addClass( "has-error" ).removeClass( "has-success" );
                $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
            },
            unhighlight: function ( element, errorClass, validClass ) {
                $( element ).parents( ".wrap-control-input" ).addClass( "has-success" ).removeClass( "has-error" );
                $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
            }
        } );
    } );
</script>
</div>
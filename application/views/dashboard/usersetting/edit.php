<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?=$title?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo base_url('') ?>usersetting/index/<?=$this->session->userdata('id')?>">User Setting</a></li>
    <li class="active"><?=$title?></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>  
   	  <?php foreach ($data as $item):?>

        <!-- <form method="post" action="<?php echo base_url('usersetting/updateimage/'.$item->id);?>" enctype="multipart/form-data">
          <input type="file" name="imgtes" id="imgtes">
          <button type="submit" name="submit" class="btn btn-info">Edit</button>
        </form> -->

      <form class="form-horizontal" method="post" action="<?php echo base_url('usersetting/update/'.$item->id);?>" enctype="multipart/form-data">
      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="<?=empty($item->image) ? ''.base_url().'assets/img/user2-160x160.jpg' : ''.base_url().'assets/img/'.$item->image.''?>" alt="User profile picture" id="outputimg">

          <input type="file" name="img_new" id="img_new" onchange="loadFile(event)" style="margin: 0 auto;">
          
          <input type="hidden" name="img_old" value="<?=empty($item->image) ? ''.base_url().'assets/img/user2-160x160.jpg' : ''.base_url().'assets/img/'.$item->image.''?>" id="img_old">

          <div class="col-md-offset-3 col-md-6" style="margin-top: 30px;">   
            <div class="box-body">
              <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <div class="form-group1">
                <input type="text"  name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" value="<?=$item->nama?>">
                </div>
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <div class="form-group1">
                <input type="text"  name="username" class="form-control" id="username" placeholder="Username" value="<?=$item->username?>">
                </div>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" rows="3" placeholder="Alamat ..." name="alamat"><?=$item->alamat?></textarea>
              </div>
              <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="text"  name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" value="<?=$item->tgl_lahir?>">
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
      <?php endforeach;?>
    </div>
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<script type="text/javascript">
  //Date picker
  $( document ).ready( function () {
    $('#tgl_lahir').datepicker({
      autoclose: true
    });
    $( ".form-horizontal" ).validate( {
      rules: {
          nama_lengkap: {
            required: true
          },
          username: "required"
      },
      messages: {
          nama_lengkap: {
              required: "Silahkan Masukkan Nama Lengkap"
          },
          username: "Silahkan Masukkan Username"
      },
      errorElement: "em",
      highlight: function(element) {
        $(element).parent('div').addClass('has-error');
        
      },
      unhighlight: function(element) {
        $(element).parent('div').removeClass('has-error');
        
      }
  } );
  });

  var loadFile = function(event) {
    var output = document.getElementById('outputimg');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
</div>
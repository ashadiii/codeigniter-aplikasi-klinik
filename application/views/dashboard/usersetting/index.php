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
       	  <?php foreach ($data as $item):?>
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?=empty($item->image) ? ''.base_url().'assets/img/user2-160x160.jpg' : ''.base_url().'assets/img/'.$item->image.''?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?=$item->nama?></h3>

              <p class="text-muted text-center"><?=$item->username?></p>

              <div class="col-md-offset-3 col-md-6">              	
	              <ul class="list-group list-group-unbordered">
	                <li class="list-group-item">
	                  <b>Nama Lengkap</b> <a class="pull-right"><?=$item->nama?></a>
	                </li>
	                <li class="list-group-item">
	                  <b>Username</b> <a class="pull-right"><?=$item->username?></a>
	                </li>
	                <li class="list-group-item">
	                  <b>Role</b> <a class="pull-right"><?=$item->role?></a>
	                </li>
	                <li class="list-group-item">
	                  <b>Alamat</b> <a class="pull-right"><?=empty($item->alamat) ? '&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;' : $item->alamat?></a>
	                </li>
	                <li class="list-group-item">
	                  <b>Tanggal Lahir</b> <a class="pull-right"><?=empty($item->tgl_lahir) ? '&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;' : $item->tgl_lahir?></a>
	                </li>
	              </ul>

	              <div>
	              	<a href="<?php echo base_url('') ?>usersetting/edit/<?=$item->id?>" class="btn btn-info">Edit User</a>
	              	<a href="<?php echo base_url('') ?>usersetting/changepassword/<?=$item->id?>" class="btn btn-info pull-right">Ganti Password</a>
	              </div>
	              
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box --> 
          <?php endforeach;?>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
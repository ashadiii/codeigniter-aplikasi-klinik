  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel user-panel-custom">
        <div class="pull-left image">
          <img src="<?=empty($this->session->userdata('image')) ? ''.base_url().'assets/img/user2-160x160.jpg' : ''.base_url().'assets/img/'.$this->session->userdata('image').'' ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("nama"); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if($this->uri->segment(1)=="" || $this->uri->segment(1)=="dashboard"){echo 'class="active"';}?>>
          <a href="<?php echo base_url() ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li <?php if($this->uri->segment(1)=="dataklinik"){echo 'class="active"';}?>>
          <a href="<?php echo base_url('dataklinik') ?>">
            <i class="fa fa-hospital-o"></i> <span>Data Klinik</span>
          </a>
        </li>
        <li <?php if($this->uri->segment(1)=="datalahan"){echo 'class="active"';}?>>
          <a href="<?php echo base_url('datalahan') ?>">
            <i class="fa fa-database"></i> <span>Data Lahan</span>
          </a>
        </li>
        <li <?php if($this->uri->segment(1)=="log"){echo 'class="active"';}?>>
          <a href="<?php echo base_url('log') ?>">
            <i class="fa fa-user-circle-o"></i> <span>User Log</span>
          </a>
        </li>
        <li <?php if($this->uri->segment(1)=="usersetting"){echo 'class="active"';}?>>
          <a href="<?php echo base_url('') ?>usersetting/index/<?=$this->session->userdata('id')?>">
            <i class="fa fa-cog"></i> <span>User Setting</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
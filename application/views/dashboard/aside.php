  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <?php if ($this->session->userdata("nama")): ?>
      <div class="user-panel user-panel-custom">
        <div class="pull-left image">
          <img src="<?=empty($this->session->userdata('image')) ? ''.base_url().'assets/img/user2-160x160.jpg' : ''.base_url().'assets/img/'.$this->session->userdata('image').'' ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("nama"); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <?php endif; ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if($this->uri->segment(1)=="" || $this->uri->segment(1)=="dashboard"){echo 'class="active"';}?>>
          <a href="<?php echo base_url() ?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
        <?php if ($this->session->userdata("nama")): ?>
        <li <?php if($this->uri->segment(1)=="dataklinik"){echo 'class="active"';}?>>
          <a href="<?php echo base_url('dataklinik') ?>">
            <i class="fa fa-hospital-o"></i> <span>Data Klinik</span>
          </a>
        </li>
        <li <?php if($this->uri->segment(1)=="datadeliveryfrom"){echo 'class="active"';}?>>
          <a href="<?php echo base_url('datadeliveryfrom') ?>">
            <i class="fa fa-ship"></i> <span>Compounding From</span>
          </a>
        </li>
        <li <?php if($this->uri->segment(1)=="dataunit"){echo 'class="active"';}?>>
          <a href="<?php echo base_url('dataunit') ?>">
            <i class="fa fa-empire"></i> <span>Data Unit</span>
          </a>
        </li>
        <li <?php if($this->uri->segment(1)=="dataarrival"){echo 'class="active"';}?>>
          <a href="<?php echo base_url('dataarrival') ?>">
            <i class="fa fa-calendar-plus-o"></i> <span>Estimated Compounding Plan</span>
          </a>
        </li>
        <?php endif; ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
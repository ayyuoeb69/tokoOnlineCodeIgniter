

<header class="app-header navbar" style="background-color: #e6ebf9">
  <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
    <img src="<?php echo base_url('upload/tentang/'.$tentang->logo) ?>">
    <img class="navbar-brand-minimized" src="<?php echo base_url(); ?>admin_assets/img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
  </a>
  <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show" style="margin-left: 0px;margin-right: auto;"> 
    <span class="navbar-toggler-icon"></span>
  </button>

</header>
<div class="sidebar" style="padding-top: 80px">
  <nav class="sidebar-nav">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/beranda') ?>"><i class="fa fa-home"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/produk') ?>"><i class="fa fa-coffee"></i> Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/kategori') ?>"><i class="fa fa-tags"></i> Kategori</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"><i class="fa fa-file-image-o"></i> Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"><i class="fa fa-user"></i> Testimoni</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/beli') ?>"><i class="fa fa-shopping-cart"></i> Pembelian
          <?php if($beritahu == 1){ ?>
           <span class="badge" style="background-color: #d74424">!</span>
         <?php } ?>
       </a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('admin/tentang') ?>"><i class="fa fa-info-circle"></i> Tentang</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('admin/logout') ?>"><i class="fa fa-sign-out"></i>Logout</a>
    </li>
  </ul>
</nav>
<button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
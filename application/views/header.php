	<!DOCTYPE html>
	<html lang="en" class="no-js">
	<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Coffee</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo base_url('assets/css/linearicons.css') ?>">
			<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
			<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
			<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css') ?>">
			<link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css') ?>">					
			<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css') ?>">
			<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css') ?>">
			<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
			<link href="<?php echo base_url('admin_assets/datatables-plugins/dataTables.bootstrap.css') ?>" rel="stylesheet">

			<!-- DataTables Responsive CSS -->
			<link href="<?php echo base_url('admin_assets/datatables-responsive/dataTables.responsive.css') ?>" rel="stylesheet">

			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
			<link href="<?php echo base_url() ?>admin_assets/css/datatables.css" rel="stylesheet">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		</head>
		<body>
			<header id="header" id="home">

				<div class="container">
					<div class="row align-items-center justify-content-between d-flex">
						<div id="logo">
							<a href="<?= base_url('') ?>"><img src="<?php echo base_url('upload/tentang/'.$tentang->logo); ?>" alt="" title="" /></a>
						</div>
						<nav id="nav-menu-container">
							<ul class="nav-menu">
								<li class="menu-active"><a href="<?= base_url('') ?>">Home</a></li>
								<li><a href="<?= base_url('') ?>#about">About</a></li>
								<li><a href="<?= base_url('') ?>#coffee">Produk</a></li>
								<li><a href="<?= base_url('') ?>#gallery">Gallery</a></li>
								<li><a href="<?= base_url('') ?>#review">Testimoni</a></li>
								<?php if(!isset($_SESSION['id_user'])){ ?>
									<li data-toggle="modal" data-target="#myModal"><a href="#"><b><i class="fa fa-sign-in" style="margin-right:5px"></i>Login</b></a></li>
								<?php } ?>
								<?php if(isset($_SESSION['id_user'])){ ?>
									<li><a href="<?php echo base_url('user/cart/'.$_SESSION['id_user']); ?>#cart"><b><i class="fa fa-shopping-cart" style="margin-right:5px"></i>Shopping Cart 
										
											<span class="badge"><?= $count ?></span>

										</b></a></li>
									<li class="menu-has-children"><a href="#"><b><i class="fa fa-user" style="margin-right:5px"></i>Account
										<?php if($ingat == 1){ ?>
									 <span class="badge" style="background-color: #d74424">!</span>
										<?php } ?>
									</b></a>
										<ul>
											<li><a href="<?php echo base_url('user/status/'.$_SESSION['id_user']).'#status' ?>">Status Transaksi
												<?php if($ingat == 1){ ?>
											 <span class="badge" style="background-color: #d74424">!</span>
											<?php } ?>
											</a></li>
											<li><a href="<?php echo base_url('user/info/#info') ?>">Info Account</a></li>
										</ul>
									</li>
									<li><a href="<?php echo base_url('user/logout') ?>"><b><i class="fa fa-sign-out" style="margin-right:5px"></i>Logout</b></a></li>
								<?php } ?>

								
							</ul>
						</nav><!-- #nav-menu-container -->		    		
					</div>
				</div>
			</header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-7">
							
							<h1>
								<?php echo $tentang->tagline_tentang; ?>			
							</h1>
							<a href="<?= base_url('') ?>#coffee" class="primary-btn text-uppercase">Buy Now</a>
						</div>											
					</div>
				</div>
			</section>
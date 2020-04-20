
      <!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.5
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="Coffee Shop Admin">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Coffee Shop Admin">
  <title>Coffee Shop Admin</title>
  <!-- Icons-->
  <link href="<?php echo base_url(); ?>admin_assets/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>admin_assets/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>admin_assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>admin_assets/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <!-- Main styles for this application-->
  <link href="<?php echo base_url(); ?>admin_assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>admin_assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  <link href="<?php echo base_url('admin_assets/datatables/css/dataTables.bootstrap.css') ?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
  <!-- Global site tag (gtag.js) - Google Analytics-->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <div class="app-body" style="margin-top:0px">
     <?php $this->load->view('admin/nav') ?>
     <main class="main" style="padding-top: 80px;overflow: hidden;">
        <div class="container-fluid">
          <div class="animated fadeIn">
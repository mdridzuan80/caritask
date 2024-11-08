<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Caritask - Services at your Door</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('/assets/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('/assets/css/adminlte.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/plugins/toastr/toastr.min.css') ?>">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
	<?= $topmenu ?>
  <!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<?= $sidemenu ?>

  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $contentHeader ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
		<?= $contents ?>
	</div>
	<!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
    <strong>Designed & Maintained By <a href="https://alphabyte.com.my"><b>Alphabyte Technologies (M) Sdn. Bhd.</strong></a>
    </div>
    <!-- Default to the left -->
    <strong>All rights reserved by <a href="https://caritask.com.my"><i class="fas fa-copyright text-light me-2"></i><b>CariTask</b></a></strong>
    <br>
   
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('/assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('/assets/js/adminlte.min.js') ?>"></script>
<script src="<?= base_url('/assets/plugins/toastr/toastr.min.js') ?>"></script>
<?php if(isset($script)){
	echo $script;
}?>
</body>
</html>

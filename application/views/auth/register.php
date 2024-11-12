<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caritask - Services at your Door</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('/assets/plugins/fontawesome-free/css/all.min.css') ?>">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url('/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('/assets/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="<?= base_url() ?>">CariTask</a>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Register a new membership</p>

				<form action="<?= current_url() ?>" method="post">
					<input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo set_value('name'); ?>" autocomplete="off">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>" autocomplete="off">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" placeholder="Password" name="password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" placeholder="Restype password" name="repassword">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-8">

						</div>
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Register</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
				<?= validation_errors() ?>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->
	<hr>


	<!-- jQuery -->
	<script src="<?= base_url('/assets/plugins/jquery/jquery.min.js') ?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('/assets/js/adminlte.min.js') ?>"></script>





	<footer class="main-footer">
		<!-- To the right -->
		<div class="float-right d-none d-sm-inline">
			<!-- Default to the left -->
			<span>All rights reserved by <a href="https://caritask.com.my"><i class="fas fa-copyright text-light me-2"></i><b>CariTask</b></a><br>
				Designed & Maintained By <a href="https://alphabyte.com.my"><b>Alphabyte Technologies (M) Sdn. Bhd.</a></span>
			<br>
		</div>


	</footer>

</html>

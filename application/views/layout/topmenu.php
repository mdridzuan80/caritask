  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
	  <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <span class="d-none d-md-inline"><?=aauth()->user()->nama?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="<?= base_url('/assets/images/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">

            <p>
			<?=aauth()->user()->nama?> - <?=aauth()->user()->email?>
              <small>Member since Nov. 2012</small>
            </p>
          </li>
          
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="<?= base_url('/auth/logout') ?>" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

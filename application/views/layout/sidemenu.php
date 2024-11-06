<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>" class="brand-link">
      <img src="<?= base_url('/assets/images/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CariTask</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?=base_url('dashboard')?>" class="nav-link">
							<i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
					<?php if(hasRole('admin')){ ?>
					<li class="nav-header">Administrator Menu</li>
					<li class="nav-item">
            <a href="#" class="nav-link">
							<i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                User Mangement
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?=base_url('roles')?>" class="nav-link">
							<i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Role
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="#" class="nav-link">
							<i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Permision
              </p>
            </a>
          </li>
					<?php }?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

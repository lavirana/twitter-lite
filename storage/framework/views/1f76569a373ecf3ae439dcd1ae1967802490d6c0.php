<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="http://127.0.0.1:8000/admin/images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Tweety</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="http://127.0.0.1:8000/admin/images/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ashish Rana</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo e(url('admin/home')); ?>" class="nav-link">
              <i class="fa fa-tachometer nav-icon"></i>
              <p>
                Home
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
          </li>
            <li class="nav-item">
                <a href="<?php echo e(url('admin/happenings')); ?>" class="nav-link">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>All Hapenings</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="<?php echo e(url('admin/users')); ?>" class="nav-link">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>All Users</p>
                </a>
              </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH C:\xampp\htdocs\tweety\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>
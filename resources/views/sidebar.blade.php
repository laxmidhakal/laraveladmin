<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{URL::to('/')}}/images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Welcome Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('/')}}/home/student" class="nav-link ">

                  <i class="far fa-circle nav-icon"></i>
                  <p>Student</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="{{URL::to('/')}}/home/teacher" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teacher</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="salary/laxmi.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salary</p>
                </a>
              </li>
              
            </ul>
          </li>
     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
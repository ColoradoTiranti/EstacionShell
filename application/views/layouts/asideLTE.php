<!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-light-pink">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>dashboard" class="brand-link navbar-pink text-center" style="background-color: #F7B900 !important;">
      <span style="color: #ffffff;">Estación</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <!--INFORMACION-->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="<?php echo base_url() ?>dashboard" class="nav-link">
              <i class="nav-icon fas fa-home" style="color: #ffc107 !important;"></i>
              <p style="color: #ffc107 !important;">
                Dashboard
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>empleados/empleados" class="nav-link" style="background-color: #ffc107;">
              <i class="nav-icon fas fa-users" style="color: #ffffff;"></i>
              <p style="color: #ffffff;">
                Empleados
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
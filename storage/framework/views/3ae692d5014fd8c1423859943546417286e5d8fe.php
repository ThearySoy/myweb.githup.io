<?php
  $id = Auth::user()->id;   
  $viewAdminData = App\Models\User::find($id);
?>
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(route('admin.home.page.information')); ?>">
          <i class="ri ri-home-4-line"></i>
          <span>Home Page</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(route('admin.footer')); ?>">
          <i class="ri ri-apps-2-line"></i>
          <span>Footer</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar--><?php /**PATH C:\wamp64\www\website\resources\views/admin/sidebar.blade.php ENDPATH**/ ?>
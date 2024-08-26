<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #152259;">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <!-- Add an icon here if needed -->
    </div>
    <div class="sidebar-brand-text mx-3 text-center">
      <img src="img/satengnok.png" alt="Satengnok" style="max-width: 75%; height: auto; margin-top: 40px;">
    </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-5">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item" style="margin-top: -50px;">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <!-- Nav Item - Village -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('villages.index') }}">
      <i class="fas fa-fw fa-home"></i>
      <span>หมู่บ้าน</span>
    </a>
  </li>

  <!-- Nav Item - Waste Management -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('wastes.index') }}">
      <i class="fas fa-fw fa-trash"></i>
      <span>การจัดการขยะ</span>
    </a>
  </li>

  <!-- Nav Item - Garbage Management -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('garbages.index') }}">
      <i class="fas fa-fw fa-recycle"></i>
      <span>การกำจัดขยะ</span>
    </a>
  </li>

  <!-- Nav Item - Garbage Management -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('vehicles.index') }}">
      <i class="fas fa-fw fa-truck"></i>
      <span>รถเก็บขยะ</span>
    </a>
  </li>

  <!-- Nav Item - Employee Management -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('employees.index') }}">
      <i class="fas fa-fw fa-id-badge"></i>
      <span>พนักงาน</span>
    </a>
  </li>

  <!-- Nav Item - Expenses Management -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('expenses.index') }}">
      <i class="fas fa-fw fa-dollar-sign"></i>
      <span>ค่าใช้จ่าย</span>
    </a>
  </li>

  <!-- Nav Item - Profile -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('profile') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Profile</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
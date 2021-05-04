<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ url('/') }}" class="mt-1 bg-dark rounded btn btn-sm">Go to site</a>
      </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
          <a class="nav-img" data-toggle="dropdown" href="#">
              {{-- @if (Auth::user()->avatar != '') --}} {{-- <img src="{{asset('uploads/images/user/avatars/'.Auth::user()->avatar)}}" class="avatar-img rounded-circle" alt="..." /> --}} {{-- @else --}}
              <img src="{{asset('assets/admin/dist/img/avatar.png')}}" class="avatar-img rounded-circle" alt="profile" width="40" />

              {{-- @endif --}}
          </a>
          <div class="dropdown-menu dropdown-menu-right">
              <a
                  class="dropdown-item"
                  href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"
              >
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-222d32">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8;" />

      <span class="brand-text font-weight-light">EWD Tech</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
              <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
              {{-- <a href="#" class="d-block">{{ Auth::user()->name }}</a> --}}
          </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
              <div class="input-group-append">
                  <button class="btn btn-sidebar">
                      <i class="fas fa-search fa-fw"></i>
                  </button>
              </div>
          </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column sidebar-menu bg-222d32" data-widget="treeview" role="menu" data-accordion="false">
              <li class="treeview {{ request()->is('')? 'active': '' }}">
                  <a href="{{ url('/dashboard') }}" class="nav-link {{ request()->is('dashboard')? 'active': '' }}">
                      <i class="fa fa-dashboard"></i>
                      <p>Dashboard</p>
                  </a>
              </li>
              <li class="treeview {{ request()->is('specialist/services')? 'active': '' }}">
                  <a href="{{ url('dashboard/users') }}" class="nav-link {{ request()->is('dashboard/users')? 'active': '' }}">
                      <i class="fa fa-dashboard"></i>
                      <p>Users</p>
                  </a>
              </li>
              {{-- <li class="treeview {{ request()->is('clients*')? 'active': '' }}">
                  <a href="" class="nav-link {{ request()->is('clients*')? 'active': '' }}">
                      <i class="fa fa-pie-chart"></i>
                      <span>Users</span>
                      <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                      <li class="{{ request()->is('clients*')? 'active': '' }}">
                          <a href="{{ url('clients') }}" class="{{ request()->is('clients*')? 'active': '' }}"><i class="fa fa-circle-o"></i> Clients</a>
                      </li>
                      <li class="{{ request()->is('specialists*')? 'active': '' }}">
                          <a href="{{ url('specialists') }}" class="{{ request()->is('specialists*')? 'active': '' }}"><i class="fa fa-circle-o"></i> Specialists</a>
                      </li>
                  </ul>
              </li> --}}
              
              
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>


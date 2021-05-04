<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>@yield('title','')</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}" />
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}" />
        <!-- Select2 -->
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2/css/select2.min.css') }}" />
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.css')}}" />
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    </head>
        <style>
            .sidebar-menu {
                list-style: none;
                margin: 0;
                padding: 0;
            }
            .bg-222d32 {
                background-color: #222d32;
            }

            .sidebar-menu > li {
                position: relative;
                margin: 0;
                padding: 0;
            }

            .sidebar-menu > li > a {
                padding: 12px 5px 12px 15px;
                display: block;
                border-left: 3px solid transparent;
                color: #b8c7ce;
            }

            .sidebar-menu > li > a > .fa {
                width: 20px;
            }

            .sidebar-menu > li:hover > a,
            .sidebar-menu > li.active > a {
                color: #fff;
                background: #1e282c;
                border-left-color: #3c8dbc;
            }

            .sidebar-menu > li > .treeview-menu {
                margin: 0 1px;
                background: #2c3b41;
            }

            .sidebar-menu > li .label,
            .sidebar-menu > li .badge {
                margin-top: 3px;
                margin-right: 5px;
            }

            .sidebar-menu li.header {
                padding: 10px 25px 10px 15px;
                font-size: 12px;
                color: #4b646f;
                background: #1a2226;
            }

            .sidebar-menu li > a > .fa-angle-left {
                width: auto;
                height: auto;
                padding: 0;
                margin-right: 10px;
                margin-top: 3px;
            }

            .sidebar-menu li.active > a > .fa-angle-left {
                transform: rotate(-90deg);
            }

            .sidebar-menu li.active > .treeview-menu {
                display: block;
            }

            .sidebar-menu a {
                color: #b8c7ce;
                text-decoration: none;
            }

            .sidebar-menu .treeview-menu {
                display: none;
                list-style: none;
                padding: 0;
                margin: 0;
                padding-left: 5px;
            }

            .sidebar-menu .treeview-menu .treeview-menu {
                padding-left: 20px;
            }

            .sidebar-menu .treeview-menu > li {
                margin: 0;
            }

            .sidebar-menu .treeview-menu > li > a {
                padding: 5px 5px 5px 15px;
                display: block;
                font-size: 14px;
                /* color: #8aa4af; */
            }
            .sidebar-menu .treeview-menu > li > a:hover ,
            .sidebar-menu .treeview-menu > li.active >a.active {
                background-color: rgba(255, 255, 255, 0.9);;
                color: #343a40 !important;
            }

            .sidebar-menu .treeview-menu > li > a > .fa {
                width: 20px;
            }

            .sidebar-menu .treeview-menu > li > a > .fa-angle-left,
            .sidebar-menu .treeview-menu > li > a > .fa-angle-down {
                width: auto;
            }

            .sidebar-menu .treeview-menu > li.active > a.nav-link,
            .sidebar-menu .treeview-menu > li > a.nav-link:hover {
                color: #fff !important;
            }
            
        </style>
        <script>
            var url = "{{ url('/') }}";
            var token = "{{ csrf_token() }}";
        </script>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
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
                                <a href="{{ url('#') }}" class="nav-link {{ request()->is('/')? 'active': '' }}">
                                    <i class="fa fa-dashboard"></i>
                                    <p>Dashboard</p>
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

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @include('common.messages')
                @yield('content')
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
                <div class="float-right d-none d-sm-inline-block"><b>Version</b> 3.1.0-rc</div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script>
            $.sidebarMenu = function (menu) {
                var animationSpeed = 300;

                $(menu).on("click", "li a", function (e) {
                    var $this = $(this);
                    var checkElement = $this.next();

                    if (checkElement.is(".treeview-menu") && checkElement.is(":visible")) {
                        checkElement.slideUp(animationSpeed, function () {
                            checkElement.removeClass("menu-open");
                        });
                        checkElement.parent("li").removeClass("active");
                    }

                    //If the menu is not visible
                    else if (checkElement.is(".treeview-menu") && !checkElement.is(":visible")) {
                        //Get the parent menu
                        var parent = $this.parents("ul").first();
                        //Close all open menus within the parent
                        var ul = parent.find("ul:visible").slideUp(animationSpeed);
                        //Remove the menu-open class from the parent
                        ul.removeClass("menu-open");
                        //Get the parent li
                        var parent_li = $this.parent("li");

                        //Open the target menu and add the menu-open class
                        checkElement.slideDown(animationSpeed, function () {
                            //Add the class active to the parent li
                            checkElement.addClass("menu-open");
                            parent.find("li.active").removeClass("active");
                            parent_li.addClass("active");
                        });
                    }
                    //if this isn't a link, prevent the page from being redirected
                    if (checkElement.is(".treeview-menu")) {
                        e.preventDefault();
                    }
                });
            };

            $.sidebarMenu($(".sidebar-menu"));
        </script>
        <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
        <!-- Select2 -->
        <script src="{{ asset('assets/admin/plugins/select2/js/select2.full.min.js') }}"></script>
        <!-- Summernote -->
        <script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
        <script src="{{ asset('assets/admin/dist/js/adminlte.js') }}"></script>
        <script src="{{ asset('assets/admin/dist/js/custome.js') }}"></script>
        <script>
            $(function () {
                 $(".select2").select2();
                $("#example1")
                    .DataTable({
                        responsive: true,
                        lengthChange: false,
                        autoWidth: false,
                        buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                    })
                    .buttons()
                    .container()
                    .appendTo("#example1_wrapper .col-md-6:eq(0)");
                // $('#example2').DataTable({
                //   "paging": true,
                //   "lengthChange": false,
                //   "searching": false,
                //   "ordering": true,
                //   "info": true,
                //   "autoWidth": false,
                //   "responsive": true,
                // });
            });
    
        </script>
        @yield('script')
    </body>
</html>
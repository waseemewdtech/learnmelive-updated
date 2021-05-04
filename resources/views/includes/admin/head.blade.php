	
    
    <title>@yield('title')</title>
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
  

  
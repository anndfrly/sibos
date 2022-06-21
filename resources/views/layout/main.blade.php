<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIBOS</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('style/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{asset('style/assets/scss/style.css')}}">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar ml-0 navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand mt-3" href="./"><img src="{{asset('style/images/sibos1.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('style/images/logo2.png')}}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse pl-3 mt-4">
                <ul class="nav navbar-nav">
                    <li class="active">
                        
                        <a href="{{ url('dashboard') }}"> <i class="menu-icon fa fa-home fa-lg"></i>Dashboard</a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Penganggaran</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{url('anggaran')}}">Kertas Kerja</a></li>
                        </ul>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Pelaporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{url('pelaporan')}}">Pilih Pelaporan</a></li>
                            
                        </ul>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Bantuan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="#">Hubungi CS</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    
                    <div class="col-8">
                        <h4>Sistem Manajemen Bantuan Operasional Sekolah</h4>
                    </div>
                    <div class="col-4">
                        <div class="user-area dropdown float-right d-flex">
                        <img class="user-avatar rounded-circle mr-2" src="{{asset('style/images/admin.jpg')}}" alt="User Avatar">
                        <p>User</p>
                        </div>
                    </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs py-3">
            
        @yield('judul')
        </div>

        <div class="content mt-3">

            <!-- <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div> -->


            @yield('container')
        </div>
        <!--/.col-->


    </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('style/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('style/assets/js/plugins.js')}}"></script>
    <script src="{{asset('style/assets/js/main.js')}}"></script>


    <script src="{{asset('style/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/data-table/datatables-init.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
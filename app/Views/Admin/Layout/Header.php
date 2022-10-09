<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $setting_title ?></title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('Assets/settings/' . $setting_logo) ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="plugins/codemirror/codemirror.css">
    <link rel="stylesheet" href="plugins/codemirror/theme/monokai.css">
    

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light p-1">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <div class="user-panel p-2 d-flex" data-toggle="dropdown" title="Setting" href="#">
                        <?= $name ?>

                        <div class="image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- <a href="#" class="dropdown-item" role="button">
                            <i class="fas fa-edit mr-2"></i>Profil
                        </a> -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-toggle="modal" data-target="#gantisandi" id="gantipass" role="button">
                            <i class="fas fa-key mr-2"></i>Ubah Kata Sandi
                        </a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" data-toggle="modal" data-target="#logoutsystem" id="logout" role="button">
                            <i class="fas fa-power-off mr-2"></i> Keluar
                        </a>

                        <!-- <div class="dropdown-divider"></div>

                        <a class="dropdown-item" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                            <i class="fas fa-th-large mr-2"></i> Control Sidebar
                        </a>
                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item" data-widget="fullscreen" role="button">
                            <i class="fas fa-expand-arrows-alt mr-2"></i> Fullscreen
                        </a> -->
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
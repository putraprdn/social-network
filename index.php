<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Social Network | Kelompok 4</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">

  <?php
  define("ALLOWED", true);
  require_once "pages/fungsi.php";
  ?>

  <div class="wrapper">
    <!-- Navbar -->
    <nav style="margin-left: 0;" class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Social Network</a>
        </li>
      </ul>
    </nav>
  </div>
  <div style="margin-left: 0;" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" style="margin-left: 14rem;">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tes
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="?page=menu_1">1. Tampilkan data username dan jenis kelamin</a>
                <a class="dropdown-item" href="?page=menu_2">2. Menampilkan berapa banyak akun yang difollow oleh tiap orang</a>
                <a class="dropdown-item" href="?page=menu_3">3. Menampilkan nama akun dan jumlah minat yang diikuti</a>
                <a class="dropdown-item" href="?page=menu_4">4. Menampilkan nama minat dan jumlah peminatnya</a>
                <a class="dropdown-item" href="?page=menu_5">5. Menampilkan following dari masing-masing akun</a>
              </div>
            </div>
            <!-- <h1 class="m-0">Dashboard</h1> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>



    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="table-bordered w-100">
              <div class="card-body table-responsive p-0">


                <?php

                if (isset($_GET['page']) == false) {
                  $halaman = "home";
                } else {
                  $halaman = $_GET['page'];
                  if (file_exists("pages/" . $halaman . ".php") == false) {
                    $halaman = "home";
                  }
                }


                require_once "pages/" . $halaman . ".php";
                ?>

              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 Kelompok 4</strong>
    
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="./assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="./assets/dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="./assets/plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="./assets/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="./assets/dist/js/pages/dashboard3.js"></script>
</body>

</html>
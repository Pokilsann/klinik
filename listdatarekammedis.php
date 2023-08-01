<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ujikom</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-text mx-3">APLIKASI KLINIK RIZKY PRIAMBODO</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">  
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Form</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="formdatapasien.php">Data Pasien</a>
                        <a class="collapse-item" href="formdatabidan.php">Data Dokter</a>
                        <a class="collapse-item" href="formdatapoli.php">Data Poli</a>
                        <a class="collapse-item" href="formdatarekammedis.php">Data Rekam Medis</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="listdatabidan.php">List Dokter</a>
                        <a class="collapse-item" href="listdatapasien.php">List Pasien</a>
                        <a class="collapse-item" >List Rekam Medis</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
          

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <center><h2> LIST DATA Berobat<h2>
			        <h2> Rumah Sehat Syibli <h2></center>
                    <hr>
	                <pre> <a href="formdatarekammedis.php"><input type="button" name="" value="Add New"/></a> <a href="index.php"><input type="button" name="" value="Home"/></a> </pre>

                    <form method="GET">
                    <center><table border='1' cellpadding='4' cellspacing='4'>
                    <tr bgcolor='silver' ='#fff' align='center'>
                        <th>No Transaksi</th>
                        <th>Kode Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Keluhan</th>
                        <th>Nama Poli</th>
                        <th>Nama Dokter</th>
                        <th>Biaya Administrasi</th>
                        <th>ACTION</th>
                    </tr>
                    <?php
                    include "config.php";          
                    $query =  "SELECT * FROM t_tmedis
                                INNER JOIN t_pasien ON t_tmedis.Kode_Pasien = t_pasien.Kode_Pasien
                                INNER JOIN t_bidan ON t_tmedis.Kode_Bidan = t_bidan.Kode_Bidan
                                INNER JOIN t_poli ON t_poli.Kode_Poli = t_bidan.Kode_Poli 
                    ";
                    $sql_rm = mysqli_query($conn, $query) or die (mysqli_error($conn));
                    while ($data = mysqli_fetch_array($sql_rm))
                    { 
                        echo "<tr>
                            <td>$data[No_Transaksi]</td>
                            <td>$data[Kode_Pasien]</td>
                            <td>$data[Nama_Pasien]</td>
                            <td>$data[Jenis_Kelamin]</td>
                            <td>$data[Keluhan]</td>
                            <td>$data[Nama_Poli]</td>
                            <td>$data[Nama_Bidan]</td>
                            <td>$data[Biaya_Admin]</td>

                            <td>
                            <button> <a href='editrekammedis.php?No_Transaksi=$data[No_Transaksi]'> Edit </a> </button>
                            |
                            <button> <a href='deleterekammedis.php?No_Transaksi=$data[No_Transaksi]'> Delete </a> </button>
                            </tr>";

                    }        
                    
                    echo "</table>";
                    ?>
                    </FORM>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
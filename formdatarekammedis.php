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
                    <span>Dashboard</span></a>
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
                        <a class="collapse-item" >Data Berobat</a>
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
                        <a class="collapse-item" href="listdatarekammedis.php">List Berobat</a>
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
                <center>
		        <h2>Form Data Rekam Medis</h2>	
		        <hr>
	            </center>	
                <div class="container-fluid">                   
                    <form action="proses_inputrekammedis.php" method="post">
                        <div class="container">
                            <div class="row justify-content-md-center">

                                <div class="col-md-7">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">No Transaksi</label>
                                        <input type="text" class="form-control" name="no_transaksi" placeholder="masukkan no transaksi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kode Pasien</label>
                                        <select name="kode_pasien">
                                        <?php

                                            $query= " SELECT Kode_Pasien
                                                    FROM t_pasien";
                                            $hasil= @mysqli_query($conn, $query);
                                            while ($tabel =@mysqli_fetch_assoc($hasil))
                                            {
                                                echo "<option>$tabel[Kode_Pasien]</option>";
                                            }
                                        ?>
                                        </select>
                                    </div>
                                    <div>
                                        <label>Tanggal Berobat</label>
                                        <select name="tgl">
                                        <?php
                                            for($t=1; $t<=31; $t+=1)
                                            {
                                                echo"<option value=$t> $t </option>";
                                            }
                                        ?>
                                        </select>
                                        <label>Bulan</label>
                                        <select name="bln">
                                        <?php
                                            $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                            $jlh_bln=count($bulan);
                                            for($b=0; $b<$jlh_bln; $b+=1)
                                            {
                                                echo"<option value=$bulan[$b]> $bulan[$b] </option>";
                                            }
                                        ?>
                                        </select>
                                        <label>Tahun</label>
                                        <input type="text" name="thn">
                                    </div>
                                    <div>
                                        <label>Kode Dokter</label>
                                            <select name="kode_bidan">
                                            <?php
                                                $query= " SELECT Kode_Bidan
                                                        FROM t_bidan";
                                                $hasil= @mysqli_query($conn, $query);
                                                while ($tabel =@mysqli_fetch_assoc($hasil))
                                                {
                                                    echo "<option>$tabel[Kode_Bidan]</option>";
                                                }
                                            ?>
                                            </select>
                                    </div>    
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Keluhan</label>
                                        <input type="text" class="form-control" name="keluhan" placeholder="masukkan keluhan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Biaya Administrasi</label>
                                        <input type="text" class="form-control" name="biaya_admin" placeholder="masukkan biaya administrasi">
                                    </div>
                                    <div class="d-grid gap-2 col-6 mx-auto mb-3">
                                        <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                                        <input type="reset" class="btn btn-primary" value="CLEAR"/>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>
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

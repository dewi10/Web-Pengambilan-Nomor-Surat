<!DOCTYPE html>

<style>
@media print {
    body{
        width: 21cm;
        height: 29.7cm;
        margin: 30mm 45mm 30mm 45mm; 
        /* change the margins as you want them to be. */
   } 
}

	.slc{
		width:100%;font-size: .8rem;
		border-radius: 10rem;
		padding: 0.7rem 1rem;
		line-height:1.5;border:1px solid #d1d3e2;color:#6e707e;font-weight:400;
		}
		
		#kd{
			padding:1.2rem 1rem;
			
		}
		.text-gray-800 {
    color: #5a5c69 !important;}
	
	.col-xl-4, .col-sm-12.col-md-6, .dataTables_filter,.dataTables_info,.dataTables_paginat.paging_simple_numbers, .pagination{
		display:none !important;
	}
	
	.table-responsive{
	height:auto !important;	
		
	}
	
	.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl{
		margin-top:20px;
font-size:11px !important;
	}
}
</style>
	
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/theme-override.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                  
                    <!-- Content Row -->

                    <div class="row">

                        <!-- JENIS ARSIP -->
                      
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   
                    

                    <!-- DataTales Example -->
                 
					 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Laporan Daftar Nomor Surat</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nomor Surat</th>
                                            <th>Perihal Surat</th>
                                            <th>Tujuan</th>
                                            <th>Create by</th>
                                        </tr>
                                    </thead>
									
									<style>
										
									
			    
				
									</style>
									<?php
									include "konek.php";
									$no=1;
									$query ="SELECT * FROM klasifikasisurat ORDER BY idsurat";
									$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
									$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
									if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
									while($data = mysqli_fetch_array($sql)){
										
										
									?>
									
									
                                    <tbody>
                                        <tr>
                                            <td><?= $no++;?></td>
                                            <td><?php echo $data['tgl'] ?></td>
                                            <td class="nmr">
												<div class="nmrup">
													<div class="no">
														<?php echo $data['kd_wilayah'] ?><span>-</span><?php echo $data['kd_primer'] ?><span>.</span><?php echo $data['kd_sekunder']  ?><span>.</span><?php echo $data['kd_tersier']  ?><span>-</span><?php echo $data['nomorurut'] ?>
													</div>
													<div class="sifat">
														<?php 
														$sifat=$data['sifat'];
														if($sifat=='Sangat Segera'){
														  echo "<span style='font-size:12px;color:#fff;background:#cc1010;padding:2px'>Sangat Segera</span>";
														} 
														if($sifat=='Segera'){
														  echo "<span style='font-size:12px;color:#fff;background:#ed9b21;padding:2px'>Segera</span>";
														} 
														if($sifat=='Rahasia'){
														  echo "<span style='font-size:12px;color:#fff;background:#666;padding:2px'>Rahasia</span>";
														}
														if($sifat=='Penting'){
														  echo "<span style='font-size:12px;color:#fff;background:#bab4b4;padding:2px'>Penting</span>";
														}
														if($sifat=='Biasa'){
														  echo "<span style='font-size:12px;color:#fff;background:#4f7db5;padding:2px'>Biasa</span>";
														}
														?>
													</div>
												</div>
											</td>
                                            <td><?php echo $data['ket'] ?></td>
                                            <td><?php echo $data['tujuan'] ?></td>
                                            <td><?php echo $data['namakaryawan'] ?></td>
                                        </tr>
                                    </tbody>
									<?php
									}
									}
									mysqli_close($connect);
									?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SIPNS 2021</span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

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
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
	
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

<script>
		window.print();
	</script>

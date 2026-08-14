<!DOCTYPE html>


<?php
	session_start();
	//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
		if($_SESSION['status']!="sudah_login"){
		//melakukan pengalihan
		header("location:index.html");
		} 
	else { ?>
		<style type="text/css">
			.top{
			display:block;
			}
		</style>
	<?php } 
	 
	//Membuat batasan waktu sesion untuk user di PHP 
	$timeout = 15; // Set timeout menit
	$logout_redirect_url = "index.html"; // Set logout URL 
	$timeout = $timeout * 900; // Ubah menit ke detik
	if (isset($_SESSION['start_time'])) {
		$elapsed_time = time() - $_SESSION['start_session'];
		if ($elapsed_time >= $timeout) {
			session_destroy();
			echo "<script>alert('Waktu Anda Telah Habis, Silahkan Login Kembali'); window.location = '$logout'</script>";
		}
	}
	$_SESSION['start_session'] = time();
 ?>
 
	
<style>
	.slc{
	width:60%;font-size: .8rem;float:right;
	border-radius: 10rem;
	padding: 0.7rem 1rem;
	line-height:1.5;border:1px solid #d1d3e2;color:#6e707e;font-weight:400;
	}
		
	label {
    display: inline-block;
    margin-bottom: 0.5rem;
    float: left;
    line-height: 35px;
	}
	
	.lb{
	float:none;
	}

	.form-group {
    margin-bottom: 1rem;
    overflow: hidden;
	}
	
	
	#kd{
	padding:1.2rem 1rem;width:60%;float:right;
	}
	
	#ket{
	
    width: 100%;
    float: none;
    border-radius: 15px;
    border: 1px solid #d1d3e2;
    padding: 10px;
	}
		
	.text-gray-800 {
	color: #5a5c69 !important;
	padding-top: 25px;
	}
	.card-header.py-3.create{
	padding:25px 20px !important}
	
	.card-body.create{
padding:1.25rem 0 1.25rem 1.25rem;
}

.create.in{
    height: 340px;
    overflow: auto;
    padding-right: 20px;
}


.h3.mb-0{
	
	padding-left:10px !important;
}

.jns{
	padding:19px;
}
</style>
	
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

<title>SIPNS - Dashboard</title>
	
  <link href="assets/img/favicon.png" rel="icon">


    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="admin/css/theme-override.css" rel="stylesheet">

</head>

<body id="page-top" class="dashboard-page">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion app-sidebar" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
                <div class="sidebar-brand-icon">
                    <img src="assets/img/logofav.png" alt="Logo SIPNS">
                </div>
                <div class="sidebar-brand-text mx-3">SIPNS</div>
            </a>

            <div class="sidebar-section-label">Main Menu</div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="daftarsurat.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Daftar Nomor Surat</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="setting.php" >
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Setting</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div style="display:none !important;" class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow app-topbar">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 app-page-heading">
                        <div>
                            <span class="app-page-kicker">Workspace</span>
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        </div>
                        <a style="display:none !important;" href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li style="display:none;" class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li style="display:none;" class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div style="display:none !important;" class="topbar-divider d-none d-sm-block"></div>
						
						<?php
							include "konek.php";
							$idregis=$_SESSION['idregis'];
							$query = "SELECT * FROM registrasi where idregis = '$idregis'"; // Tampilkan semua data gambar
							$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
							$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
							if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
								while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
						?>
						
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow app-user-nav">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small top">Selamat datang, <?php echo $data['namakaryawan'] ?> </span>
                                <img class="img-profile rounded-circle"
                                    src="admin/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="setting.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid app-content">

                    <!-- Content Row -->

                    <!-- Content Row -->

					 <div class="row app-dashboard-grid">
                        <!-- CREATE NOMOR SURAT -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4 app-card app-form-card">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between create">
                                    <div>
                                        <span class="app-card-kicker">Input Surat</span>
                                        <h6 class="m-0 font-weight-bold text-primary">Create Nomor Surat</h6>
                                    </div>
                                    <div style="display:none;" class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
								<div class="card-body create">
								
							
									
                                    <form class="user" action="upload3.php" method="post">
									<div class="create in">
                                        <div class="form-group" style="display:none;">
								
											<label>ID Regis</label>
                                            <input id="kd" type="text" name="idregis" class="form-control form-control-user" value="<?php echo $idregis;?>" readonly="readonly"></input>
											
											
							
										<?php
										}
										}
										mysqli_close($connect);
										?>
                                        </div>
										
                                        <div class="form-group" style="display:none;">
											<?php
											include "konek.php";
											// mengambil data barang dengan kode paling besar
											$query = mysqli_query($connect, "SELECT max(idsurat) as kode FROM klasifikasisurat");
											$data = mysqli_fetch_array($query);
											$kodesurat = $data['kode'];

											// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
											// dan diubah ke integer dengan (int)
											$urutan = (int) substr($kodesurat, 3, 3);

											// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
											$urutan++;

											// membentuk kode barang baru
											// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
											// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
											// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
											$huruf = "KS";
											$kodesurat = $huruf . sprintf("%03s", $urutan);		
											?>
								
										<label>ID</label>
                                            <input id="kd" type="text" name="idsurat" class="form-control form-control-user" value="<?php echo $kodesurat;?>" readonly="readonly"></input>
                                        </div>
										
										<?php
										?>
										
                                        <div class="form-group" style="display:none">	
											<label>Tanggal</label>
                                            <input id="kd" type="text" name="tgl" class="form-control form-control-user" value="<?php date_default_timezone_set("Asia/Jakarta"); $tgl=date('l, d-m-Y H:i'); echo $tgl; ?>"  readonly="readonly"></input>
                                        </div>
										
										
										
                                        <div class="form-group">	
											<label>Kode Wilayah</label>
                                            <input id="kd" type="text" name="kd_wilayah" class="form-control form-control-user" value="W.7" readonly="readonly"></input>
                                        </div>
                                        <div class="form-group">	
											<label>Kode Primer</label>
                                           <select id="kd_primer" name="kd_primer" class="slc">
												<option value="">Pilih Kode Primer</option>
													<?php
													include "konek.php";
													$row =  mysqli_query($connect, "SELECT * FROM kodeprimer ORDER BY kd_primer");
													while ($data = mysqli_fetch_array($row)) {
													?>
												<option value="<?php echo $data['kd_primer']; ?>">
													<?php echo $data['kd_primer']; ?>
												</option>
													<?php } ?>
											</select>
                                        </div>
										
                                        <div class="form-group">	
											<label>Kode Sekunder</label>
											<select class="slc" name="kd_sekunder" id="kd_sekunder">
											<option value="">Pilih Kode Sekunder</option>
													<?php
													include "konek.php";
													$row = mysqli_query($connect,"SELECT * FROM kodesekunder");
													while ($data = mysqli_fetch_array($row)) {
													?>
												<option style="display: none;"  id="kd_sekunder" data-key="<?php echo $data['kd_primer']; ?>" class="<?php echo $data['kd_primer']; ?>" value="<?php echo $data['kd_sekunder']; ?>">
													<?php echo $data['kd_sekunder']; ?>
												</option>
													<?php } ?>
										</select>
                                        </div>
										
                                        <div class="form-group">	
											<label>Kode Tersier</label>
                                            <select id="kd_tersier" name="kd_tersier" class="slc" required>
											<option value="">Pilih Kode Tersier</option>
													<?php
													include "konek.php";
													$row = mysqli_query($connect,"SELECT * FROM deskripsi");
													while ($data = mysqli_fetch_array($row)) {
													?>
												<option style="display: none;"  id="kd_tersier" data-primer="<?php echo $data['kd_primer']; ?>" data-key="<?php echo $data['kd_sekunder']; ?>" class="<?php echo $data['kd_sekunder']; ?>" value="<?php echo $data['kd_tersier']; ?>">
													<?php echo $data['kd_tersier']; ?><span> - </span><?php echo $data['deskripsi']; ?>
												</option>
													<?php }?>
											</select>
                                        </div>
										
                                        <div class="form-group">	
											<?php

											include "konek.php";
											// mencari kode barang dengan nilai paling besar
											$query = "SELECT max(nomorurut) as maxKode FROM klasifikasisurat";
											$hasil = mysqli_query($connect,$query);
											$data = mysqli_fetch_array($hasil);
											$kodeurut = $data['maxKode'];

											// mengambil angka atau bilangan dalam kode anggota terbesar,
											// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
											// misal 'BRG001', akan diambil '001'
											// setelah substring bilangan diambil lantas dicasting menjadi integer
											$noUrut = (int) substr($kodeurut, 0, 4);

											// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
											$noUrut++;

											// membentuk kode anggota baru
											// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
											// misal sprintf("%03s", 12); maka akan dihasilkan '012'
											// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
											$char = "";
											$kodeurut = $char . sprintf("%04s", $noUrut);
											?>
											<label>Nomor Urut</label>
                                            <input id="kd" type="text" name="nomorurut" class="form-control form-control-user" value="<?php echo $kodeurut;?>" readonly="readonly"></input>
                                        </div>
										
										
										<?php
											include "konek.php";
											$idregis=$_SESSION['idregis'];
											$query = "SELECT * FROM registrasi where idregis = '$idregis'"; // Tampilkan semua data gambar
											$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
											$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
											if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
												while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
										?>
                                        <div class="form-group" style="display:none">	
											<label>Create by</label>
                                            <input id="kd" type="text" name="namakaryawan" class="form-control form-control-user" value=" <?php echo $data['namakaryawan'] ?> " readonly="readonly"></input>
                                        </div>
										
                                        <div class="form-group">	
											<label>Sifat Surat</label>
											<select class="slc" name="sifat" id="">
												<option value="Sangat Segera" <?php echo $sifat == 'Sangat Segera' ? 'selected' : ''?>>Sangat Segera</option>
												<option value="Segera" <?php echo $sifat == 'Segera' ? 'selected' : ''?>>Segera</option>
												<option value="Rahasia" <?php echo $sifat == 'Rahasia' ? 'selected' : ''?>>Rahasia</option>
												<option value="Penting" <?php echo $sifat == 'Penting' ? 'selected' : ''?>>Penting</option>
												<option value="Biasa" <?php echo $sifat == 'Biasa' ? 'selected' : ''?>>Biasa</option>
											</select>
                                        </div>
										
                                        <div class="form-group">	
											<label>Tujuan</label>
											<input id="kd" type="text" name="tujuan" class="form-control form-control-user"></input>
                                        </div>
										
										 <div class="form-group">	
											<label class="lb">Perihal Surat</label>
											<textarea cols="40" rows="5" id="ket" type="text" name="ket" placeholder=""></textarea>
                                        </div>
										
										
										<?php
										}
										}
										mysqli_close($connect);
										?>
										</div>
										
								</div>
										
										 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <input name="submit" type="submit" class="btn btn-primary btn-user btn-block" value="Create Nomor Surat"></input>
                                        </div>
					
                                    </form>
                            </div>
                        </div>

                        <!-- JENIS ARSIP -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4 app-card app-table-card">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <div>
                                        <span class="app-card-kicker">Referensi</span>
                                        <h6 class="m-0 font-weight-bold text-primary">Jenis Arsip</h6>
                                    </div>
									
									<!-- Topbar Search -->
									<form style="margin-right:0 !important;" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search app-search-form">
										<div class="input-group">
											<input style="background:#fff !important" type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
												aria-label="Search" aria-describedby="basic-addon2" id="search">
											<div class="input-group-append">
												<button class="btn btn-primary" type="button">
													<i class="fas fa-search fa-sm"></i>
												</button>
											</div>
										</div>
									</form>
                                </div>
								
                                <!-- Card Body -->
                                <div class="card-body create">
									<div class="create in">
									<div class="table-responsive">

										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th>No</th>
													<th>Kode</th>
													<th>Jenis Arsip</th>
													<th>Deskripsi</th>
												</tr>
											</thead>
										
											<tbody>
                                            <?php
											include "konek.php";
											$no=1;
											$row =  mysqli_query($connect, "SELECT * FROM deskripsi ORDER BY kd_primer");
											while ($data = mysqli_fetch_array($row)) {
												
											?>
												<tr>
													<td><?= $no++;?></td>
													<td><?php echo $data['kd_primer'] ?><span>.</span><?php echo $data['kd_sekunder'] ?><span>.</span><?php echo $data['kd_tersier']  ?></td>
													<td><?php echo $data['jenisarsip'] ?></td>
													<td class="ds"><?php echo $data['deskripsi'] ?></td>
												</tr>
                                            
											<?php
											}
											
											mysqli_close($connect);
											?>
											</tbody>
                                            <tbody id="no_data" style="display: none;">
                                                <tr>
                                                    <td colspan="4" style="text-align: center;">No data</td>
                                                </tr>
                                            </tbody>
											
										</table>
									</div>
									</div>
                                </div>
									
									<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <div class="jns"></div>
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
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin/js/demo/chart-area-demo.js"></script>
    <script src="admin/js/demo/chart-pie-demo.js"></script>
    <!-- Page level custom scripts -->
    <script src="admin/js/demo/datatables-demo.js"></script>
			
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/jquery.chained.min.js"></script>
		
	<script>
        var timeoutSearch = null;
        $('#search').on('keyup', function(e) {
            clearTimeout(timeoutSearch);
            timeoutSearch = setTimeout(function() {
                var i = 0;
                var exists = 0;
                $('#dataTable').find('tbody:nth-child(2) tr').each(function(idx, el) {
                    $(el).hide();
                    var val = e.target.value.toLowerCase();
                    var no = $(el).find('td:nth-child(1)');
                    var kode = $(el).find('td:nth-child(2)').html().split('<span>.</span>').join('.').toLowerCase();
                    var jenis = $(el).find('td:nth-child(3)').text().toLowerCase();
                    var desc = $(el).find('td:nth-child(4)').text().toLowerCase();
                    
                    if (kode.indexOf(val) > -1 || jenis.indexOf(val) > -1 || desc.indexOf(val) > -1) {
                        if (exists == 0) exists = 1;
                        $(el).show();
                        no.text(i + 1);
                        i++;
                    }

                    if (exists >= 1) {
                        $('#no_data').hide();
                    } else {
                        $('#no_data').show();
                    }
                });
            }, 100);
        });

			$('#kd_primer,#kd_sekunder,#kd_tersier').on('change', function(e) {
				var id = e.target.id;
				
				if (id == 'kd_primer') {
					$('#kd_sekunder').val('');
					$('#kd_tersier').val('');
				} else if (id == 'kd_sekunder') {
					$('#kd_tersier').val('');
				}
				
				var kdPrimer = $('#kd_primer').val() != '';
				var kdSekunder = $('#kd_sekunder').val() != '';
				var isKdSekunderShow = false;
				var kdTersier = $('#kd_tersier').val() != '';
				var isKdTersierShow = false;
				
				if (kdPrimer) {
					isKdSekunderShow = true;
				} else {
					isKdSekunderShow = false;
					$('#kd_sekunder').find('option').each(function(idx, opt) {
						if ($(opt).attr('value') != "") {
							$(opt).hide();
						}
					})
				}
				
				if (isKdSekunderShow) {
					isKdTersierShow = true;
					$('#kd_sekunder').find('option').each(function(idx, opt) {
						if ($(opt).attr('value') != "") {
							if ($(opt).data('key') == $('#kd_primer').val()) {
								$(opt).show();
							} else {
								$(opt).hide();
							}
						}
					})
				} else {
					isKdTersierShow = false;
					$('#kd_tersier').find('option').each(function(idx, opt) {
						if ($(opt).attr('value') != "") {
							$(opt).hide();
						}
					})
				}
				
				if (isKdTersierShow) {
					$('#kd_tersier').find('option').each(function(idx, opt) {
						if ($(opt).attr('value') != "") {
							if ($(opt).data('key') == $('#kd_sekunder').val() && $(opt).data('primer') == $('#kd_primer').val()) {
								$(opt).show();
							} else {
								$(opt).hide();
							}
						}
					})
				}
			});
    </script>	

</body>

</html>

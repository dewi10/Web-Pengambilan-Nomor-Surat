<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIPNS - Register</title>

	
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

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><a style="color:#000" href="index.html"><img style="width: 30px;margin-right: 5px;position: relative;top: -3px;" src="assets/img/logofav.png"></a>Buat Akun!</h1>
                            </div>
							<?php
							include "konek.php";
							// mengambil data barang dengan kode paling besar
							$query = mysqli_query($connect, "SELECT max(idregis) as kode FROM registrasi");
							$data = mysqli_fetch_array($query);
							$koderegis = $data['kode'];

							// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
							// dan diubah ke integer dengan (int)
							$urutan = (int) substr($koderegis, 3, 3);

							// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
							$urutan++;

							// membentuk kode barang baru
							// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
							// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
							// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
							$huruf = "RG";
							$koderegis = $huruf . sprintf("%03s", $urutan);
							?>
                            <form class="user" method="post" enctype="multipart/form-data" action="upload.php">
							
                                <div class="form-group row">
                                    <div style="display:none;" class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="idregis" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $koderegis;?>"
                                            placeholder="ID Register">
                                    </div>
									
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="nip" type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="NIP">
                                    </div>
									
                                    <div class="col-sm-6">
                                        <input type="text" name="namakaryawan" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Nama Karyawan">
                                    </div>
                                </div>
								
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
								
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="username" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Username">
                                    </div>
									
									<?php
									function password($panjang){
									$karakter = '';
									$karakter .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; // karakter alfabet
									$karakter .= '1234567890'; // karakter numerik
									$string = '';
									for ($i=0; $i < $panjang; $i++) { 
									$pos = rand(0, strlen($karakter)-1);
									$string .= $karakter{$pos};
									}
									return $string;
									}
									?>
									
									<div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="password" class="form-control form-control-user"  value="<?php echo password(8);?>"   readonly="readonly"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
									<a style="font-size:11px;color:#999;padding-top:12px;margin:auto;">*Password otomatis, Anda dapat mengubahnya kembali pada menu Setting </a>
                                </div>
								<input class="btn btn-primary btn-user btn-block" name="regis" type="submit" id="submit" value="Register"></input>
								<input class="btn btn-secondary btn-user btn-block" name="reset" type="reset" id="reset" value="Reset"></input>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <div class="text-center">
                                <a style="display:none;" class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Sudah Punya Akun? Login Disini!</a>
                            </div>
                        </div>
                    </div>
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

</body>

</html>

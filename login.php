<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIPNS - Login</title>
	
  <link href="assets/img/favicon.png" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="admin/css/theme-override.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>

#view_pass{
	
    position: relative;
    float: right;
    top: -32px;
    padding-right: 15px;
	
}

</style>

</head>


<body class="bg-gradient-primary login-page">

    <div class="container login-shell">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 login-card">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row no-gutters">
                            <div class="col-lg-6 d-none d-lg-flex login-visual-pane">
                                <div class="login-visual-content">
                                    <div class="login-visual-copy">
                                        <span class="login-badge">SIPNS Portal</span>
                                        <h2>Nomor surat lebih cepat, rapi, dan konsisten.</h2>
                                        <p>Masuk ke sistem untuk membuat nomor surat, mengelola klasifikasi, dan menjaga alur administrasi tetap tertata.</p>
                                    </div>
                                    <div class="bg-login-image" aria-hidden="true"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 login-form-pane">
                                <div class="p-5 login-form-wrap">
                                    <div class="text-center login-brand">
                                        <h1 class="h4 text-gray-900 mb-3"><a style="color:#000" href="index.html"><img style="width: 30px;margin-right: 5px;position: relative;top: -3px;" src="assets/img/logofav.png" alt="Logo SIPNS"></a>SIPNS</h1>
										<p class="login-subtitle">Sistem Informasi Pengambilan Nomor Surat</p>
                                    </div>
                                    <form class="user login-form" action="proseslogin.php" method="post">
                                        <div class="form-group login-field">
                                            <label for="exampleInputEmail">Username</label>
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Username">
                                        </div>
                                        <div class="form-group login-field">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control form-control-user active" id="password" placeholder="Password"> 
											<i id="view_pass" class="fa fa-eye" aria-hidden="true"></i>

                                        </div>
                                        <div style="display:none" class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input name="submit" type="submit" class="btn btn-primary btn-user btn-block" value="Login"></input>
                                        <input name="reset" type="reset" class="btn btn-secondary btn-user btn-block login-reset" value="Reset"></input>
                                        <hr class="login-divider">
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr style="display:none;">
                                    <div class="text-center">
                                        <a style="display:none" class="small" href="forgot-password.html">Belum punya akun?</a>
                                    </div>
                                    <div class="text-center login-footer-link">
                                        <a class="small" href="register.php">Belum punya akun? <br/>Buat Akun disini!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>
	<script>
		$(document).on('click', '#view_pass', function(e) {
			 e.preventDefault();
			 var password = $("#password").val();
			 if($("#password").hasClass("active")) {
				$("#password").attr('type', 'text');
				$("#password").removeClass("active");

			 } else {
				$("#password").attr('type', 'password');
				$("#password").addClass("active");
			}
		});   
	</script>

</body>

</html>

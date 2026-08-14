<?php
session_start();
include 'konek.php';
$username = $_POST['username'];
$password = $_POST['password'];
$result =mysqli_query($connect,"SELECT * FROM registrasi WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($result);	
$data = mysqli_fetch_assoc($result);
// cek kesesuaian password
if ($cek > 0){
    // menyimpan username dan level ke dalam session
    $_SESSION['username'] = $username;
	$_SESSION['status'] = "sudah_login";
    $_SESSION['idregis'] = $data['idregis'];
   echo '<script language="javascript">alert("Anda berhasil Login!"); document.location="home.php";</script>';
}else{

echo '<script language="javascript">alert("Maaf, Username / Password Tidak Sesuai!"); document.location="login.php";</script>';
}
?>
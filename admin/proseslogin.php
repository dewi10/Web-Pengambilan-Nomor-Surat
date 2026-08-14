<?php
session_start();
include 'konek.php';
$useradmin = $_POST['useradmin'];
$passwordadmin = $_POST['passwordadmin'];
$result =mysqli_query($connect,"SELECT * FROM admin WHERE useradmin='$useradmin' and passwordadmin='$passwordadmin'");
$cek = mysqli_num_rows($result);	
$data = mysqli_fetch_assoc($result);
// cek kesesuaian passwordadmin
if ($cek > 0){
    // menyimpan useradmin dan level ke dalam session
    $_SESSION['useradmin'] = $useradmin;
	$_SESSION['status'] = "sudah_login";
   echo '<script language="javascript">alert("Anda berhasil Login!"); document.location="home.php";</script>';
}else{

echo '<script language="javascript">alert("Maaf, Username / Password Tidak Sesuai!"); document.location="index.php";</script>';
}
?>
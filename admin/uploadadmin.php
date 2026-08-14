<?php
include "konek.php";
if(isset($_POST['save'])){ //['ttambah'] merupakan name dari button di form tambah
$useradmin = $_POST['useradmin'];
$passwordadmin	= $_POST['passwordadmin'];
/*
function ubah($daritanggal){
	$pisah = explode('/',$daritanggal);
	$array = array($pisah[2],$pisah[0],$pisah[1]);
	$satukan = implode('-',$array);
	return $satukan;
}
 
$daritanggal = ubah($daritanggal);

function ubahTanggal1($sampaitanggal){
	$pisah = explode('/',$sampaitanggal);
	$array = array($pisah[2],$pisah[0],$pisah[1]);
	$satukan = implode('-',$array);
	return $satukan;
}
 
$sampaitanggal = ubahTanggal1($sampaitanggal);
*/

$cek = mysqli_num_rows(mysqli_query($connect,"SELECT * FROM admin WHERE useradmin='$useradmin'"));


							if ($cek > 0) {
								echo'<script language="javascript">alert("Username sudah terdaftar, Silahkan input Username lain!");document.location="setting.php";</script>';
							}else{
		
$sql = "INSERT INTO admin (useradmin,passwordadmin) VALUES ('$useradmin','$passwordadmin')";
$query	= mysqli_query($connect,$sql);
if($query){
	echo ' <script language="javascript">alert("Admin Berhasil di Input !"); document.location="setting.php";</script>';
	}
	else{
	echo 'Gagal';
	}
}
}
?>




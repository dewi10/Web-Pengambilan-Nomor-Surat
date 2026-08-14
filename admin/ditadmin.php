<?php
include "konek.php";
if(isset($_POST['edit'])){
$useradmin = $_POST['useradmin'];
$passwordadmin	= $_POST['passwordadmin'];
	
$sql	= 'update admin set passwordadmin="'.$passwordadmin.'" where useradmin="'.$useradmin.'"';
$query	= mysqli_query($connect,$sql);
	
if($query){
	echo "<script>alert('Data Berhasil di Update')
    location.replace('setting.php')</script>";
	}
	else{
		 echo "<script>alert('Maaf, Update Data Anda Gagal')
    location.replace('setting.php')</script>";
	}
}
?>




<?php
include "konek.php";
if(isset($_POST['edit'])){
$nip = $_POST['nip'];
$namakaryawan	= $_POST['namakaryawan'];
$email	= $_POST['email'];
$username	= $_POST['username'];
$password	= $_POST['password'];
$idregis	= $_POST['idregis'];
	
$sql	= 'update registrasi set namakaryawan="'.$namakaryawan.'", email="'.$email.'", password="'.$password.'" where idregis="'.$idregis.'"';
$query	= mysqli_query($connect,$sql);
	
if($query){
	echo "<script>alert('Data Berhasil di Update')
    location.replace('daftar.php')</script>";
	}
	else{
		 echo "<script>alert('Maaf, Update Data Anda Gagal')
    location.replace('daftar.php')</script>";
	}
}
?>




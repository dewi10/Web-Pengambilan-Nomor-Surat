<?php
include "konek.php";
$namakaryawan	= $_GET['namakaryawan'];
$sql 	= 'delete from registrasi where namakaryawan="'.$namakaryawan.'"';
$query	= mysqli_query($connect,$sql);
  if(!$connect->error){
				   echo '<script language="javascript">alert(" '.$namakaryawan.' Berhasil di Hapus!"); document.location="daftar.php";</script>';
				  
				}else{
					echo 'Error';
				}
?>


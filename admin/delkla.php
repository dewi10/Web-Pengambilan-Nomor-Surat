<?php
include "konek.php";
$iddeskripsi	= $_GET['iddeskripsi'];
$sql 	= 'delete from deskripsi where iddeskripsi="'.$iddeskripsi.'"';
$query	= mysqli_query($connect,$sql);
  if(!$connect->error){
				   echo '<script language="javascript">alert("Berhasil di Hapus!"); document.location="klasifikasi.php";</script>';
				  
				}else{
					echo 'Error';
				}
?>


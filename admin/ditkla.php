<?php
include "konek.php";
if(isset($_POST['edit'])){
$idsekunder = $_POST['idsekunder'];
$kd_primer	= $_POST['kd_primer'];
$kd_sekunder	= $_POST['kd_sekunder'];
$kd_tersier	= $_POST['kd_tersier'];
$jenisarsip	= $_POST['jenisarsip'];
$deskripsi	= $_POST['deskripsi'];
$iddeskripsi	= $_POST['iddeskripsi'];
	
$sql	= 'update deskripsi set idsekunder="'.$idsekunder.'", kd_primer="'.$kd_primer.'", kd_sekunder="'.$kd_sekunder.'", kd_tersier="'.$kd_tersier.'", jenisarsip="'.$jenisarsip.'", deskripsi="'.$deskripsi.'" where iddeskripsi="'.$iddeskripsi.'"';
$query	= mysqli_query($connect,$sql);
	
if($query){
	echo "<script>alert('Data Berhasil di Update')
    location.replace('klasifikasi.php')</script>";
	}
	else{
		 echo "<script>alert('Maaf, Update Data Anda Gagal')
    location.replace('klasifikasi.php')</script>";
	}
}
?>




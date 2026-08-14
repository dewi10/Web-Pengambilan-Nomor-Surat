<?php
include "konek.php";
if(isset($_POST['edit'])){
$tgl = $_POST['tgl'];
$kd_wilayah	= $_POST['kd_wilayah'];
$kd_primer	= $_POST['kd_primer'];
$kd_sekunder = $_POST['kd_sekunder'];
$kd_tersier = $_POST['kd_tersier'];
$nomorurut = $_POST['nomorurut'];
$sifat = $_POST['sifat'];
$tujuan = $_POST['tujuan'];
$ket = $_POST['ket'];
$idsurat	= $_POST['idsurat'];
	
$sql	= 'update klasifikasisurat set tgl="'.$tgl.'", kd_wilayah="'.$kd_wilayah.'", kd_primer="'.$kd_primer.'", kd_sekunder="'.$kd_sekunder.'", kd_tersier="'.$kd_tersier.'", nomorurut="'.$nomorurut.'", sifat="'.$sifat.'", tujuan="'.$tujuan.'", ket="'.$ket.'" where idsurat="'.$idsurat.'"';
$query	= mysqli_query($connect,$sql);
	
if($query){
	echo "<script>alert('Data Berhasil di Update')
    location.replace('home.php')</script>";
	}
	else{
		 echo "<script>alert('Maaf, Update Data Anda Gagal')
    location.replace('home.php')</script>";
	}
}
?>




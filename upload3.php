<?php
include "konek.php";
if(isset($_POST['submit'])){//['ttambah'] merupakan name dari button di form tambah
$idsurat	= $_POST['idsurat'];
$idregis	= $_POST['idregis'];
$tgl = $_POST['tgl'];
$kd_wilayah	= $_POST['kd_wilayah'];
$kd_primer	= $_POST['kd_primer'];
$kd_sekunder = $_POST['kd_sekunder'];
$kd_tersier = $_POST['kd_tersier'];
$nomorurut = $_POST['nomorurut'];
$sifat = $_POST['sifat'];
$tujuan = $_POST['tujuan'];
$ket = $_POST['ket'];
$namakaryawan = $_POST['namakaryawan'];
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
	
$sql = "INSERT INTO klasifikasisurat (idsurat,idregis,tgl,kd_wilayah,kd_primer,kd_sekunder,kd_tersier,nomorurut,sifat,tujuan,ket,namakaryawan) VALUES ('$idsurat','$idregis','$tgl','$kd_wilayah','$kd_primer','$kd_sekunder','$kd_tersier','$nomorurut','$sifat','$tujuan','$ket','$namakaryawan')";
$query	= mysqli_query($connect,$sql);


	
if($query){
	echo ' <script language="javascript">alert("Daftar Surat Berhasil di Input !"); document.location="daftarsurat.php";</script>';
	}
	else{
	echo 'Gagal';
	}
}
?>




<?php
include "konek.php";
if(isset($_POST['save'])){ //['ttambah'] merupakan name dari button di form tambah
$idprimer	= $_POST['idprimer'];
$kd_primer = $_POST['kd_primer'];
$idsekunder	= $_POST['idsekunder'];
$kd_sekunder = $_POST['kd_sekunder'];
$idtersier	= $_POST['idtersier'];
$kd_tersier = $_POST['kd_tersier'];
$iddeskripsi = $_POST['iddeskripsi'];
$deskripsi = $_POST['deskripsi'];
$jenisarsip = $_POST['jenisarsip'];
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
	
$sql = "INSERT INTO kodeprimer (idprimer,kd_primer) VALUES ('$idprimer','$kd_primer')";
$query	= mysqli_query($connect,$sql);


$sql1 = "INSERT INTO kodesekunder (idsekunder,kd_primer,kd_sekunder) VALUES ('$idsekunder','$kd_primer','$kd_sekunder')";
$query1	= mysqli_query($connect,$sql1);


$sql2 = "INSERT INTO kodetersier (idtersier,idsekunder, kd_sekunder,kd_tersier) VALUES ('$idtersier','$idsekunder','$kd_sekunder','$kd_tersier')";
$query2	= mysqli_query($connect,$sql2);


$sql3 = "INSERT INTO deskripsi (iddeskripsi,idsekunder,kd_primer,kd_sekunder,kd_tersier,deskripsi,jenisarsip) VALUES ('$iddeskripsi','$idsekunder','$kd_primer','$kd_sekunder','$kd_tersier','$deskripsi','$jenisarsip')";
$query3	= mysqli_query($connect,$sql3);


	
if($query || $query3){
	echo ' <script language="javascript">alert("Klasifikasi Surat Berhasil di Input !"); document.location="klasifikasi.php";</script>';
	}
	else{
	echo 'Gagal';
	}
}
?>




<?php
include "konek.php";
$idsurat = $_GET['idsurat'];
$sql 	= 'delete from klasifikasisurat where idsurat="'.$idsurat.'"';
$query	= mysqli_query($connect,$sql);
  if(!$connect->error){
				   echo '<script language="javascript">alert("Berhasil di Hapus!"); document.location="home.php";</script>';
				  
				}else{
					echo 'Error';
				}
?>


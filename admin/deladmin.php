<?php
include "konek.php";
$useradmin = $_GET['useradmin'];
$sql 	= 'delete from admin where useradmin="'.$useradmin.'"';
$query	= mysqli_query($connect,$sql);
  if(!$connect->error){
				   echo '<script language="javascript">alert("'.$useradmin.' Berhasil di Hapus!"); document.location="setting.php";</script>';
				  
				}else{
					echo 'Error';
				}
?>


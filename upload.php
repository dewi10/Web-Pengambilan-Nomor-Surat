<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet"> 

<?php
include "konek.php";
// Ambil Data yang Dikirim dari Form	
if($_POST['regis']){
$idregis=$_POST['idregis']; 
$nip=$_POST['nip']; 
// untuk auto rename images
$str = 'abcdefghijklmnopqrstuvwxyz123456789';
$shuffled = str_shuffle($str);
$data_1   = substr($shuffled , -5); 
$data_2   = substr($shuffled , 0,5); 
$newname  = md5($data_1.$data_2);
$namakaryawan=$_POST['namakaryawan'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

							
							 $cek = mysqli_num_rows(mysqli_query($connect,"SELECT * FROM registrasi WHERE nip='$nip' or username='$username'"));

			
						if(empty($nip) || empty($namakaryawan) || empty($email) || empty($username) || empty($password)){
							echo '<script language="javascript">alert("Anda Harus Mengisi Data dengan Lengkap");document.location="register.php";</script>';
					  
						}else{
							if ($cek > 0) {
								echo'<script language="javascript">alert("NIP atau Email sudah terdaftar");document.location="register.php";</script>';
							}
							else{
						  
						$query = "insert into registrasi(idregis,nip,namakaryawan,email,username,password) VALUES('$idregis','$nip', '$namakaryawan', '$email', '$username', '$password')";
						$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
						
						if(!$query){
						echo 'gagal';
						}
						else{
						echo ' <script language="javascript">alert("Akun berhasil terdaftar, Silahkan Login !"); document.location="login.php";</script>';
						}
													
										
						// mengirim random password ke email user
						/*
						require 'phpmailer/PHPMailerAutoload.php';

						$pesan ="<p style='text-align:center;background:#f7f7f7;width:700px;margin:auto;padding:50px 0;font-family:Open Sans;font-size:15px;border:3px solid #ddd;'>
								 <b style='font-size:20px;border-bottom:3px solid #ddd;padding-bottom:10px;margin-bottom:5px;'>Password Login E-Leave Kemenkumham Bangka Belitung</b><br><br>
								 Hallo <b> $namakaryawan </b><br>
								 Username Anda <b> : $username </b> <br><br>
								 <b style='color:#fff;background:#A00E11;padding:10px;margin-top:10px;font-size:18px;border-radius:3px;'>Password Anda : $password</b>  <br><br>
								 Jangan beritahu password Anda kepada siapapun <br>
								 E-mail ini otomatis, harap tidak membalas pesan<br><br/><br>
								 Best Regard, <br>
								 <b>Admin SIPNS</b>
								 </p>";

						$subjek="Password Login";

						$mail = new PHPMailer(true);

						// memberitahu class untuk menggunakan SMTP
						$mail->IsSMTP();

						// mengaktifkan debug SMTP (untuk pengujian) atur 0 untuk menonaktifkan mode debugging, 1 untuk menampilkan hasil debug
						$mail->SMTPDebug = 0;

						// mengaktifkan otentikasi SMTP
						$mail->SMTPAuth = true;

						// menetapkan prefix ke server
						$mail->SMTPSecure = 'ssl';

						// atur Gmail sebagai server SMTP
						$mail->Host = 'smtp.gmail.com';

						// atur server SMTP untuk server Gmail
						$mail->Port = 465;

						$mail->Username = "noreply.kumhambabel@gmail.com";
						$mail->Password = "El34v3Kumh4mB4b3l";
						$webmaster_email = "noreply.kumhambabel@gmail.com";
						$email = $email;
						$name = $namakaryawan;
						$mail->setFrom = $webmaster_email;
						$mail->FromName="Kemenkumham Bangka Belitung";
						$mail->AddAddress($email, $name);
						 
						$mail->AddReplyTo($webmaster_email, "Kemenkumham Bangka Belitung");
						$mail->WordWrap = 50;
						 
						$mail->IsHTML(true);
						$mail->Subject = $subjek;
						$mail->Body = $pesan;
						 
						$mail->AltBody = "";
						if(!$mail->Send()) {
						 echo "mail error" . $mail->ErrorInfo;
						} else {
						 echo ' <script language="javascript">alert("Registrasi Anda Berhasil, Silahkan Cek Email Anda !"); document.location="index.php";</script>';
						}
						*/
						
						
						
						}
						}
					
					
					
				
			
	}
	



?>


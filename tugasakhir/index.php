<!DOCTYPE html>
<html>
<head>
	<title>DuniaOtomotif</title>
</head>
<body>
	<!-- cek pesan notifikasi -->
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
  <div class="kotak_login">


	<form method="post" action="cek_login.php">
		<table>
			<tr>
				<td class="tulisann">Username</td>
				<td>:</td>
				<td><input type="text" class="form_login" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td class="tulisann">Password</td>
				<td>:</td>
				<td><input type="password" class="form_login" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" class="tombol_login" value="LOGIN"></td>
			</tr>
		</table>
	</form>
	  </div>
  </div>
</body>
</html>
<style media="screen">
.tulisann{
	color: white;
}
  body{
    font-family: sans-serif;
    background-image: url(wallpaperlogin.jpg);
    background-size: 100%;
		text-transform: uppercase;
  }
	.kotak_login{
	width: 350px;
	background: rgba(0, 0, 0, 0.5);
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}
  .tulisan{
    text-align: center;
    margin: 200px auto;
    padding: 30px 20px;
    width: 350px;
    border: 5px solid #333;
    background: white;
		box-sizing: border-box;
		font-size: 11pt;
		margin-bottom: 20px;
  }
	.tombol_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
.form_login{
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
	border-radius: 10px;
}
</style>

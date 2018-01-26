<html>
<head>
	<title>DAFTAR</title>
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
		<form action="<?php echo base_url(). 'index.php/welcome/tambah_aksi_admin'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<h1><center><font color="black">Masukan data user</font></h1></center>
			</tr>
			<tr>
				<td><font color="black">username</font></td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td><font color="black">password</font></td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td><font color="black">fullname</font></td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td><font color="black">level</font></td>
				<td><input type="text" name="level"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Daftar"></td>
			</tr>
		</table>
		</form>	
	</div>	
</body>
</html>
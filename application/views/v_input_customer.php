<html>
<head>
	<title>DAFTAR</title>
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
		<form action="<?php echo base_url(). 'index.php/welcome/tambah_aksi_customer_admin'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<center><font color="black" size="6px">Masukan data customer</font></center>
			</tr>
			<tr>
				<td><font color="black">name</font></td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td><font color="black">address</font></td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td><font color="black">phone</font></td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td><font color="black">gender</font></td>
				<td><input type="text" name="gender"></td>
			</tr>
			<tr>
				<td><a href="<?php echo base_url('index.php/welcome/tampil_customer')?>">back</a></td>
				<td><input type="submit" value="Daftar"></td>
			</tr>
		</table>
		</form>	
	</div>	
</body>
</html>
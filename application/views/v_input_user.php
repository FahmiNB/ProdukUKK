<html>
<head>
	<title>DAFTAR</title>
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
</head>
<body class="bg agileinfo">
   <h1 class="agile_head text-center">Daftar</h1>
     <div class="container w3">
		<form action="<?php echo base_url(). 'index.php/welcome/tambah_aksi_customer'; ?>" method="post">
		<table style="margin:20px auto;">
		</h1>
		<a style="position: relative;" href="<?php echo base_url('index.php/welcome/index')?>" class="login">Home</a>
			<tr>
				<h1><font color="white">Masukan data diri anda</font></h1>
			</tr>
			<tr>
				<td><font color="white">name :</font></td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td><font color="white">address :</font></td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td><font color="white">phone :</font></td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td><font color="white">gender :</font></td>
				<td><input type="text" name="gender"></td>
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
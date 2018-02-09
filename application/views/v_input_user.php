<html>
<head>
	<title>DAFTAR</title>
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
</head>
<body class="bg agileinfo">
   <h1 class="agile_head text-center">Daftar</h1>
     <div class="container w3">
		<form action="<?php echo base_url(). 'index.php/welcome/tambah_aksi_user_index'; ?>" method="post">
		<table style="margin:20px auto;">
		</h1>
		<a style="position: relative;" href="<?php echo base_url('index.php/welcome/index')?>" class="login">Home</a>
			<tr>
				<h1><font color="white">Masukan data diri anda</font></h1>
			</tr>
			<tr>
				<td><font color="white">username :</font></td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td><font color="white">password :</font></td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td><font color="white">fullname :</font></td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td><font color="white">level :</font></td>
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
<html>
<head>
	<title>DAFTAR</title>
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
</head>
<body><body class="bg agileinfo">
   <h1 class="agile_head text-center">Daftar</h1>
     <div class="container w3">
		<form action="<?php echo base_url(). 'index.php/welcome/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>fullname</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td>level</td>
				<td><input type="text" name="level"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
		</form>	
	</div>	
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Edit admin</title>
</head>
<body>
	<center>
		<h1>Edit Admin</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($customer as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/welcome/update_data_customer'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>name</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="name" value="<?php echo $u->name ?>">
				</td>
			</tr>
			<tr>
				<td>address</td>
				<td><input type="text" name="address" value="<?php echo $u->address ?>"></td>
			</tr>
			<tr>
				<td>phone</td>
				<td><input type="text" name="phone" value="<?php echo $u->phone ?>"></td>
			</tr>
			<tr>
				<td>gender</td>
				<td><input type="text" name="gender" value="<?php echo $u->gender ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>
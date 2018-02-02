<html>
<head>
	<title>Tampil Admin</title>
</head>
<body>
	<div style="float: left;">
	<a style="float: left;position: fixed;" href="<?php echo base_url('index.php/welcome/tampil_user')?>">tampil Data User</a><br>
	<a style="float: left;position: fixed;" href="<?php echo base_url('index.php/welcome/tampil_customer')?>">tampil Data customer</a>
	</div>
	<center><h1>Tampil Admin</h1></center>
	<center><?php echo anchor('welcome/tambah_admin','Tambah Data'); ?></center>
	<center>Data User</center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>id</th>
			<th>username</th>
			<th>password</th>
			<th>fullname</th>
			<th>level</th>
			<th>aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $u->id ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td><?php echo $u->fullname ?></td>
			<td><?php echo $u->level ?></td>
			<td>
			      <?php echo anchor('welcome/edit_user/'.$u->id,'Edit'); ?>
			      ||
                  <?php echo anchor('welcome/hapus_user/'.$u->id,'hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
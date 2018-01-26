<html>
<head>
	<title>Tampil Admin</title>
</head>
<body>
	<div style="float: left;">
	<a style="float: left;position: fixed;" href="<?php echo base_url('index.php/welcome/tampil')?>">tampil Data User</a><br>
	<a style="float: left;position: fixed;" href="<?php echo base_url('index.php/welcome/tampil')?>">tampil Data customer</a>
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
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td><?php echo $u->fullname ?></td>
			<td><?php echo $u->level ?></td>
			<td>
			      <?php echo anchor('welcome/edit/'.$u->id,'Edit'); ?>
			      ||
                  <?php echo anchor('welcome/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
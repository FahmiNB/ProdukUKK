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
	<center><?php echo anchor('welcome/tambah_customer','Tambah Data'); ?></center>
	<center>Data Customer</center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>address</th>
			<th>phone</th>
			<th>gender</th>
			<th>aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($customer as $u){ 
		?>
		<tr>
			<td><?php echo $u->id ?></td>
			<td><?php echo $u->name ?></td>
			<td><?php echo $u->address ?></td>
			<td><?php echo $u->phone ?></td>
			<td><?php echo $u->gender ?></td>
			<td>
			      <?php echo anchor('welcome/edit_customer/'.$u->id,'Edit'); ?>
			      ||
                  <?php echo anchor('welcome/hapus_customer/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
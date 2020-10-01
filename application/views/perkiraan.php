<!DOCTYPE html>
<html>
<head>
	<title>Bank BRI</title>
</head>
<body>
<br><br>
<table align="center" bgcolor="blue" width="100%">
	<tr>
		<td><a href="<?= base_url('');?>" style="color: #fff;">Home</a></td>
		<td><a href="<?= base_url('perkiraan');?>" style="color: #fff;">Master Perkiraan</a></td>
		<td><a href="<?= base_url('transaksi');?>" style="color: #fff;">Transaksi</a></td>
		<td><a href="<?= base_url('cetak');?>" target="_blank" style="color: #fff;">Laporan Keuangan</a></td>
	</tr>
</table>
<br><br>
<br><br><br>
<center><a href="<?= base_url(); ?>perkiraan/add" style="background-color: blue; color: #fff">Tambah Master Perkiraan</a></center><br><br>
<table align="center" border="2">
	<tr>
		<th>No</th>
		<th>Nama Perkiraan</th>
		<th>Keterangan</th>
		<th>Aksi</th>
	</tr>
	<?php 
		$i=1;
		foreach($data->result() as $key) : 
	?>
		<tr>
			<td><?= $i++; ?></td>
			<td><?= $key->nama_perkiraan; ?></td>
			<td><?= $key->ket; ?></td>
			<td>
				<a href="<?= base_url('');?>perkiraan/update/<?= $key->id_perkiraan;?>">Edit</a>
				<a href="<?= base_url('');?>perkiraan/delete/<?= $key->id_perkiraan;?>" style="color: red;">Delete</a>
			</td>
		</tr>
	<?php endforeach ;?>
</table>
</body>
</html>
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
		<td><a href="<?= base_url('rekam');?>" style="color: #fff;">Transaksi</a></td>
		<td><a href="<?= base_url('cetak');?>" target="_blank" style="color: #fff;">Laporan Keuangan</a></td>
	</tr>
</table>
<br><br>
<br><br><br>
<center><a href="<?= base_url(); ?>transaksi/add" style="background-color: blue; color: #fff">Tambah Transaksi</a></center><br><br>
<table align="center" border="2">
	<tr>
		<th>No</th>
		<th>Nama Nasabah</th>
		<th>Nama Perkiraan</th>
		<th>Jumlah</th>
		<th>Aksi</th>
	</tr>
	<?php 
		$i=1;
		foreach($data->result() as $key) : 
	?>
		<tr>
			<td><?= $i++; ?></td>
			<td><?= $key->nasabah; ?></td>
			<td><?= $key->id_perkiraan; ?></td>
			<td><?= $key->jumlah; ?></td>
			<td>
				<a href="<?= base_url('');?>transaksi/update/<?= $key->id_transaksi;?>">Edit</a>
				<a href="<?= base_url('');?>transaksi/delete/<?= $key->id_transaksi;?>" style="color: red;">Delete</a>
			</td>
		</tr>
	<?php endforeach ;?>
</table>
</body>
</html>
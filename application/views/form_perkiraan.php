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

<form align="center" action="" enctype="multipart/form-data" method="post">
	<label>Nama Perkiraan</label>
		<input type="text" name="nama_perkiraan" value="<?= $nama_perkiraan; ?>"><br><br>
	<label>Keterangan</label>
		<input type="text" name="ket" value="<?= $ket; ?>"><br><br>
	<button type="submit" value="submit" name="submit">Simpan Data</button>
</form>
</body>
</html>
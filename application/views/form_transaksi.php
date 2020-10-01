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
	<label>Nasabah</label>
		<input type="text" name="nasabah" value="<?= $nasabah; ?>"><br><br>
	<label>Nama Perkiraan</label>
        <select class="form-control" name="id_perkiraan" size="1">
            <option value="0">-- Pilih Nama Perkiraan --</option>
            <?php
            foreach ($perkiraan->result() as $row) :

            if($id_perkiraan==$row->id_perkiraan){
                $select="selected";
            } else{
                $select="";
            }
            ?>

            <option <?php echo $select ;?> value="<?php echo $row->id_perkiraan;?>"><?php echo $row->id_perkiraan;?> : <?php echo $row->nama_perkiraan;?></option>
            <?php endforeach; ?>
        </select><br><br>
	<label>Jumlah</label>
		<input type="text" name="jumlah" value="<?= $jumlah; ?>"><br><br>
	<button type="submit" value="submit" name="submit">Simpan Data</button>
</form>
</body>
</html>
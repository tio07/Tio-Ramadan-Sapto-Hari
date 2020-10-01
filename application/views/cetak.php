<!DOCTYPE html>
<html>
<head>
	<title>Bank BRI</title>
</head>
<body>
<table>
	<h3 align="center">Laporan Keuangan</h3>
</table>
<table align="center" border="2">
	<tr>
		<th>No</th>
		<th>Nasabah</th>
		<th>No Perkiraan</th>
		<th>Jumlah Uang</th>
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
		</tr>
	<?php endforeach ;?>
</table>
<script type="text/javascript">
    window.print();
</script>
</body>
</html>

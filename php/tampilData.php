<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampil Data</title>
</head>
<body>
	<table>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jenis kelamin</th>
			<th>Alamat</th>
			<th>No Hp</th>
		</tr>

		<?php
		include 'koneksi.php';

		$anggota = mysqli_query($koneksi, "SELECT * FROM tabel_anggota");

		foreach ($anggota as $key => $value) {
			// code...
		?>
			<tr>
				<td><?php echo $value['id_anggota']?></td>
				<td><?php echo $value['nama']</td>
				<td><?php echo $value['jenis_kelamin']</td>
				<td><?php echo $value['alamat']</td>
				<td><?php echo $value['telpon']</td>
			</tr>


		<?php
		}
		?>
	</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>

	<h3>Data user</h3>
	<table border="1" class="table">
		<a class="tambah" href="tambah.php">Tambah Data</a>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Kelas</th>
			<th>Alamat</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "db.php";
		$query_mysql = mysql_query("SELECT * FROM siswa")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['jenis_kelamin']; ?></td>
			<td><?php echo $data['kelas']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>

</body>
</html>


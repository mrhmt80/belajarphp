<?php 
	include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
</head>
<body>
	Registrasi Siswa
	<form method='POST' action='aksi_tambah.php'>
<table border=1>

<tr>
	<td>ID</td>
	<td><input type="text" placeholder="NIS" name='id'></td>
</tr>

<tr>
	<td>Nama</td>
	<td><input type="text" placeholder="Nama" name='nama'></td>
</tr>

<tr>
	<td>Jenis Kelamin</td>
	<td><input type="radio" name="jenis_kelamin" value="L">Laki Laki
                        <input type="radio" name="jenis_kelamin" value="P">Perempuan</td>
</tr>

<tr>
	<td>Kelas</td>
	<td>
<select name="kelas">
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select></td>
</tr>

<tr>
    <td>Alamat</td>
    <td><textarea name="alamat" id="alamat" name="alamat"></textarea></td>
   </tr>


<tr>
	<input type='reset' name='reset' value='Reset'>
	<input type='submit' name='submit' value='Daftar'>
</tr>
	
</table>

</body>
</html>
<?php 
	include "db.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM siswa WHERE id='$id'")or die(mysql_error());
	$nomor = 1;

	while($data = mysql_fetch_array($query_mysql)){
	?>



<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
</head>
<body>
	Registrasi Siswa
	<form method='POST' action='update.php'>
<table border=1>



	<input type="hidden" name='id' value="<?php echo $data['id'] ?>">


<tr>
	<td>Nama</td>
	<td><input type="text" name='nama' value="<?php echo $data['nama'] ?>"></td>
</tr>


<tr>
	<td>Jenis Kelamin</td>
	<Td>
				<label><input type="radio" name="jenis_kelamin" value="L" <?php if($data['jenis_kelamin']=='L') echo 'checked'?>>L</label>
      <label><input type="radio" name="jenis_kelamin" value="P" <?php if($data['jenis_kelamin']=='P') echo 'checked'?>>P</label>
					</td>
</tr>

<tr>
	<td>Kelas</td>
	<td>
<select class="form-control" title="Pilih Kelas" name="kelas">
<option value="X" <?php if($data['kelas']=='X'){echo "selected";} ?>  >X</option>
<option value="XI" <?php if($data['kelas']=='XI'){echo "selected";} ?>  >XI</option>
<option value="XII" <?php if($data['kelas']=='XII'){echo "selected";} ?>  >XII</option>

</select>
</td>
</tr>

<tr>
    <td>Alamat</td>
    <td><textarea name="alamat" id="alamat"><?=$data['alamat']?></textarea></td>
   </tr>



<tr>

	<input type='submit' name='submit' value='Simpan'>
</tr>
	
</table>
<?php } ?>

</body>
</html>


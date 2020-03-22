<?php
include 'db.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];


mysql_query("UPDATE siswa SET nama='$nama',jenis_kelamin='$jenis_kelamin',kelas='$kelas',alamat='$alamat' WHERE id='$id'");

header("location:data.php");

?>
<?php

include "db.php";

$id=$_POST['id'];
$nama=$_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$kelas  = $_POST['kelas'];
$alamat = $_POST['alamat'];

mysql_query("INSERT INTO siswa VALUES('$id','$nama','$jenis_kelamin','$kelas','$alamat')");

header("location:data.php");


?>